<?php
$_lang['imageplus'] = 'Image+';

$_lang['imageplus.editor_title'] = 'Редактор Image+';
$_lang['imageplus.alt_text'] = 'Альтернатиный текст (alt)';
$_lang['imageplus.caption'] = 'Заголовок';
$_lang['imageplus.credits'] = 'Авторы';

/** Input options render **/
$_lang['imageplus.section'] = 'Image+ параметры';
$_lang['imageplus.section_desc'] = 'Следующие параметры могут быть переопределены контекстом/системными настройками. Пожалуйста, прочитайте <a target="_blank" href="https://jako.github.io/ImagePlus/usage/">документацию</a> для соответствующих ключей в контексте/системных настройках.';
$_lang['imageplus.selectConfig'] = 'Предопределенные размеры/соотношения сторон';
$_lang['imageplus.selectConfig_desc'] = 'Выберите заранее заданное соотношение размера/аспекта. Определения могут быть созданы в настройках системы.';
$_lang['imageplus.selectConfigForce'] = 'Принудительные предопределенные размеры/пропорции';
$_lang['imageplus.selectConfigForce_desc'] = 'Выберите заранее заданное соотношение размера/аспекта. Определения могут быть созданы в настройках системы.';
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
$_lang['imageplus.allowCaption'] = 'Показать поле заголовка';
$_lang['imageplus.allowCaption_desc'] = 'Разрешить пользователю ввести подпись для изображения.';
$_lang['imageplus.allowCredits'] = 'Показать поле «Авторы»';
$_lang['imageplus.allowCredits_desc'] = 'Разрешить пользователю ввести Автора для изображения.';

/** Output options render **/
$_lang['imageplus.phpThumbParams'] = 'Дополнительные параметры phpThumb';
$_lang['imageplus.phpThumbParams_desc'] = 'Добавляет дополнительные фильтры и другие параметры для phpThumb. Документацию можно найти <a target="_blank" href="http://phpthumb.sourceforge.net/demo/docs/phpthumb.readme.txt">здесь</a>.';
$_lang['imageplus.outputChunk'] = 'Чанк для вывода';
$_lang['imageplus.outputChunk_desc'] = 'Выберите чанк для вывода TV. Оставьте пустым для обычного вывода текстом.';
$_lang['imageplus.generateUrl'] = 'Генерировать Thumb URL';
$_lang['imageplus.generateUrl_desc'] = '(Необязательно) URL иконки может быть необязательным, если вы генерируете иконку в чанке, т.е. когда phpThumb используется как output filter.';
$_lang['imageplus.generateUrl_desc_warning'] = 'Вы должны активировать эту опцию, когда вы не указываете выходной блок в опциях вывода или когда вы используете заполнитель [[+url]] в указанном выходном блоке. В противном случае изображение не обрезается/не изменяется, и возвращается исходный путь к изображению.';

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
$_lang['setting_imageplus.debug'] = 'Отладка';
$_lang['setting_imageplus.debug_desc'] = 'Записывать отладочную информацию в лог ошибок MODX.';
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
$_lang['setting_imageplus.select_config'] = 'Предопределенные размеры/соотношения сторон';
$_lang['setting_imageplus.select_config_desc'] = 'Создайте предопределенные соотношения размера/пропорций, которые выбираются в настройках переменной шаблона.';
$_lang['setting_imageplus.force_config'] = 'Предопределенные размеры/соотношения сторон';
$_lang['setting_imageplus.force_config_desc'] = 'Предопределенные размеры/соотношения сторон.';

/** System settings grid */
$_lang['setting_imageplus.configname'] = 'Имя';
