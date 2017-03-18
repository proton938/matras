
<div id = "print_data" class = "screen_div">

<div style = "left: 0px; top: 0px; position: absolute; height: 120%; width: 100%; padding-top: 100px;">

<iframe name = "status" width = "0px" height = "0px">
</iframe>

<center>
		
        <div class = "admin_window">
		
		<div class = "admin_window_div"  align = "left">
		
		<p class = "expanation"><strong>ЗАГРУЗИТЬ ОСНОВАНИЕ</strong></p>
		
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
		</select>
		
		<p class = "expanation"><strong>Вид основания</strong></p>
		<select name = "view_basis" id = "view_basis" class = "name_logo">
			<option selected="selected" ></option>
			<option>Деревянное</option>
			<option>Металлическое</option>
			<option>С подъемным механизмом</option>
			<option>Трансформируемое</option>
			<option>Корпусное</option>
		</select>
		
		<p></p>
		
		<table cellspacing = "0px" style = "width: 150px;">
			<tr>
				<td style = "width: 30px;">
					<p class = "expanation"><strong>Ширина </strong></p>
					<select name = "width_mtrs" id = "width_mtrs" class = "name_logo">
						<option selected="selected" ></option>
						<option>60</option>
						<option>70</option>
						<option>80</option>
						<option>90</option>
						<option>120</option>
						<option>140</option>
						<option>160</option>
					</select>
				</td>
				
				<td style = "width: 50px;">		
					<p class = "expanation"><strong> Длина</strong></p>
					<select name = "length_mtrs" id = "length_mtrs" class = "name_logo">
						<option selected="selected" ></option>
						<option>120</option>
						<option>140</option>
						<option>190</option>
						<option>195</option>
						<option>200</option>
						<option>210</option>
						<option>220</option>
					</select>
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
		
		<input type = "submit" value = "ДОБАВИТЬ" class = "button_enter" name = "load_osnovaniye" action = ""/>
				
		</form>
		

		<button  value = "ВЫХОД" class = "button_enter"  onclick = "time_close()" ><strong>ВЫХОД</strong></button>
		
		<br><br>
							
        </div>
		
		<br>
		
		</div>
		
</center>

</div>

</div>





