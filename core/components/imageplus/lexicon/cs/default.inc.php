<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Image+ Editor';
$_lang['imageplus.edit_image'] = 'Upravit obrázek';
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
$_lang['imageplus.targetwidth'] = 'Cílová šířka (minimální)';
$_lang['imageplus.targetwidth_desc'] = '(Volitelné, celé číslo) Cílová šířka pro výstupní obrázek. Nahraný obrázek by neměl být menší.';
$_lang['imageplus.targetheight'] = 'Cílová výška (minimální)';
$_lang['imageplus.targetheight_desc'] = '(Volitelné, celé číslo) Cílová výška pro výstupní obrázek. Nahraný obrázek by neměl být menší.';
$_lang['imageplus.targetRatio'] = 'Cílový poměr stran';
$_lang['imageplus.targetRatio_desc'] = '(Volitelné, plovoucí) Cílový poměr stran výstupního obrázku. Pokud je nastavena cílová výška a šířka, tato hodnota je ignorována.';
$_lang['imageplus.thumbnailWidth'] = 'Šířka miniatury';
$_lang['imageplus.thumbnailWidth_desc'] = '(Volitelné, celé číslo) Šířka miniatury v panelu Template variable.';
$_lang['imageplus.allowAltTag'] = 'Zobrazit pole "alt" tag';
$_lang['imageplus.allowAltTag_desc'] = 'Povolit uživatelům zadat title/alt.';
$_lang['imageplus.allowCaption'] = 'Show Caption Field';
$_lang['imageplus.allowCaption_desc'] = 'Allow user to enter a caption for the image.';
$_lang['imageplus.allowCredits'] = 'Show Credits Field';
$_lang['imageplus.allowCredits_desc'] = 'Allow user to enter a credit for the image.';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Další phpThumb parametry';
$_lang['imageplus.phpThumbParams_desc'] = 'Přidejte další filtry, např. pro phpThumb. Dokumentaci naleznete <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">zde</a>.';
$_lang['imageplus.outputChunk'] = 'Výstupní chunk';
$_lang['imageplus.outputChunk_desc'] = 'Vyberte chunk pro výstup TV. Nechte prázdé pro výstup čisté URL.';
$_lang['imageplus.generateUrl'] = 'Generovat URL miniatury';
$_lang['imageplus.generateUrl_desc'] = '(Volitelné) URL miniatury možná není třeba, pokud miniaturu generujete v chunku (například pomocí pthumb).';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'URL miniatury';
$_lang['imageplus.placeholder.alt'] = 'Alt text';
$_lang['imageplus.placeholder.width'] = 'Šířka miniatury (ignorováno pokud je 0)';
$_lang['imageplus.placeholder.height'] = 'Výška miniatury (ignorováno pokud je 0)';
$_lang['imageplus.placeholder.source.src'] = 'Cesta ke zdrojovému obrázku';
$_lang['imageplus.placeholder.source.width'] = 'Šířka zdrojového obrázku';
$_lang['imageplus.placeholder.source.height'] = 'Výška zdrojového obrázku';
$_lang['imageplus.placeholder.crop.width'] = 'Oříznout šířku zdrojového obrázku';
$_lang['imageplus.placeholder.crop.height'] = 'Oříznout výšku zdrojového obrázku';
$_lang['imageplus.placeholder.crop.x'] = 'Oříznout podle X osy zdrojového obrázku';
$_lang['imageplus.placeholder.crop.y'] = 'Oříznout podle Y osy zdrojového obrázku';
$_lang['imageplus.placeholder.options'] = 'phpThumb řetězec pro generování miniatur';
$_lang['imageplus.placeholder.crop.options'] = 'phpThumb řetězec ořezu pro generování miniatur';

$_lang['imageplus.error.image_too_small.title'] = 'Obrázek je příliš malý';
$_lang['imageplus.error.image_too_small.msg'] = 'Vybraný obrázek je moc malý pro použití. Prosím vyberte jiný obrázek.';
$_lang['imageplus.error.image_not_found.title'] = 'Obrázek nebyl nalezen';
$_lang['imageplus.error.image_not_found.msg'] = 'Obrázek nebyl nalezen a nelze ho oříznout. Prosím vyberte jiný obrázek.';

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