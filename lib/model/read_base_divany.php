<?php
 
$db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');
 
$buf = $db->query('SELECT * FROM divany');
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
						onclick = "in_tovar'.$mass['id'].'()"
						style = "border-bottom: solid 2px #dddddd;">
					<a class = "name_tovar">
						Диван: '.$mass['name_tovar'].'
					</a>
					<br>
					<a style = "margin-left: 10px; font-size: 20px">
						Цена: '.$mass['rate'].' руб. <br>
					</a><br>
					<center>
					<input type = "button" 
								   value = "узнать подробности_'.$mass['id'].'" 
								   class = "button_details" 
								   onclick = "in_tovar'.$mass['id'].'()">
								   
								   <script>
										function in_tovar'.$mass['id'].'()
											{
												var tbl = "divany";
												document.location.href = "#"+tbl+"_"+'.$mass['id'].';
												$("#content").load("../lib/view/content_tovar.php", "id="+'.$mass['id'].'+"&tbl="+tbl);
												document.getElementById("maps").style.display = "none";
											}
								   </script>
					<br>
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
 
