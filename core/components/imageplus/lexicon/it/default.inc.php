<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Editor Image+';
$_lang['imageplus.alt_text'] = 'Testo per l\'attributo Alt';
$_lang['imageplus.caption'] = 'Didascalia';
$_lang['imageplus.credits'] = 'Crediti';

/** Input options render **/
$_lang['imageplus.section'] = 'Opzioni Image+';
$_lang['imageplus.section_desc'] = 'Le seguenti opzioni possono essere sovrascritte dalle impostazioni di sistema/contesto. Si prega di leggere la <a target="_blank" href="https://jako.github.io/ImagePlus/usage/">documentazione</a> per conoscere le chiavi da utilizzare nelle impostazioni di sistema/contesto.';
$_lang['imageplus.selectConfig'] = 'Destinazione con dimensioni/proporzioni predefinite';
$_lang['imageplus.selectConfig_desc'] = 'Seleziona un\'impostazione di dimensioni/proporzioni predefinita. Le definizioni possono essere create nelle impostazioni del sistema.';
$_lang['imageplus.selectConfigForce'] = 'Forza destinazione con dimensioni/proporzioni predefinite';
$_lang['imageplus.selectConfigForce_desc'] = 'Selezione forzata di un ritaglio con dimensioni/proporzioni predefinite. Le definizioni possono essere create nelle impostazioni di sistema.';
$_lang['imageplus.targetwidth'] = 'Larghezza (minima)';
$_lang['imageplus.targetwidth_desc'] = '(Facoltativo, Intero) La larghezza desiderata per l\'immagine finale. L\'immagine caricata dovrebbe avere almeno questa larghezza.';
$_lang['imageplus.targetheight'] = 'Altezza (minima)';
$_lang['imageplus.targetheight_desc'] = '(Facoltativo, Intero) L\'altezza desiderata per l\'immagine finale. L\'immagine caricata dovrebbe avere almeno questa altezza.';
$_lang['imageplus.targetRatio'] = 'Proporzioni di destinazione';
$_lang['imageplus.targetRatio_desc'] = '(Opzionale, Float [numero intero/frazionale]) Le proporzioni con valore di tipo Float per l\'immagine finale. Se l\'altezza e la larghezza hanno il valore impostato, il valore delle proporzioni viene ignorato.';
$_lang['imageplus.thumbnailWidth'] = 'Larghezza delle anteprime';
$_lang['imageplus.thumbnailWidth_desc'] = '(Opzionale, Intero) La larghezza della miniatura dell\'immagine nella pannello della Template Variable.';
$_lang['imageplus.allowAltTag'] = 'Visualizza campo tag Alt';
$_lang['imageplus.allowAltTag_desc'] = 'Consente all\'utente di inserire un titolo/tag-alt per l\'immagine';
$_lang['imageplus.allowCaption'] = 'Visualizza campo didascalia';
$_lang['imageplus.allowCaption_desc'] = 'Consente all\'utente di inserire una didascalia per l\'immagine.';
$_lang['imageplus.allowCredits'] = 'Mostra il campo Credits';
$_lang['imageplus.allowCredits_desc'] = 'Consente all\'utente di inserire un credito per l\'immagine.';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Parametri aggiuntivi di phpThumb';
$_lang['imageplus.phpThumbParams_desc'] = 'Aggiungi filtri aggiuntivi ecc. per phpThumb. La documentazione può essere trovata <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">qui</a>.';
$_lang['imageplus.outputChunk'] = 'Chunk Output';
$_lang['imageplus.outputChunk_desc'] = 'Seleziona un chunk per l\'output della variabile tv. Lascia vuoto per avere un semplice url come output.';
$_lang['imageplus.generateUrl'] = 'Generare l\'URL dell\'anteprima';
$_lang['imageplus.generateUrl_desc'] = '(Facoltativo) L\'URL della miniatura dell\'immagine potrebbe non essere necessario se questa viene generata nella \'output chunk\' es. dalla \'output filter\' del pthumb.';
$_lang['imageplus.generateUrl_desc_warning'] = 'You have to activate this option, when you don\'t specify an output chunk in the output options or when you use the [[+url]] placeholder in the specified output chunk. Otherwise the image is not cropped/resized and the original image path is returned.';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'URL dell\'immagine di anteprima';
$_lang['imageplus.placeholder.alt'] = 'Testo per l\'attributo Alt';
$_lang['imageplus.placeholder.width'] = 'Larghezza dell\'anteprima dell\'immagine (ignorata quando 0)';
$_lang['imageplus.placeholder.height'] = 'Altezza dell\'anteprima dell\'immagine (ignorata quando 0)';
$_lang['imageplus.placeholder.source.src'] = 'Percorso dell\'immagine di origine';
$_lang['imageplus.placeholder.source.width'] = 'Larghezza dell\'immagine di origine';
$_lang['imageplus.placeholder.source.height'] = 'Altezza dell\'immagine di origine';
$_lang['imageplus.placeholder.crop.width'] = 'Larghezza del ritaglio dell\'immagine di origine';
$_lang['imageplus.placeholder.crop.height'] = 'Altezza del ritaglio dell\'immagine di origine';
$_lang['imageplus.placeholder.crop.x'] = 'Posizione orizzontale (asse x) del ritaglio dell\'immagine di origine';
$_lang['imageplus.placeholder.crop.y'] = 'Posizione verticale (asse y) del ritaglio dell\'immagine di origine';
$_lang['imageplus.placeholder.options'] = 'L\'opzione su phpThumb per generare l\'anteprima dell\'immagine';
$_lang['imageplus.placeholder.crop.options'] = 'L\'opzione di ritaglio su phpthumb per generare l\'anteprima dell\'immagine';

$_lang['imageplus.error.image_too_small.title'] = 'Immagine troppo piccola';
$_lang['imageplus.error.image_too_small.msg'] = 'L\'immagine selezionata è troppo piccola per essere usata qui. Si prega di selezionare un\'altra immagine.';
$_lang['imageplus.error.image_not_found.title'] = 'L\'immagine non è stata trovata';
$_lang['imageplus.error.image_not_found.msg'] = 'L\'immagine non è stata trovata e perciò non può essere tagliata. Si prega di selezionare un\'altra immagine.';

/** System settings **/
$_lang['area_imageplus'] = 'Image+';
$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Scrivi le informazioni di debug nell\'error log di MODX.';
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
$_lang['setting_imageplus.select_config'] = 'Ritaglio con dimensioni/proporzioni predefinite';
$_lang['setting_imageplus.select_config_desc'] = 'Crea ritaglio con dimensioni/proporzioni predefinite che sono selezionabili nelle opzioni delle variabili di template.';
$_lang['setting_imageplus.force_config'] = 'Forza ritaglio con dimensioni/proporzioni predefinite';
$_lang['setting_imageplus.force_config_desc'] = 'Forza l\'uso di ritagli con dimensioni/proporzioni predefinite.';

/** System settings grid */
$_lang['setting_imageplus.configname'] = 'Nome';
