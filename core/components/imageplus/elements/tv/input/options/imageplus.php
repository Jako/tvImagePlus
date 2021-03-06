<?php
/**
 * Image+ Input Options Render
 *
 * Copyright 2013-2015 by Alan Pich <alan.pich@gmail.com>
 * Copyright 2015-2021 by Thomas Jakobi <thomas.jakobi@partout.info>
 *
 * @package imageplus
 * @subpackage inputoptions_render
 *
 * @author Alan Pich <alan.pich@gmail.com>
 * @author Thomas Jakobi <thomas.jakobi@partout.info>
 * @copyright Alan Pich 2013-2015
 * @copyright Thomas Jakobi 2015-2021
 */

/** @var \modX $modx */
$corePath = $modx->getOption('imageplus.core_path', null, $modx->getOption('core_path') . 'components/imageplus/');
/** @var ImagePlus $imageplus */
$imageplus = $modx->getService('imageplus', 'ImagePlus', $corePath . 'model/imageplus/', array(
    'core_path' => $corePath
));

$selectConfig = json_decode($imageplus->getOption('select_config'), true);
$forceConfig = $imageplus->getOption('force_config', false);

if ($selectConfig) {
    $modx->smarty->assign('selectconfig', json_encode($selectConfig));
    $modx->smarty->assign('forceconfig', intval($forceConfig));
    $modx->smarty->assign('hide', 0);
} else {
    $modx->smarty->assign('selectconfig', '[]');
    $modx->smarty->assign('forceconfig', 0);
    $modx->smarty->assign('hide', 1);
}
return $modx->smarty->fetch($corePath . 'elements/tv/input/tpl/imageplus.options.tpl');