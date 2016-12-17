<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Image+ editor';
$_lang['imageplus.edit_image'] = 'Rediger billede';
$_lang['imageplus.alt_text'] = 'Alt-tekst';
$_lang['imageplus.caption'] = 'Caption';
$_lang['imageplus.credits'] = 'Credits';

/** Input options render **/
$_lang['imageplus.section'] = 'Image+ Options';
$_lang['imageplus.section_desc'] = 'The following options could be overridden by context/system settings. Please read the <a href="http://jako.github.io/ImagePlus/usage/">documentation</a> for the appropriate keys in the context/system settings.';
$_lang['imageplus.selectConfig'] = 'Predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfig_desc'] = 'Select a predefined target size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.selectConfigForce'] = 'Forced predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfigForce_desc'] = 'Forced select a predefined crop size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.targetwidth'] = 'Ønsket (minimums) bredde';
$_lang['imageplus.targetwidth_desc'] = 'Den ønskede bredde for det færdige billede';
$_lang['imageplus.targetheight'] = 'Højde';
$_lang['imageplus.targetheight_desc'] = 'Den ønskede højde for det færdige billede';
$_lang['imageplus.targetRatio'] = 'Ønsket højde- breddeforhold';
$_lang['imageplus.targetRatio_desc'] = '(Valgfri, float) Det ønskede højde-breddeforhold for billedet som en float værdi. Hvis den ønskede højde og den ønskede bredde er sat bliver denne værdi ignoreret.';
$_lang['imageplus.thumbnailWidth'] = 'Miniature bredde';
$_lang['imageplus.thumbnailWidth_desc'] = '(Valgfrit, heltal) Bredden på miniaturebilledet i TV-fanen.';
$_lang['imageplus.allowAltTag'] = 'Alternativ tekst';
$_lang['imageplus.allowAltTag_desc'] = 'Tillad brugeren at skrive en alternativ (mouse-over) tekst til billedet';
$_lang['imageplus.allowCaption'] = 'Show Caption Field';
$_lang['imageplus.allowCaption_desc'] = 'Allow user to enter a caption for the image.';
$_lang['imageplus.allowCredits'] = 'Show Credits Field';
$_lang['imageplus.allowCredits_desc'] = 'Allow user to enter a credit for the image.';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Ekstra phpThumb parametre';
$_lang['imageplus.phpThumbParams_desc'] = 'Tilføj ekstra filtre osv. til phpThumb. Dokumentationen kan findes <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">her</a>.';
$_lang['imageplus.outputChunk'] = 'Output chunk';
$_lang['imageplus.outputChunk_desc'] = 'Vælg en chunk til tv output. Lad feltet være tomt for kun at få en URL';
$_lang['imageplus.generateUrl'] = 'Generer URL til miniature';
$_lang['imageplus.generateUrl_desc'] = '(Valgfrit) URL til miniature er måske ikke nødvendigt hvis du generer miniaturen i output chunk\'en f.eks. ved brug af pthumb output filter.';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'URL til miniaturebilledet';
$_lang['imageplus.placeholder.alt'] = 'Alt-tekst';
$_lang['imageplus.placeholder.width'] = 'Miniaturebredde (ignoreret ved 0)';
$_lang['imageplus.placeholder.height'] = 'Miniaturehøjde (ignoreret ved 0)';
$_lang['imageplus.placeholder.source.src'] = 'Stien til kildebilledet';
$_lang['imageplus.placeholder.source.width'] = 'Bredden på kildebilledet';
$_lang['imageplus.placeholder.source.height'] = 'Højden på kildebilledet';
$_lang['imageplus.placeholder.crop.width'] = 'Beskær kildebilledets bredde';
$_lang['imageplus.placeholder.crop.height'] = 'Beskær kildebilledets højde';
$_lang['imageplus.placeholder.crop.x'] = 'Beskær x placering af kildebilledet';
$_lang['imageplus.placeholder.crop.y'] = 'Beskær y placering af kildebilledet';
$_lang['imageplus.placeholder.options'] = 'phpThumb indstillingsstreng til at generere miniaturebilledet';
$_lang['imageplus.placeholder.crop.options'] = 'phpThumb beskæringsindstillingsstreng til at generere miniaturebilledet';

$_lang['imageplus.error.image_too_small.title'] = 'Billedet er for lille';
$_lang['imageplus.error.image_too_small.msg'] = 'Det valgte billede er for småt til at blive brugt her. Vælg venligst et andet billede.';
$_lang['imageplus.error.image_not_found.title'] = 'Billedet blev ikke fundet';
$_lang['imageplus.error.image_not_found.msg'] = 'Billedet blev ikke fundet og kan dermed ikke blive beskåret. Vælg venligst et andet billede.';

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