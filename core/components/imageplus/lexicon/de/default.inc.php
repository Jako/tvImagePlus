<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Image+ Editor';
$_lang['imageplus.edit_image'] = 'Bild bearbeiten';
$_lang['imageplus.alt_text'] = 'Alt-Text';

/** Input options render **/
$_lang['imageplus.targetwidth'] = 'Ausgabebreite';
$_lang['imageplus.targetwidth_desc'] = '(Optional, Integer) Gibt die Ausgabebreite des Bildes an. Das hochgeladene Bild muss mindestens diese Breite haben.';
$_lang['imageplus.targetheight'] = 'Ausgabehöhe';
$_lang['imageplus.targetheight_desc'] = '(Optional, Integer) Gibt die Ausgabehöhe des Bildes an. Das hochgeladene Bild muss mindestens diese Höhe haben.';
$_lang['imageplus.targetRatio'] = 'Ausgabe-Seitenverhältnis';
$_lang['imageplus.targetRatio_desc'] = '(Optional, Float) Gibt das Seitenverhältnis des Bildes an. Wenn die Ausgabebreite und die Ausgabehöhe des Bildes angegeben sind, wird dieser Wert ignoriert.';
$_lang['imageplus.thumbnailWidth'] = 'Breite des Thumbnails';
$_lang['imageplus.thumbnailWidth_desc'] = '(Optional, Integer) Breite des Thumbnails im Template Variablen Bereich.';
$_lang['imageplus.allowAltTag'] = 'Alternatives Textfeld anzeigen';
$_lang['imageplus.allowAltTag_desc'] = 'Ermöglicht die Eingabe eines Alt oder Title-Attributes für das Bild.';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Zursätzliche phpThumb Parameter';
$_lang['imageplus.phpThumbParams_desc'] = '(Optional) Geben Sie zusätzliche phpThumb Parameter an. Mehr Informationen zu phpThumb Parametern erhalten Sie <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">hier</a>.';
$_lang['imageplus.outputChunk'] = 'Ausgabe Chunk';
$_lang['imageplus.outputChunk_desc'] = '(Optional) Wählen Sie einen Ausgabe Chunk aus. Wenn kein Wert angebeben ist wird der Bildpfad ausgegeben.';
$_lang['imageplus.generateUrl'] = 'Thumbnail URL generieren';
$_lang['imageplus.generateUrl_desc'] = '(Optional) Die Thumbnail URL eventuell wird nicht benötigt, wenn das Thumbnail im Ausgabe Chunk z.B. mit einem pThumb Output Filter generiert wird.';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'Thumbnail URL';
$_lang['imageplus.placeholder.alt'] = 'Alt-Text';
$_lang['imageplus.placeholder.width'] = 'Breite des Thumbnails (wird ignoriert, wenn 0)';
$_lang['imageplus.placeholder.height'] = 'Höhe des Thumbnails (wird ignoriert, wenn 0)';
$_lang['imageplus.placeholder.source.src'] = 'Server-Pfad zum Originalbild';
$_lang['imageplus.placeholder.source.width'] = 'Minimale Breite des Originalbilds';
$_lang['imageplus.placeholder.source.height'] = 'Minimale Höhe des Originalbilds';
$_lang['imageplus.placeholder.crop.width'] = 'Crop-Breite des Originalbilds';
$_lang['imageplus.placeholder.crop.height'] = 'Crop-Höhe des Originalbilds';
$_lang['imageplus.placeholder.crop.x'] = 'Crop-X-Startposition des Originalbilds';
$_lang['imageplus.placeholder.crop.y'] = 'Crop-Y-Startposition des Originalbilds';
$_lang['imageplus.placeholder.options'] = 'phpThumb Optionen für das Thumbnail';
$_lang['imageplus.placeholder.crop.options'] = 'phpThumb Crop Optionen für das Thumbnail';

$_lang['imageplus.error.image_too_small.title'] = 'Bild ist zu klein';
$_lang['imageplus.error.image_too_small.msg'] = 'Das gewählte Bild ist zu klein um benutzt zu werden. Bitte wählen Sie ein anderes Bild.';
$_lang['imageplus.error.image_not_found.title'] = 'Bild nicht gefunden';
$_lang['imageplus.error.image_not_found.msg'] = 'Das Bild wurde nicht gefunden und kann nicht zugeschnitten werden. Bitte wählen Sie ein anderes Bild.';

$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Debug-Informationen im MODX Fehlerprotokoll ausgeben.';