<?php
 
$db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');
 
$buf = $db->query('SELECT * FROM admin');
$readbuf = $buf->fetchAll();
 
$j = 0;

foreach ($readbuf as $mass)
	{
		$image = substr($mass['image'], 2);
		$j++;
		if ($j == 1)
			{
				echo '<tr>';
			}
			
			echo '<td>
					<div class = "tovar" style = "width: 175px;">
					<img width = "175px" height = "130px" src = "../lib';
			
			if ($image != '')                             // если ячейка изображения не пустая - выводим содержимое
				{
					echo $image;
				}
			else                                          // если пустая - выводим изображение п умолчанию
				{
					echo '/view/images/namatrasnik.jpg';
				}
					
			echo '" 
						onmouseover = "this.style.opacity = \'0.5\'"
						onmouseout = "this.style.opacity = \'1\'"
						onclick = "in_tovar()"
						style = "border-bottom: solid 2px #dddddd;">
					<a class = "name_tovar">
						Наматрасник '.$mass['name_tovar'].'
					</a>
					<a>
						Производитель: '.$mass['creator'].' <br>
						Толщина: 10см          <br><br>
					</a>
					<a style = "margin-left: 10px; font-size: 20px">
						Цена 4567 руб. <br>
					</a><br>
					<center>
					<input type = "button" value = "узнать подробности" class = "button_details" onclick = "in_tovar()">
					<br><br>
					<input type = "button" value = "Заменить" onclick = "load_img()">
					</center>
					<br>
					</div>
				</td>';
			
		if ($j == 4)
			{
				echo '</tr>';
				$j = 0;
			}
	} 
 
?>
 
