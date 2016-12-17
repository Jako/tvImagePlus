<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Redattore Image+';
$_lang['imageplus.edit_image'] = 'Modifca Immagine';
$_lang['imageplus.alt_text'] = 'Testo per l\'attributo Alt';

/** Input options render **/
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

$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Log debug informations in MODX error log.';