<?php
/**
 * Copyright 2013 by Alan Pich <alan.pich@gmail.com>
 *
 * This file is part of ImagePlus
 *
 * ImagePlus is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ImagePlus is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ImagePlus; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package imageplus
 * @author Alan Pich <alan.pich@gmail.com>
 * @copyright Alan Pich 2013
 */

namespace ImagePlus\CropEngines;

/**
 * Class PhpThumbsUp
 *
 * Uses the phpthumbsup extra to generate cropped images
 *
 * @package imageplus
 * @subpackage ImagePlus\CropEngines
 */
class PhpThumbsUp extends AbstractCropEngine
{
    /**
     * Checks that all requirements are met for using
     * this engine
     *
     * @param \modX $modx
     * @return bool True if engine is usable
     */
    public static function engineRequirementsMet(\modX $modx)
    {
        $pto = $modx->getObject('modSnippet', array('name' => 'phpthumbsup'));
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
    public function getImageUrl($json, $opts = array(), \modTemplateVar $tv)
    {

        // Parse json to object
        $data = json_decode($json);

        // If data is null, json was invalid or empty.
        // This is almost certainly because the TV is empty
        if (is_null($data)) {
            $this->modx->log(\xPDO::LOG_LEVEL_INFO, "Image+ TV renderer failed to parse JSON");
            return $tv->default_text;
        }

        // Load up the mediaSource
        $source = $this->modx->getObject('modMediaSource', $data->sourceImg->source);
        if (!$source instanceof \modMediaSource) {
            return 'Image+ Error: Invalid Media Source';
        };
        $source->initialize();

        // Grab absolute system path to image
        $imgPath = $source->getBasePath() . $data->sourceImg->src;

        // Prepare arguments for phpthumbof snippet call
        $cropParams = array(
            'sx' => $data->crop->x,
            'sy' => $data->crop->y,
            'sw' => $data->crop->width,
            'sh' => $data->crop->height,
        );
        $params = array_merge($cropParams, array(
            'w' => $data->targetWidth,
            'h' => $data->targetHeight,
            'far' => true
        ));

        // Add phpThumbParams to phpthumbsup snippet call arguments
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
        $options = ($optParams) ? http_build_query(array_merge($cropParams, $optParams)) : http_build_query(array_merge($params, $optParams));
        $cropOptions = http_build_query($cropParams);

        // Call phpthumbsup for url
        $generateUrl = $this->modx->getOption('generateUrl', $opts, 1);
        if ($generateUrl) {
            $url = $this->modx->runSnippet(
                'phpthumbsup',
                array(
                    'options' => $options,
                    'input' => $imgPath
                )
            );
        } else {
            $url = '';
        }

        $url = str_replace('%2F', '/', $url);

        // If an output chunk is selected, parse that
        $outputChunk = $this->modx->getOption('outputChunk', $opts, '');
        if ($outputChunk) {
            $chunkParams = array(
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
                'crop.options' => $cropOptions
            );
            return $this->modx->getChunk($outputChunk, $chunkParams);
        } else {
            // Otherwise return raw url
            return $url;
        }

    }

}
