<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Image+ Szerkesztő';
$_lang['imageplus.edit_image'] = 'Kép szerkesztése';
$_lang['imageplus.alt_text'] = 'Alt text';

/** Input options render **/
$_lang['imageplus.targetwidth'] = 'Új szélesség';
$_lang['imageplus.targetwidth_desc'] = 'A készített kép szélessége';
$_lang['imageplus.targetheight'] = 'Új magasság';
$_lang['imageplus.targetheight_desc'] = 'A készített kép magassága';
$_lang['imageplus.targetRatio'] = 'Target Aspect Ratio';
$_lang['imageplus.targetRatio_desc'] = '(Optional, Float) The target aspect ratio for the output image as float value. If the target height and the targed width are set, this value is ignored.';
$_lang['imageplus.thumbnailWidth'] = 'Thumbnail Width';
$_lang['imageplus.thumbnailWidth_desc'] = '(Optional, Integer) The thumbnail width of the image in the template variable panel.';
$_lang['imageplus.allowAltTag'] = 'Alt tag megengedése';
$_lang['imageplus.allowAltTag_desc'] = 'Megengedni a felhasználónak, hogy beállíthassa a title/alt-tag tulajdonságait a képnek';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'További phpThumb paraméterek';
$_lang['imageplus.phpThumbParams_desc'] = 'További filterek stb hozzáadása a phpThumb-hoz. A dokumentáció megtalálható <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">itt</a>.';
$_lang['imageplus.outputChunk'] = 'Kimeneti chunk';
$_lang['imageplus.outputChunk_desc'] = 'Válassz ki egy chunk-ot amibe a kimeneteli TV-ket használhatod majd. Hagyd üresen a nyers output-ért';
$_lang['imageplus.generateUrl'] = 'Generate Thumb URL';
$_lang['imageplus.generateUrl_desc'] = '(Optional) The thumb url is maybe not necessary, if you generate the thumbnail in output chunk i.e. by a pthumb output filter.';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'URL of the thumbnail image';
$_lang['imageplus.placeholder.alt'] = 'Alt text';
$_lang['imageplus.placeholder.width'] = 'Width of the thumbnail image (ignored when 0)';
$_lang['imageplus.placeholder.height'] = 'Height of the thumbnail image (ignored when 0)';
$_lang['imageplus.placeholder.source.src'] = 'Path to the source image';
$_lang['imageplus.placeholder.source.width'] = 'Width of the source image';
$_lang['imageplus.placeholder.source.height'] = 'Height of the source image';
$_lang['imageplus.placeholder.crop.width'] = 'Crop width of the source image';
$_lang['imageplus.placeholder.crop.height'] = 'Crop height of the source image';
$_lang['imageplus.placeholder.crop.x'] = 'Crop x position of the source image';
$_lang['imageplus.placeholder.crop.y'] = 'Crop y position of the source image';
$_lang['imageplus.placeholder.options'] = 'phpThumb option string to generate the thumbnail image';
$_lang['imageplus.placeholder.crop.options'] = 'phpThumb crop option string to generate the thumbnail image';

$_lang['imageplus.error.image_too_small.title'] = 'Image too small';
$_lang['imageplus.error.image_too_small.msg'] = 'The selected image is too small to be used here. Please select a different image.';
$_lang['imageplus.error.image_not_found.title'] = 'Image not found';
$_lang['imageplus.error.image_not_found.msg'] = 'The image was not found and can\'t be cropped. Please select a different image.';

$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Log debug informations in MODX error log.';