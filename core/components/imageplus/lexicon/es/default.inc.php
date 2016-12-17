<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Image+ Editor';
$_lang['imageplus.edit_image'] = 'Edita la imagen';
$_lang['imageplus.alt_text'] = 'Alt text';
$_lang['imageplus.caption'] = 'Caption';
$_lang['imageplus.credits'] = 'Credits';

/** Input options render **/
$_lang['imageplus.section'] = 'Image+ Options';
$_lang['imageplus.section_desc'] = 'The following options could be overridden by context/system settings. Please read the <a href="http://jako.github.io/ImagePlus/usage/">documentation</a> for the appropriate keys in the context/system settings.';
$_lang['imageplus.selectConfig'] = 'Predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfig_desc'] = 'Select a predefined target size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.selectConfigForce'] = 'Forced predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfigForce_desc'] = 'Forced select a predefined crop size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.targetwidth'] = 'Ancho de la imagen';
$_lang['imageplus.targetwidth_desc'] = 'Ancho de la imagen a guardar';
$_lang['imageplus.targetheight'] = 'Alto de la imagen';
$_lang['imageplus.targetheight_desc'] = 'Alto de la imagen a guardar';
$_lang['imageplus.targetRatio'] = 'Target Aspect Ratio';
$_lang['imageplus.targetRatio_desc'] = '(Optional, Float) The target aspect ratio for the output image as float value. If the target height and the targed width are set, this value is ignored.';
$_lang['imageplus.thumbnailWidth'] = 'Thumbnail Width';
$_lang['imageplus.thumbnailWidth_desc'] = '(Optional, Integer) The thumbnail width of the image in the template variable panel.';
$_lang['imageplus.allowAltTag'] = 'Etiqueta Alt';
$_lang['imageplus.allowAltTag_desc'] = 'Permitir al usuario añadir un título/etiqueta alt a la imagen';
$_lang['imageplus.allowCaption'] = 'Show Caption Field';
$_lang['imageplus.allowCaption_desc'] = 'Allow user to enter a caption for the image.';
$_lang['imageplus.allowCredits'] = 'Show Credits Field';
$_lang['imageplus.allowCredits_desc'] = 'Allow user to enter a credit for the image.';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Parámetros phpThumb adicionales';
$_lang['imageplus.phpThumbParams_desc'] = 'Añade filtros adicionales etc a phpThumb. La documentación se puede encontrar <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">aquí</a>.';
$_lang['imageplus.outputChunk'] = 'Resultado chunk';
$_lang['imageplus.outputChunk_desc'] = 'Selecciona un chunk para obtener un resultado del tv. Dejar en vacío para obtener un resultado de la url cruda.';
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

/** System settings **/
$_lang['area_imageplus'] = 'Image+';
$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Log debug informations in MODX error log.';
$_lang['setting_imageplus.target_width'] = $_lang['imageplus.targetwidth'];
$_lang['setting_imageplus.target_width_desc'] = $_lang['imageplus.targetwidth_desc'];
$_lang['setting_imageplus.target_height'] = $_lang['imageplus.targetheight'];
$_lang['setting_imageplus.target_height_desc'] = $_lang['imageplus.targetheight_desc'];
$_lang['setting_imageplus.target_ratio'] = $_lang['imageplus.targetRatio'];
$_lang['setting_imageplus.target_ratio_desc'] = $_lang['imageplus.targetRatio_desc'];
$_lang['setting_imageplus.thumbnail_width'] = $_lang['imageplus.thumbnailWidth'];
$_lang['setting_imageplus.thumbnail_width_desc'] = $_lang['imageplus.thumbnailWidth_desc'];
$_lang['setting_imageplus.allow_alt_tag'] = $_lang['imageplus.allowAltTag'];
$_lang['setting_imageplus.allow_alt_tag_desc'] = $_lang['imageplus.allowAltTag_desc'];
$_lang['setting_imageplus.allow_caption'] = $_lang['imageplus.allowCaption'];
$_lang['setting_imageplus.allow_caption_desc'] = $_lang['imageplus.allowCaption_desc'];
$_lang['setting_imageplus.allow_credits'] = $_lang['imageplus.allowCredits'];
$_lang['setting_imageplus.allow_credits_desc'] = $_lang['imageplus.allowCredits_desc'];
$_lang['setting_imageplus.select_config'] = 'Predefined crop sizes/aspect ratios';
$_lang['setting_imageplus.select_config_desc'] = 'Create predefined crop size/aspect ratios that are selectable in the template variable options.';
$_lang['setting_imageplus.force_config'] = 'Force predefined crop sizes/aspect ratios';
$_lang['setting_imageplus.force_config_desc'] = 'Force the usage of predefined crop size/aspect ratios.';

/** System settings grid */
$_lang['setting_imageplus.configname'] = 'Name';