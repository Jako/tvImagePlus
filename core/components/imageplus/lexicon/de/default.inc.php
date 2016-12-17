<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Image+ Editor';
$_lang['imageplus.edit_image'] = 'Bild bearbeiten';
$_lang['imageplus.alt_text'] = 'Alt-Text';
$_lang['imageplus.caption'] = 'Titel';
$_lang['imageplus.credits'] = 'Bildnachweis';

/** Input options render **/
$_lang['imageplus.section'] = 'Image+ Optionen';
$_lang['imageplus.section_desc'] = 'Die folgenden Optionen können per System-/Kontexteinstellungen überschrieben werden. Bitte lesen Sie die <a href="http://jako.github.io/ImagePlus/usage/">Dokumentation</a> für die entsprechenden Einträge in den System-/Kontexteinstellungen.';
$_lang['imageplus.selectConfig'] = 'Vordefinierte Ausgabegrößen/Ausgabe-Seitenverältnisse';
$_lang['imageplus.selectConfig_desc'] = 'Wählen Sie eine vordefinierte Ausgabegröße/ein Seitenverhältnis. Die Vorgaben können in den Systemeinstellungen eingestellt werden.';
$_lang['imageplus.selectConfigForce'] = 'Erzwungene vordefinierte Ausgabegrößen/Ausgabe-Seitenverältnisse';
$_lang['imageplus.selectConfigForce_desc'] = 'Wählen Sie eine erzwungene vordefinierte Ausgabegröße/ein Seitenverhältnis. Die Vorgaben können in den Systemeinstellungen eingestellt werden.';
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
$_lang['imageplus.allowCaption'] = 'Titel Feld anzeigen';
$_lang['imageplus.allowCaption_desc'] = 'Ermöglicht die Eingabe eines Titels für das Bild.';
$_lang['imageplus.allowCredits'] = 'Bildnachweis Feld anzeigen';
$_lang['imageplus.allowCredits_desc'] = 'Ermöglicht die Eingabe eines Bildnachweises für das Bild.';

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

/** System settings **/
$_lang['area_imageplus'] = 'Image+';
$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Debug-Informationen im MODX Fehlerprotokoll ausgeben.';
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
$_lang['setting_imageplus.select_config'] = 'Vordefinierte Ausgabegrößen/Ausgabe-Seitenverhältnisse';
$_lang['setting_imageplus.select_config_desc'] = 'Erstellen Sie vordefinierte Ausgabegrößen/Ausgabe-Seitenverhältnisse, welche in den Template Variable Optionen wählbar sind.';
$_lang['setting_imageplus.force_config'] = 'Erzwungene vordefinierte Ausgabegrößen/Ausgabe-Seitenverältnisse';
$_lang['setting_imageplus.force_config_desc'] = 'Erzwingen Sie die Verwendung von vordefinierten Ausgabegrößen/Ausgabe-Seitenverhältnissen.';

/** System settings grid */
$_lang['setting_imageplus.configname'] = 'Name';