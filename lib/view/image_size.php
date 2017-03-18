<div style = "width: 100px; height: 100px; background: yellow;"></div>


<?php

// уменьшитель изображений

if (isset($_REQUEST['i'])) { $filename = $_REQUEST['i']; }


// устанавливаем тип загружаемого изображения
header('Content-type: image/jpeg');

// определяем размеры
list($width, $height) = getimagesize($filename);

// загрузка
$thumb = imagecreatetruecolor(381, 284);
$source = imagecreatefromjpeg($filename);

// замена размеров
imagecopyresized($thumb, $source, 0, 0, 0, 0, 381, 284, $width, $height);

// вывод в файл
imagejpeg($thumb, $filename);
	

?>
