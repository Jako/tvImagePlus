<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Éditeur Image+';
$_lang['imageplus.edit_image'] = 'Éditer l\'image';
$_lang['imageplus.alt_text'] = 'Texte de l\'attribut Alt';
$_lang['imageplus.caption'] = 'Caption';
$_lang['imageplus.credits'] = 'Credits';

/** Input options render **/
$_lang['imageplus.section'] = 'Image+ Options';
$_lang['imageplus.section_desc'] = 'The following options could be overridden by context/system settings. Please read the <a href="http://jako.github.io/ImagePlus/usage/">documentation</a> for the appropriate keys in the context/system settings.';
$_lang['imageplus.selectConfig'] = 'Predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfig_desc'] = 'Select a predefined target size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.selectConfigForce'] = 'Forced predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfigForce_desc'] = 'Forced select a predefined crop size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.targetwidth'] = 'Largeur (minimale) de la cible';
$_lang['imageplus.targetwidth_desc'] = '(Facultatif, entier) La largeur ciblée de l\'image en sortie. L\'image téléchargée devrait avoir cette largeur minimale.';
$_lang['imageplus.targetheight'] = 'Hauteur  (minimale) de la cible';
$_lang['imageplus.targetheight_desc'] = '(Facultatif, entier) La hauteur ciblée de l\'image en sortie. L\'image téléchargée devrait avoir cette hauteur minimale.';
$_lang['imageplus.targetRatio'] = 'Aspect ratio cible';
$_lang['imageplus.targetRatio_desc'] = '(Facultatif, Float) Les proportions ciblée de l\'image en sortie, valeur de type float. Si la hauteur et la largeur de la cible sont définies, cette valeur est ignorée.';
$_lang['imageplus.thumbnailWidth'] = 'Largeur miniature';
$_lang['imageplus.thumbnailWidth_desc'] = '(Optionnel, entier) Largeur de la miniature dans le panneau de variable de modèle (TV).';
$_lang['imageplus.allowAltTag'] = 'Tag Alt';
$_lang['imageplus.allowAltTag_desc'] = 'Autorise l\'utilisateur à entrer un titre/tag alt pour l\'image';
$_lang['imageplus.allowCaption'] = 'Show Caption Field';
$_lang['imageplus.allowCaption_desc'] = 'Allow user to enter a caption for the image.';
$_lang['imageplus.allowCredits'] = 'Show Credits Field';
$_lang['imageplus.allowCredits_desc'] = 'Allow user to enter a credit for the image.';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Paramètres phpThumb additionnels';
$_lang['imageplus.phpThumbParams_desc'] = 'Ajoutez des filtres additionnels pour phpThumb. La documentation est disponible <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">ici</a>.';
$_lang['imageplus.outputChunk'] = 'Chunk d\'affichage';
$_lang['imageplus.outputChunk_desc'] = 'Sélectionnez le chunk utilisé pour afficher le résultat de la TV. Laissez vide pour obtenir l\'URL brute du résultat.';
$_lang['imageplus.generateUrl'] = 'Génère l\'URL de la miniature';
$_lang['imageplus.generateUrl_desc'] = '(Optionnel) L\'URL de la miniature n\'est peut-être pas nécessaire, si vous générez la miniature dans le chunk de sortie (exemple par un filtre pthumb).';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'URL de l\'image de miniature';
$_lang['imageplus.placeholder.alt'] = 'Texte de l\'attribut Alt';
$_lang['imageplus.placeholder.width'] = 'Largeur de l\'image miniature (ignorée quand 0)';
$_lang['imageplus.placeholder.height'] = 'Hauteur de l\'image miniature (ignorée quand 0)';
$_lang['imageplus.placeholder.source.src'] = 'Chemin de l\'image source';
$_lang['imageplus.placeholder.source.width'] = 'Largeur de l\'image source';
$_lang['imageplus.placeholder.source.height'] = 'Hauteur de l\'image source';
$_lang['imageplus.placeholder.crop.width'] = 'Largeur de l\'image source recadrée';
$_lang['imageplus.placeholder.crop.height'] = 'Hauteur de l\'image source recadrée';
$_lang['imageplus.placeholder.crop.x'] = 'Position recadrage en x de l\'image source';
$_lang['imageplus.placeholder.crop.y'] = 'Position recadrage en y de l\'image source';
$_lang['imageplus.placeholder.options'] = 'chaîne d\'option phpThumb pour générer l\'image miniature';
$_lang['imageplus.placeholder.crop.options'] = 'chaîne d\'option de recadrage phpThumb pour générer l\'image miniature';

$_lang['imageplus.error.image_too_small.title'] = 'Image trop petite';
$_lang['imageplus.error.image_too_small.msg'] = 'L\'image sélectionnée est trop petite pour être utilisé ici. Veuillez sélectionner une image différente.';
$_lang['imageplus.error.image_not_found.title'] = 'Image non trouvée';
$_lang['imageplus.error.image_not_found.msg'] = 'L\'image est introuvable et ne peut être recadrée. Veuillez sélectionner une image différente.';

/** System settings **/
$_lang['area_imageplus'] = 'Image+';
$_lang['setting_imageplus.debug'] = 'Débuggage';
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