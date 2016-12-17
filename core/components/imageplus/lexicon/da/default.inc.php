<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Image+ editor';
$_lang['imageplus.edit_image'] = 'Rediger billede';
$_lang['imageplus.alt_text'] = 'Alt-tekst';

/** Input options render **/
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

$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Log debug informations in MODX error log.';