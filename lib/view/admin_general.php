<form method = "POST" enctype = "multipart/form-data" >

<table cellspacing = "35px" width = "100%">
				<tr>
					<td>
						<p class = "kategory">
							Администрирование главной страницы
						</p>
					</td>
				</tr>
			</table>
			
			<!--таблица категорий-->
			<table cellspacing = "0px">
				<tr>
				
					<td id = "message" style = "width: 226px; height: 151px; background: url(../lib/view/images/matras.jpg);">
					<center>
						<input type = "button" value = "Матрасы" class = "select_kategory" />
						<input type = "submit" value = "Заменить изображение"  name = "remove_matras" />
					</center>
					</td>
					
					<td style = "width: 113px;">
					</td>
					
					<td style = "width: 226px; height: 151px; background: url(../lib/view/images/matras.jpg);">
					<center>
						<input type = "button" value = "Кровати" class = "select_kategory" />
						<input type = "submit" value = "Заменить изображение" name = "remove_krovat" />
					</center>
					</td>
					
					<td style = "width: 113px;">
					</td>
					
					<td style = "width: 226px; height: 151px; background: url(../lib/view/images/matras.jpg);">
					<center>
						<input type = "button" value = "Основания" class = "select_kategory" />
						<input type = "submit" value = "Заменить изображение" name = "remove_fundation" />
					</center>
					</td>
					
				</tr>
				
				<tr style = "height: 56px;">
					<td>
					</td>
				</tr>
				
				<tr>
				
					<td style = "width: 226px; height: 151px; background: url(../lib/view/images/matras.jpg);">
					<center>
						<input type = "button" value = "Подушки" class = "select_kategory" />
						<input type = "submit" value = "Заменить изображение" name = "remove_podush" />
					</center>
					</td>
					
					<td style = "width: 113px;">
					</td>
					
					<td style = "width: 226px; height: 151px; background: url(../lib/view/images/matras.jpg);">
					<center>
						<input type = "button" value = "Наматрасники" class = "select_kategory" />
						<input type = "submit" value = "Заменить изображение" name = "remove_namatras" />
					</center>
					</td>
					
					<td style = "width: 113px;">
					</td>
					
					<td style = "width: 226px; height: 151px; background: url(../lib/view/images/matras.jpg);">
					<center>
						<input type = "button" value = "Мебель" class = "select_kategory" />
						<input type = "submit" value = "Заменить изображение" name = "remove_mebel" />
					</center>
					</td>
					
				</tr>
				
				<tr style = "height: 56px;">
					<td>
					</td>
				</tr>
				
				<tr>
				
					<td>
					</td>
					
					<td>
					</td>
					
					<td style = "width: 226px; height: 151px; background: url(../lib/view/images/matras.jpg);">
					<center>
						<input type = "button" value = "Диваны" class = "select_kategory" />
						<input type = "submit" value = "Заменить изображение" name = "remove_divan" />
					</center>
					</td>
					
					<td>
					</td>
					
					<td>
					</td>
					
				</tr>
				
			</table>
			<!--закрываем таблицу категорий-->
			
</form>
			
			<p class = "kategory">
				Адресс и схема проезда к магазину
			</p>

<script>

$("#remove_img").load("../lib/model/create_table_kategories.php");

</script>

<div id = "remove_img" style = "background: yellow;">

</div>
			
			