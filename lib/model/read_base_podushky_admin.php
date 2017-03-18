<?php
 
$db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');
 
$buf = $db->query('SELECT * FROM podushky');
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
						Подушка: '.$mass['name_tovar'].'
					</a>
					<a>
						Производитель: '.$mass['creator'].' <br>
						Материал: '.$mass['material'].'          <br><br>
					</a>
					<a style = "margin-left: 10px; font-size: 20px">
						Цена: '.$mass['rate'].' руб. <br>
					</a><br>
					<center>
					<input type = "button" 
									value = "узнать подробности" 
									class = "button_details" 
									onclick = "in_tovar'.$mass['id'].'()">
									
										<script>
										function in_tovar'.$mass['id'].'()
											{
												var tbl = "podushky";
												document.location.href = "#"+tbl+"_"+'.$mass['id'].';
												$("#content").load("../lib/view/content_tovar.php", "id="+'.$mass['id'].'+"&tbl="+tbl);
												document.getElementById("maps").style.display = "none";
											}
								   </script>
					<br><br>
					
					<input name = "del'.$mass['id'].'" name = "del_'.$mass['id'].'" type = "button" value = "Удалить" onclick = "input_delite'.$mass['id'].'()">  
					
					<script>
						function input_delite'.$mass['id'].'()
							{
								$("#start_load").load("../lib/view/input_delite.php");
								$("#back").load("../lib/view/fon.php");
								$("#tumbler").load("../lib/model/create_base.php");
								setTimeout("target_tovar'.$mass['id'].'()", 200);
							}
						function target_tovar'.$mass['id'].'()
							{
								document.getElementById("name_table").value = "podushky";
								document.getElementById("id_tovar").value = "'.$mass['id'].'";
							}
					</script>
					
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
 
