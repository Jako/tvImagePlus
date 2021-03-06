<?php
/**
 * Image+ Output Render
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage output_render
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 */

class ImagePlusOutputRender extends modTemplateVarOutputRender
{
    /**
     * Process Output Render
     *
     * @param string $value
     * @param array $params
     * @return string
     */
    public function process($value, array $params = array())
    {
        // Load imageplus class
        $corePath = $this->modx->getOption('imageplus.core_path', null, $this->modx->getOption('core_path') . 'components/imageplus/');
        $imageplus = $this->modx->getService('imageplus', 'ImagePlus', $corePath . 'model/imageplus/', array(
            'core_path' => $corePath
        ));

        $params = array_merge(array(
            'docid' => ($this->modx->resource) ? $this->modx->resource->get('id') : 0
        ), $params);

        return $imageplus->getImageURL($value, $params, $this->tv);
    }
}

return 'ImagePlusOutputRender';
