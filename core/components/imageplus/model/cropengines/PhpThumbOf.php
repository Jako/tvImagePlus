<?php
/**
 * Image+ cropengine
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage cropengine
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 */

namespace ImagePlus\CropEngines;

/**
 * Class PhpThumbOf
 *
 * Uses the phpthumbof extra to generate cropped images
 *
 * @package imageplus
 * @subpackage ImagePlus\CropEngines
 */
class PhpThumbOf extends AbstractCropEngine
{
    /**
     * Checks that all requirements are met for using this engine
     *
     * @param \modX $modx
     * @return bool True if engine is usable
     */
    public static function engineRequirementsMet(\modX $modx)
    {
        $pto = $modx->getObject('modSnippet', array('name' => 'phpthumbof'));
        return $pto instanceof \modSnippet;
    }

    /**
     * Parse image+ data and return a url for the cropped
     * version of the image
     *
     * @param $json
     * @param array $opts
     * @param \modTemplateVar $tv
     * @return string
     */
    public function getImageUrl($json, $opts = array(), \modTemplateVar $tv = null)
    {
        if ($json == '') {
            if ($this->imageplus->getOption('debug')) {
                $this->modx->log(\xPDO::LOG_LEVEL_ERROR, 'The value is empty. Could not prepare the output.', '', 'Image+');
            }
            return ($tv) ? $tv->default_text : '';
        }

        // Parse json to object
        $data = json_decode($json);

        // If data is null, json was invalid or empty.
        // This is almost certainly because the TV is empty
        if (is_null($data)) {
            if ($this->imageplus->getOption('debug')) {
                $this->modx->log(\xPDO::LOG_LEVEL_ERROR, 'The JSON value is invalid. Could not prepare the output.', '', 'Image+');
            }
            return ($tv) ? $tv->default_text : '';
        }

        // Load up the mediaSource
        /** @var \modMediaSource $source */
        $source = $this->modx->getObject('modMediaSource', $data->sourceImg->source);
        if (!$source instanceof \modMediaSource) {
            if ($this->imageplus->getOption('debug')) {
                $this->modx->log(\xPDO::LOG_LEVEL_ERROR, 'Invalid Media Source', '', 'Image+');
            }
            return 'Image+ Error: Invalid Media Source';
        };
        $this->modx->setPlaceholder('docid', $this->modx->getOption('docid', $opts, 0));
        $source->initialize();

        // Grab absolute system path to image
        $imgPath = realpath($source->getBasePath() . $data->sourceImg->src);

        if ($this->imageplus->getOption('debug') && !$imgPath) {
            $this->modx->log(\xPDO::LOG_LEVEL_ERROR, 'The realpath of the image ' . $source->getBasePath() . $data->sourceImg->src . 'is not valid. Please check the media source path setting of the Image+ image.', '', 'Image+');
        }

        // Prepare arguments for phpthumbof snippet call
        $cropParams = array(
            'sx' => $data->crop->x,
            'sy' => $data->crop->y,
            'sw' => $data->crop->width,
            'sh' => $data->crop->height,
        );
        $params = array();
        if ($data->targetWidth) {
            $params = array_merge($params, array(
                'w' => $data->targetWidth
            ));
        }
        if ($data->targetHeight) {
            $params = array_merge($params, array(
                'h' => $data->targetHeight
            ));
        }
        if ($data->targetWidth && $data->targetHeight) {
            $params = array_merge($params, array(
                'far' => true
            ));
        }
        $params = array_merge($cropParams, $params);

        // Add phpThumbParams to phpthumbof snippet call arguments
        $phpThumbParams = $this->modx->getOption('phpThumbParams', $opts, '');
        $optParams = array();
        if ($phpThumbParams) {
            parse_str($phpThumbParams, $optParams);
            foreach ($optParams as $key => $val) {
                if (empty($val)) {
                    unset($optParams[$key]);
                };
            }
        };
        $optParams = ($optParams) ? array_merge($cropParams, $optParams) : array_merge($params, $optParams);
        $options = http_build_query($optParams);
        $options = rawurldecode(preg_replace('/%5B[0-9]+%5D/simU', '%5B%5D', $options));
        $cropOptions = http_build_query($cropParams);

        $data->targetWidth = isset($optParams['w']) ? $optParams['w'] : 0;
        $data->targetHeight = isset($optParams['h']) ? $optParams['h'] : 0;

        // Call phpthumbof for url
        $generateUrl = $this->modx->getOption('generateUrl', $opts, 1);
        if (file_exists($imgPath)) {
            if ($generateUrl) {
                $url = $this->modx->runSnippet(
                    'phpthumbof',
                    array(
                        'options' => $options,
                        'input' => $imgPath
                    )
                );
            } else {
                $url = $source->getBaseUrl() . $data->sourceImg->src;
            }
        } else {
            $url = $data->sourceImg->src;
        }

        // If an output chunk is selected, parse that
        $outputChunk = $this->modx->getOption('outputChunk', $opts, '');
        if ($outputChunk) {
            $chunkParams = array_merge($opts, array(
                'url' => $url,
                'alt' => $data->altTag,
                'width' => $data->targetWidth,
                'height' => $data->targetHeight,
                'source.src' => $imgPath,
                'source.width' => $data->sourceImg->width,
                'source.height' => $data->sourceImg->height,
                'crop.width' => $data->crop->width,
                'crop.height' => $data->crop->height,
                'crop.x' => $data->crop->x,
                'crop.y' => $data->crop->y,
                'options' => $options,
                'crop.options' => $cropOptions,
                'caption' => isset($data->caption) ? $data->caption : '',
                'credits' => isset($data->credits) ? $data->credits : ''
            ));
            return $this->modx->getChunk($outputChunk, $chunkParams);
        } else {
            // Otherwise return raw url
            return $url;
        }
    }
}
