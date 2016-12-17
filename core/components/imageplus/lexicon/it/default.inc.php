<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Redattore Image+';
$_lang['imageplus.edit_image'] = 'Modifca Immagine';
$_lang['imageplus.alt_text'] = 'Testo per l\'attributo Alt';
$_lang['imageplus.caption'] = 'Caption';
$_lang['imageplus.credits'] = 'Credits';

/** Input options render **/
$_lang['imageplus.section'] = 'Image+ Options';
$_lang['imageplus.section_desc'] = 'The following options could be overridden by context/system settings. Please read the <a href="http://jako.github.io/ImagePlus/usage/">documentation</a> for the appropriate keys in the context/system settings.';
$_lang['imageplus.selectConfig'] = 'Predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfig_desc'] = 'Select a predefined target size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.selectConfigForce'] = 'Forced predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfigForce_desc'] = 'Forced select a predefined crop size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.targetwidth'] = 'Larghezza';
$_lang['imageplus.targetwidth_desc'] = 'La larghezza desiderata per l\'immagine finale';
$_lang['imageplus.targetheight'] = 'Altezza';
$_lang['imageplus.targetheight_desc'] = 'L\'altezza desiderata per l\'immagine finale';
$_lang['imageplus.targetRatio'] = 'Le proporzioni del bersaglio';
$_lang['imageplus.targetRatio_desc'] = '(Opzionale, Float [numero intero/frazionale]) Le proporzioni con valore di tipo Float per rendere l\'immagine. Se l\'altezza e la larghezza hanno il valore impostato, il valore delle proporzioni viene ignorato.';
$_lang['imageplus.thumbnailWidth'] = 'La larghezza della miniatura dell\'immagine';
$_lang['imageplus.thumbnailWidth_desc'] = '(Opzionale, Numero Intero) La lunghezza della miniatura dell\'immagine nella pannello della Template Variable.';
$_lang['imageplus.allowAltTag'] = 'Tag alt';
$_lang['imageplus.allowAltTag_desc'] = 'Consente all\'utente di inserire un titolo/tag-alt per l\'immagine';
$_lang['imageplus.allowCaption'] = 'Show Caption Field';
$_lang['imageplus.allowCaption_desc'] = 'Allow user to enter a caption for the image.';
$_lang['imageplus.allowCredits'] = 'Show Credits Field';
$_lang['imageplus.allowCredits_desc'] = 'Allow user to enter a credit for the image.';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Parametri aggiuntivi di phpThumb';
$_lang['imageplus.phpThumbParams_desc'] = 'Aggiungi filtri aggiuntivi ecc. per phpThumb. La documentazione può essere trovata <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">qui</a>.';
$_lang['imageplus.outputChunk'] = 'Chunk Output';
$_lang['imageplus.outputChunk_desc'] = 'Seleziona un chunk per l\'output della variabile tv. Lascia vuoto per avere un output del semplice url';
$_lang['imageplus.generateUrl'] = 'Generare l\'URL della miniatura dell\'immagine';
$_lang['imageplus.generateUrl_desc'] = '(Opzionale) L\'URL della miniatura dell\'immagine potrebbe non essere necessario se questa viene generata nella \'output chunk\' i.e. dalla \'output filter\' del pthumb.';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'URL della miniatura dell\'immagine';
$_lang['imageplus.placeholder.alt'] = 'Testo per l\'attributo Alt';
$_lang['imageplus.placeholder.width'] = 'La larghezza della miniatura dell\'immagine (ignorata quando 0)';
$_lang['imageplus.placeholder.height'] = 'L\'altezza della miniatura dell\'immagine (ignorata quando 0)';
$_lang['imageplus.placeholder.source.src'] = 'Percorso dell\'immagine di origine';
$_lang['imageplus.placeholder.source.width'] = 'La larghezza dell\'immagine di origine';
$_lang['imageplus.placeholder.source.height'] = 'L\'altezza dell\'immagine di origine';
$_lang['imageplus.placeholder.crop.width'] = 'Ritaglio della larghezza dell\'immagine di origine';
$_lang['imageplus.placeholder.crop.height'] = 'Ritaglio dell\'altezza dell\'immagine di origine';
$_lang['imageplus.placeholder.crop.x'] = 'Ritaglio della posizione orizzontale (asse x) dell\'immagine di origine';
$_lang['imageplus.placeholder.crop.y'] = 'Ritaglio della posizione verticale (asse y) dell\'immagine di origine';
$_lang['imageplus.placeholder.options'] = 'L\'opzione su phpThumb per generare la miniatura dell\'immagine';
$_lang['imageplus.placeholder.crop.options'] = 'L\'opzione di ritaglio su phpthumb per generare la miniatura dell\'immagine';

$_lang['imageplus.error.image_too_small.title'] = 'L\'immagine è troppo piccola';
$_lang['imageplus.error.image_too_small.msg'] = 'L\'immagine selezionata è troppo piccola per essere usata qui. Si prega di selezionare un\'altra immagine.';
$_lang['imageplus.error.image_not_found.title'] = 'L\'immagine non è stata trovata';
$_lang['imageplus.error.image_not_found.msg'] = 'L\'immagine non è stata trovata e percio non può essere tagliata. Si prega di selezionare un\'altra immagine.';

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