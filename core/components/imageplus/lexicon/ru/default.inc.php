<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Редактор Image+';
$_lang['imageplus.edit_image'] = 'Редактировать изображение';
$_lang['imageplus.alt_text'] = 'Альтернатиный текст (alt)';
$_lang['imageplus.caption'] = 'Caption';
$_lang['imageplus.credits'] = 'Credits';

/** Input options render **/
$_lang['imageplus.section'] = 'Image+ Options';
$_lang['imageplus.section_desc'] = 'The following options could be overridden by context/system settings. Please read the <a href="http://jako.github.io/ImagePlus/usage/">documentation</a> for the appropriate keys in the context/system settings.';
$_lang['imageplus.selectConfig'] = 'Predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfig_desc'] = 'Select a predefined target size/aspect ratio. The definitions could be created in the system settings.';
$_lang['imageplus.selectConfigForce'] = 'Forced predefined target sizes/aspect ratios';
$_lang['imageplus.selectConfigForce_desc'] = 'Forced select a predefined crop size/aspect ratio. The definitions could be created in the system settings.';
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
$_lang['imageplus.allowCaption'] = 'Show Caption Field';
$_lang['imageplus.allowCaption_desc'] = 'Allow user to enter a caption for the image.';
$_lang['imageplus.allowCredits'] = 'Show Credits Field';
$_lang['imageplus.allowCredits_desc'] = 'Allow user to enter a credit for the image.';

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