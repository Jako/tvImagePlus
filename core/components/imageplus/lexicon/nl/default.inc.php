<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Image+ Editor';
$_lang['imageplus.edit_image'] = 'Bewerk Afbeelding';
$_lang['imageplus.alt_text'] = 'Alternatieve tekst';

/** Input options render **/
$_lang['imageplus.targetwidth'] = 'Doel (minimale) breedte';
$_lang['imageplus.targetwidth_desc'] = '(Optioneel, geheel getal) De breedte van de uiteindelijke afbeelding.';
$_lang['imageplus.targetheight'] = 'Doel (minimale) hoogte';
$_lang['imageplus.targetheight_desc'] = '(Optioneel, geheel getal) De hoogte van de uiteindelijke afbeelding.';
$_lang['imageplus.targetRatio'] = 'Hoogte/breedteverhouding voor het doelbestand';
$_lang['imageplus.targetRatio_desc'] = '(Optioneel, drijvend) De hoogte/breedteverhouding van de afbeelding. Als de hoogte en breedte voor de output zijn ingesteld wordt deze waarde genegeerd.';
$_lang['imageplus.thumbnailWidth'] = 'Thumbnail breedte';
$_lang['imageplus.thumbnailWidth_desc'] = '(Optioneel, geheel getal) De breedte van de thumbnail in het Template Variabele paneel.';
$_lang['imageplus.allowAltTag'] = 'Alt-Tag veld weergeven';
$_lang['imageplus.allowAltTag_desc'] = 'Sta de gebruiker toe om een alt of title tag voor de afbeelding in te voeren';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Extra phpThumb opties';
$_lang['imageplus.phpThumbParams_desc'] = 'Voeg extra phpThumb opties zoals filters toe. Documentatie is <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">hier</a> te vinden.';
$_lang['imageplus.outputChunk'] = 'Output Chunk';
$_lang['imageplus.outputChunk_desc'] = 'Selecteer een chunk voor de TV output. Laat leeg om alleen een link naar de afbeelding terug te krijgen.';
$_lang['imageplus.generateUrl'] = 'Genereer Thumbnail URL';
$_lang['imageplus.generateUrl_desc'] = '(Optioneel) De thumbnail URL is mogelijk niet nodig, als de thumbnail gegenereerd wordt in de output chunk met bijvoorbeeld een pthumb output filter.';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'URL van de thumbnail';
$_lang['imageplus.placeholder.alt'] = 'Alternatieve tekst';
$_lang['imageplus.placeholder.width'] = 'Breedte van de thumbnail (genegeerd indien 0)';
$_lang['imageplus.placeholder.height'] = 'Hoogte van de thumbnail (genegeerd indien 0)';
$_lang['imageplus.placeholder.source.src'] = 'Pad naar de bronafbeelding';
$_lang['imageplus.placeholder.source.width'] = 'Breedte van de bronafbeelding';
$_lang['imageplus.placeholder.source.height'] = 'Hoogte van de bronafbeelding';
$_lang['imageplus.placeholder.crop.width'] = 'Cropbreedte van de bronafbeelding';
$_lang['imageplus.placeholder.crop.height'] = 'Crophoogte van de bronafbeelding';
$_lang['imageplus.placeholder.crop.x'] = 'Crop X positie van de bronafbeelding';
$_lang['imageplus.placeholder.crop.y'] = 'Crop Y positie van de bronafbeelding';
$_lang['imageplus.placeholder.options'] = 'phpThumb waarde om de thumbnail te genereren';
$_lang['imageplus.placeholder.crop.options'] = 'phpThumb crop waarde om de thumbnail te genereren';

$_lang['imageplus.error.image_too_small.title'] = 'Afbeelding is te klein';
$_lang['imageplus.error.image_too_small.msg'] = 'De geselecteerde afbeelding is te klein om hier gebruikt te worden. Selecteer een andere afbeelding.';
$_lang['imageplus.error.image_not_found.title'] = 'Afbeelding niet gevonden';
$_lang['imageplus.error.image_not_found.msg'] = 'De afbeelding kan niet worden bijgesneden omdat hij niet gevonden kon worden. Selecteer een andere afbeelding.';

$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Log debug informations in MODX error log.';