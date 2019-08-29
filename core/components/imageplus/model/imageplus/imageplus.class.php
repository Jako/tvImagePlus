<?php
/**
 * Image+ classfile
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2019 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage classfile
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2019
 */

use ImagePlus\CropEngines;

/**
 * class ImagePlus
 */
class ImagePlus
{
    /**
     * A reference to the modX instance
     * @var modX $modx
     */
    public $modx;

    /**
     * The namespace
     * @var string $namespace
     */
    public $namespace = 'imageplus';

    /**
     * The version
     * @var string $version
     */
    public $version = '2.8.0';

    /**
     * The class options
     * @var array $options
     */
    public $options = array();

    /**
     * ImagePlus constructor
     *
     * @param modX $modx A reference to the modX instance.
     * @param array $options An array of options. Optional.
     */
    function __construct(modX &$modx, $options = array())
    {
        $this->modx = &$modx;

        $corePath = $this->getOption('core_path', $options, $this->modx->getOption('core_path') . 'components/imageplus/');
        $assetsPath = $this->getOption('assets_path', $options, $this->modx->getOption('assets_path') . 'components/imageplus/');
        $assetsUrl = $this->getOption('assets_url', $options, $this->modx->getOption('assets_url') . 'components/imageplus/');

        // Load some default paths for easier management
        $this->options = array_merge(array(
            'namespace' => $this->namespace,
            'version' => $this->version,
            'corePath' => $corePath,
            'modelPath' => $corePath . 'model/',
            'vendorPath' => $corePath . 'vendor/',
            'chunksPath' => $corePath . 'elements/chunks/',
            'pagesPath' => $corePath . 'elements/pages/',
            'snippetsPath' => $corePath . 'elements/snippets/',
            'pluginsPath' => $corePath . 'elements/plugins/',
            'controllersPath' => $corePath . 'controllers/',
            'processorsPath' => $corePath . 'processors/',
            'templatesPath' => $corePath . 'templates/',
            'assetsPath' => $assetsPath,
            'assetsUrl' => $assetsUrl,
            'jsUrl' => $assetsUrl . 'js/',
            'cssUrl' => $assetsUrl . 'css/',
            'imagesUrl' => $assetsUrl . 'images/',
            'connectorUrl' => $assetsUrl . 'connector.php'
        ), $options);

        // Add default options
        $this->options = array_merge($this->options, array(
            'sources' => $this->loadSourceMap()
        ));

        $this->checkDependencies();

        $this->modx->lexicon->load($this->namespace . ':default');
    }

    /**
     * Get a local configuration option or a namespaced system setting by key.
     *
     * @param string $key The option key to search for.
     * @param array $options An array of options that override local options.
     * @param mixed $default The default value returned if the option is not found locally or as a
     * namespaced system setting; by default this value is null.
     * @return mixed The option value or the default value specified.
     */
    public function getOption($key, $options = array(), $default = null)
    {
        $option = $default;
        if (!empty($key) && is_string($key)) {
            if ($options != null && array_key_exists($key, $options)) {
                $option = $options[$key];
            } elseif (array_key_exists($key, $this->options)) {
                $option = $this->options[$key];
            } elseif (array_key_exists("{$this->namespace}.{$key}", $this->modx->config)) {
                $option = $this->modx->getOption("{$this->namespace}.{$key}");
            }
        }
        return $option;
    }

    /**
     * Check dependencies and raise warnings if not met
     */
    private function checkDependencies()
    {
        // Register a micro autoloader for in-house engines
        spl_autoload_register(function ($className) {
            if (strpos($className, 'ImagePlus\\CropEngines\\') === false) {
                return;
            }
            $class = str_replace('ImagePlus\\CropEngines\\', '', $className);
            $path = realpath(dirname(__FILE__) . '/../cropengines/' . $class . '.php');
            if (is_readable($path)) {
                include $path;
            }
        });

        // Do some basic intelligent sniffing
        if (!isset($this->options['cropEngineClass'])) {
            if (CropEngines\PhpThumbsUp::engineRequirementsMet($this->modx)) {
                $this->options['cropEngineClass'] = '\\ImagePlus\\CropEngines\\PhpThumbsUp';
            } elseif (CropEngines\PhpThumbOf::engineRequirementsMet($this->modx)) {
                $this->options['cropEngineClass'] = '\\ImagePlus\\CropEngines\\PhpThumbOf';
            } elseif (CropEngines\PhpThumbOn::engineRequirementsMet($this->modx)) {
                $this->options['cropEngineClass'] = '\\ImagePlus\\CropEngines\\PhpThumbOn';
            }
            if (!$this->options['cropEngineClass']) {
                // Handle unmet dependencies
                $this->options['hasUnmetDependencies'] = true;
                return;
            }
        }
        $this->options['hasUnmetDependencies'] = false;
    }

    /**
     * Get a map of MediaSource id => baseUrl
     *
     * @return array
     */
    private function loadSourceMap()
    {
        $sources = $this->modx->getCollection('sources.modMediaSource');
        $sourceMap = array();
        foreach ($sources as $source) {
            /** @var modMediaSource $source */
            $source->initialize();
            $sourceMap[$source->get('id')] = new stdClass();
            $sourceMap[$source->get('id')]->url = $source->getBaseUrl();
        };
        return $sourceMap;
    }

    /**
     * Render supporting javascript to try and help it work with MIGX etc
     */
    public function includeScriptAssets()
    {
        $assetsUrl = $this->getOption('assetsUrl');
        $jsUrl = $this->getOption('jsUrl') . 'mgr/';
        $jsSourceUrl = $assetsUrl . '../../../source/js/mgr/';
        $cssUrl = $this->getOption('cssUrl') . 'mgr/';
        $cssSourceUrl = $assetsUrl . '../../../source/css/mgr/';
        $nodeUrl = $assetsUrl . '../../../node_modules/';

        if ($this->getOption('debug') && ($this->getOption('assetsUrl') != MODX_ASSETS_URL . 'components/imageplus/')) {
            $this->modx->controller->addCss($cssSourceUrl . 'imageplus.css?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsSourceUrl . 'imageplus.js?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsSourceUrl . 'imageplus.panel.input.js?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsSourceUrl . 'imageplus.window.editor.js?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsSourceUrl . 'imageplus.migx_renderer.js?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsSourceUrl . 'tools/JSON2.js?v=v' . $this->version);
            $this->modx->controller->addJavascript($nodeUrl . 'jquery/dist/jquery.slim.min.js?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsSourceUrl . 'jcrop/jquery.jcrop.min.js?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsSourceUrl . 'imageplus.jquery.imagecrop.js?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsSourceUrl . 'imageplus.grid.js?v=v' . $this->version);
        } else {
            $this->modx->controller->addCss($cssUrl . 'imageplus.min.css?v=v' . $this->version);
            $this->modx->controller->addJavascript($jsUrl . 'imageplus.min.js?v=v' . $this->version);
        }
        $this->modx->controller->addHtml('<script type="text/javascript">' .
            'ImagePlus.config = ' . json_encode($this->options, JSON_PRETTY_PRINT) . ';' .
            '</script>');
    }

    /**
     * Return a scaled, cached version of the source image for front-end use
     *
     * @param string $json
     * @param array $opts
     * @param modTemplateVar $tv
     * @return string
     * @internal param array $params
     */
    public function getImageURL($json, $opts = array(), modTemplateVar $tv = null)
    {
        // Check system settings for crop engine override
        $engineClass = $this->getOption('cropEngineClass');

        /**
         * @var ImagePlus\CropEngines\AbstractCropEngine $cropEngine
         */
        $cropEngine = new $engineClass($this->modx, array(
            'core_path' => $this->getOption('corePath')
        ));

        // Check crop engine is usable
        if ($this->options['hasUnmetDependencies']) {
            $this->modx->log(xPDO::LOG_LEVEL_ERROR, 'Requirements not met for crop engine.', '', 'Image+');
            return 'Image+ error - requirements not met for crop engine.';
        }

        $json = $this->prepareTvValue($json, $opts, $tv);
        return $cropEngine->getImageUrl($json, $opts, $tv);
    }

    /**
     * Prepare a JSON encoded object and return a valid JSON encoded Image+ object
     *
     * @param string $json JSON value to prepare
     * @param array $opts
     * @param modTemplateVar $tv
     * @return string
     */
    public function prepareTvValue($json, $opts = array(), modTemplateVar $tv = null)
    {
        // Prepare value
        $decoded = json_decode($json);
        if (!$decoded) {
            // The variable does not contain an Image+ image object
            if ($json != '') {
                // Get Media Source
                /** @var modMediaSource $source */
                if ($tv) {
                    $source = $tv->getSource(($this->modx->resource) ? $this->modx->resource->get('context_key') : 'mgr');
                } else {
                    $source = $this->modx->getObject('modMediaSource', $this->modx->getOption('default_media_source'));
                }
                if (!($source && $source->getWorkingContext())) {
                    $this->modx->log(xPDO::LOG_LEVEL_ERROR, 'Invalid Media Source', '', 'Image+');
                    return '';
                }
                $source->setRequestProperties($_REQUEST);
                $source->initialize();

                // The variable contains a value and has to be converted to an Image+ image object
                $imgPath = $source->getBasePath() . $json;
                if (file_exists($imgPath)) {
                    $size = getimagesize($imgPath);
                } else {
                    if ($this->getOption('debug')) {
                        $this->modx->log(xPDO::LOG_LEVEL_ERROR, 'The template variabe value does not contain an existing image', '', 'Image+');
                    }
                    $size = false;
                }
                $json = json_encode(array(
                    'altTag' => '',
                    'crop' => array(
                        'height' => ($size) ? $size[1] : 0,
                        'width' => ($size) ? $size[0] : 0,
                        'x' => 0,
                        'y' => 0
                    ),
                    'sourceImg' => array(
                        'height' => ($size) ? $size[1] : 0,
                        'width' => ($size) ? $size[0] : 0,
                        'source' => $source->get('id'),
                        'src' => $json
                    ),
                    'targetHeight' => (int)$opts['targetHeight'],
                    'targetWidth' => (int)$opts['targetWidth']
                ));
            }
        }
        return $json;
    }
}

define('imageplus', true);
