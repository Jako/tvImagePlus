<?php
/**
 * Image+ cropengine abstract
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage cropengine abstract
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 */

namespace ImagePlus\CropEngines;

abstract class AbstractCropEngine
{
    /**
     * A reference to the modX instance
     * @var \modX $modx
     */
    protected $modx;

    /**
     * A reference to the ImagePlus instance
     * @var \ImagePlus $imageplus
     */
    protected $imageplus;

    public function __construct(\modX &$modx)
    {
        $this->modx = &$modx;

        $corePath = $this->modx->getOption('imageplus.core_path', null, $this->modx->getOption('core_path') . 'components/imageplus/');
        $this->imageplus = $this->modx->getService('imageplus', 'ImagePlus', $corePath . 'model/imageplus/', array(
            'core_path' => $corePath
        ));
    }

    /**
     * Checks that all requirements are met for using this engine
     *
     * @param \modX $modx
     * @return bool True if engine is usable
     */
    public static function engineRequirementsMet(\modX $modx)
    {
        return true;
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
    abstract public function getImageUrl($json, $opts = array(), \modTemplateVar $tv);
}
