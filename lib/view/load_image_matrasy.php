
<div id = "print_data" class = "screen_div">

<div style = "left: 0px; top: 0px; position: absolute; height: 150%; width: 100%; padding-top: 100px;">


<iframe name = "status" width = "0px" height = "0px">
</iframe>

<center>
		
        <div class = "admin_window">
		
		<div class = "admin_window_div"  align = "left">
		
		<p class = "expanation"><strong>Загрузить матрас</strong></p>
		
		<form method = "POST" enctype = "multipart/form-data" action = "../lib/model/insert_base.php" target = "status">
		
		<p class = "expanation"><strong>Наименование товара</strong></p>
		<input name = "name_tovar" id = "name_tovar" type = "text" cols = "30"  class = "name_logo" onclick = "this.value = ''" />
		
		<p class = "expanation"><strong>Производитель</strong></p>
		<select name = "creator" id = "creator" class = "name_logo">
			<option selected="selected" ></option>
			<option>Аскона</option>
			<option>Орматек</option>
			<option>Райтон</option>
			<option>Verda</option>
			<option>Serta</option>
		</select>

		<p class = "expanation"><strong>Жесткость</strong></p>
		<select name = "rigidity" id = "crigidity" class = "name_logo">
			<option selected="selected" ></option>
			<option>Низкая</option>
			<option>Средняя</option>
			<option>Высокая</option>
		</select>
		
		
		<p class = "expanation"><strong>Тип</strong></p>
		<select name = "type_mtrs" id = "type_mtrs" class = "name_logo">
			<option selected="selected" ></option>
			<option>Пружинный</option>
			<option>Беспружинный</option>
			<option>Пружины боннель</option>
			<option>Детские</option>
			<option>Круглые</option>
		</select>
		
		<p></p>
		
		<table cellspacing = "0px" style = "width: 150px;">
			<tr>
				<td style = "width: 80px;">
					<div style = "width: 100px;">
					<strong>
						<a class = "expanation">
						Ширина
						</a>
						<br>
						 <a style = "font-size: 14px; width: 80px;">
						 <table>
							<tr>
								<td><div style = "width: 40px;"><input type="checkbox" name = "w60"><br><strong>60<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "w70"><br><strong>70<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "w80"><br><strong>80<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "w90"><br><strong>90<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "w120"><br><strong>120<strong></div></td> 
								<td><div style = "width: 40px;"><input type="checkbox" name = "w140"><br><strong>140<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "w160"><br><strong>160<strong></div></td>
							</tr>
						 </table>
						 </a>
					</strong>
					</div>
				</td>
			<tr>
			</tr>				
				<td style = "width: 50px;">	
					<br>
					<div style = "width: 100px;">
					<strong>
						<a class = "expanation">
						Длина
						</a>
						<br>
						 <a style = "font-size: 14px; width: 80px;">
						 <table>
							<tr>
								<td><div style = "width: 40px;"><input type="checkbox" name = "l120"><br><strong>120<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "l140"><br><strong>140<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "l190"><br><strong>190<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "l195"><br><strong>195<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "l200"><br><strong>200<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "l210"><br><strong>210<strong></div></td>
								<td><div style = "width: 40px;"><input type="checkbox" name = "l220"><br><strong>220<strong></div></td>
							</tr>
						 </table>
						 </a>
					</strong>
					</div>
				</td>
			</tr>
		</table>
		
		<p class = "expanation"><strong>Высота</strong></p>
		<input name = "height_mtrs" id = "height_mtrs" type = "text" cols = "10"  class = "name_logo" onclick = "this.value = ''" />
		
		<p class = "expanation"><strong>Цена</strong></p>
		<input name = "rate" id = "rate" type = "text" cols = "10"  class = "name_logo" onclick = "this.value = ''" />
		
        <p class = "expanation"><strong>Выберите изображение до 2Mb </strong></p>
		<input type = "file" name = "load_img" id = "load_img" class = "load_foto" />

		<p class = "expanation">
		<input type = "checkbox" name = "action" id = "action" class = "name_logo" /> <strong>Акция</strong>
		</p>
		
		<input type = "submit" value = "ДОБАВИТЬ" class = "button_enter" name = "load_matras" action = "" />
				
		</form>
		



		<button  value = "ВЫХОД" class = "button_enter"  onclick = "time_close()" ><strong>ВЫХОД</strong></button>
		
		<br><br>
		
		
        </div>
		
		<br>
		
		</div>
		
</center>

</div>


</div>






