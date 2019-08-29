<?php
/**
 * Image+ Input Render
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2019 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage input_render
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2019
 */

class ImagePlusInputRender extends modTemplateVarInputRender
{
    /**
     * Return the template path to load
     *
     * @return string
     */
    public function getTemplate()
    {
        $corePath = $this->modx->getOption('imageplus.core_path', null, $this->modx->getOption('core_path') . 'components/imageplus/');
        return $corePath . 'elements/tv/input/tpl/imageplus.render.tpl';
    }

    /**
     * Get lexicon topics
     *
     * @return array
     */
    public function getLexiconTopics()
    {
        return array('imageplus:default');
    }

    /**
     * Process Input Render
     *
     * @param string $value
     * @param array $params
     * @return void|mixed
     */
    public function process($value, array $params = array())
    {
        // Load imageplus class
        $corePath = $this->modx->getOption('imageplus.core_path', null, $this->modx->getOption('core_path') . 'components/imageplus/');
        /** @var ImagePlus $imageplus */
        $imageplus = $this->modx->getService('imageplus', 'ImagePlus', $corePath . 'model/imageplus/', array(
            'core_path' => $corePath
        ));
        $version = $this->modx->getVersionData();

        // Load required javascripts & register global config
        $imageplus->includeScriptAssets();

        // Get Media Source
        /** @var modMediaSource $source */
        $source = $this->tv->getSource(($this->modx->resource) ? $this->modx->resource->get('context_key') : 'mgr');
        if (!$source || !$source->getWorkingContext()) {
            return;
        }
        $source->setRequestProperties($_REQUEST);
        $source->initialize();

        // For migxResourceMediaPath snippet
        $this->setPlaceholder('mediasource', $source->get('id'));

        $context = (isset ($_GET['wctx']) && $_GET['wctx']) ? $_GET['wctx'] : '';
        $obj = $this->modx->getContext($context);
        $contextSettings = ($obj) ? $obj->config : null;
        $tvName = $this->tv->get('name');

        // Prepare tv config for jsonification
        $tvConfig = new stdClass();
        $tvConfig->allowBlank = ($params['allowBlank'] === 'false' || $params['allowBlank'] === 0 || $params['allowBlank'] === false) ? false : true;;
        $tvConfig->targetWidth = (int)$this->getTVConfig('target_width', $tvName, $contextSettings, $params['targetWidth']);
        $tvConfig->targetHeight = (int)$this->getTVConfig('target_height', $tvName, $contextSettings, $params['targetHeight']);
        $tvConfig->targetRatio = $this->getTVConfig('target_ratio', $tvName, $contextSettings, $params['targetRatio']);
        $tvConfig->thumbnailWidth = (int)$this->getTVConfig('thumbnail_width', $tvName, $contextSettings, (isset($params['thumbnailWidth']) && $params['thumbnailWidth']) ? $params['thumbnailWidth'] : (($version['major_version'] >= 3) ? 400 : 150));
        $tvConfig->altTagOn = (bool)$this->getTVConfig('allow_alt_tag', $tvName, $contextSettings, $params['allowAltTag']);
        $tvConfig->captionOn = (bool)$this->getTVConfig('allow_caption', $tvName, $contextSettings, $params['allowCaption']);
        $tvConfig->creditsOn = (bool)$this->getTVConfig('allow_credits', $tvName, $contextSettings, $params['allowCredits']);
        $tvConfig->mediaSource = $source->get('id');
        $tvConfig->tvId = $this->tv->get('id');
        $tvConfig->tvParams = $this->getInputOptions();

        $this->setPlaceholder('tvConfig', json_encode($tvConfig));

        // Prepare value
        $this->tv->value = $imageplus->prepareTvValue($this->tv->value, $params, $this->tv);
    }

    /**
     * @param string $key
     * @param string $name
     * @param array $config
     * @param string $default
     * @return string
     */
    private function getTVConfig($key, $name, $config, $default)
    {
        // Global System/$config setting
        $settingKey = 'imageplus.' . $key;
        // Use MODX System setting if defined and not empty
        $value = (isset($this->modx->config[$settingKey]) && !empty($this->modx->config[$settingKey])) ? $this->modx->config[$settingKey] : $default;
        // Use $config setting if defined and not empty
        $value = (isset($config[$settingKey]) && !empty($config[$settingKey])) ? $config[$settingKey] : $value;

        // TV name based System/$config setting
        if ($name) {
            $settingKey = 'imageplus.' . $name . '.' . $key;
            // Use MODX System setting if defined and not empty
            $value = (isset($this->modx->config[$settingKey]) && !empty($this->modx->config[$settingKey])) ? $this->modx->config[$settingKey] : $value;
            // Use $config setting if defined and not empty
            $value = (isset($config[$settingKey]) && !empty($config[$settingKey])) ? $config[$settingKey] : $value;
        }

        return $value;
    }
}

return 'ImagePlusInputRender';
