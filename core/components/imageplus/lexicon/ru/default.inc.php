<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Редактор Image+';
$_lang['imageplus.edit_image'] = 'Редактировать изображение';
$_lang['imageplus.alt_text'] = 'Альтернатиный текст (alt)';

/** Input options render **/
$_lang['imageplus.targetwidth'] = 'Необходимая (минимальная) ширина';
$_lang['imageplus.targetwidth_desc'] = '(Необязательно, Integer) Необходимая ширина для отображаемого изображения. Загружаемое изображение должно иметь эту минимальную ширину.';
$_lang['imageplus.targetheight'] = 'Необходимая (минимальная) высота';
$_lang['imageplus.targetheight_desc'] = '(Необязательно, Integer) Необходимая высота для отображаемого изображения. Загружаемое изображение должно иметь эту минимальную высоту.';
$_lang['imageplus.targetRatio'] = 'Необходимые пропорции';
$_lang['imageplus.targetRatio_desc'] = '(Необязательно, Float) Необходимые пропорции для отображаемого изображения. Если заданы минимальная высота и ширина, это значение игнорируется.';
$_lang['imageplus.thumbnailWidth'] = 'Ширина иконки';
$_lang['imageplus.thumbnailWidth_desc'] = '(Необязательно) Ширина изображения в панели управления TV.';
$_lang['imageplus.allowAltTag'] = 'Показывать поле для атрибута Аlt';
$_lang['imageplus.allowAltTag_desc'] = 'Позволяет пользователю ввести заголовок/альтернативный текст для изображения';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Дополнительные параметры phpThumb';
$_lang['imageplus.phpThumbParams_desc'] = 'Добавляет дополнительные фильтры и другие параметры для phpThumb. Документацию можно найти <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">здесь</a>.';
$_lang['imageplus.outputChunk'] = 'Чанк для вывода';
$_lang['imageplus.outputChunk_desc'] = 'Выберите чанк для вывода TV. Оставьте пустым для обычного вывода текстом.';
$_lang['imageplus.generateUrl'] = 'Генерировать Thumb URL';
$_lang['imageplus.generateUrl_desc'] = '(Необязательно) URL иконки может быть необязательным, если вы генерируете иконку в чанке, т.е. когда phpThumb используется как output filter.';

/** Placeholder descriptions */
$_lang['imageplus.placeholder.url'] = 'URL иконки изображения';
$_lang['imageplus.placeholder.alt'] = 'Альтернатиный текст (alt)';
$_lang['imageplus.placeholder.width'] = 'Ширина иконки изображения (игнорируется когда 0)';
$_lang['imageplus.placeholder.height'] = 'Высота иконки изображения (игнорируется когда 0)';
$_lang['imageplus.placeholder.source.src'] = 'Путь к исходному изображению';
$_lang['imageplus.placeholder.source.width'] = 'Ширина исходного изображения';
$_lang['imageplus.placeholder.source.height'] = 'Высота исходного изображения';
$_lang['imageplus.placeholder.crop.width'] = 'Ширина обрезки исходного изображения';
$_lang['imageplus.placeholder.crop.height'] = 'Высота обрезки исходного изображения';
$_lang['imageplus.placeholder.crop.x'] = 'Позиция обрезки исходного изображения по оси X (горизонталь)';
$_lang['imageplus.placeholder.crop.y'] = 'Позиция обрезки исходного изображения по оси Y (вертикаль)';
$_lang['imageplus.placeholder.options'] = 'Строка параметров phpThumb для генерации иконки изображения';
$_lang['imageplus.placeholder.crop.options'] = 'Строка опций обрезки phpThumb для генерации иконки изображения';

$_lang['imageplus.error.image_too_small.title'] = 'Изображение слишком маленькое';
$_lang['imageplus.error.image_too_small.msg'] = 'Выбранное изображение слишком маленькое для использования здесь. Выберите другое изображение, пожалуйста.';
$_lang['imageplus.error.image_not_found.title'] = 'Изображение не найдено';
$_lang['imageplus.error.image_not_found.msg'] = 'Изображение не найдено и не может быть обрезано. Выберите другое изображение, пожалуйста.';

$_lang['setting_imageplus.debug'] = 'Debug';
$_lang['setting_imageplus.debug_desc'] = 'Log debug informations in MODX error log.';