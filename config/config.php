<?php

/*
Если опция "open_graph_default_image" задана(раскомментирована), в ней относительный путь к картинке "по умолчанию".
Картинка "по умолчанию" будет всегда использоватся в качестве "og:image", если нормальной картинки не нашлось
Если хотите её - раскомментируйте следующую строку и задайте в ней нужный путь. */
//$config["open_graph_default_image"] = '/uploads/images/logo-open-graph.png';

/*
Если опция "use_mainpreview" = true, картинку для топика будем пытаться брать из "превью изображения",
которое обеспечивает Плагин "Main Preview" (https://catalog.livestreetcms.com/addon/view/226/)
*/
$config["use_mainpreview"] = false;

return $config;
?>