
<div id = "print_data" class = "screen_div">

<iframe name = "status" width = "0px" height = "0px">
</iframe>

<center>
		
        <div class = "admin_window">
		
		<div class = "admin_window_div"  align = "left">
		
		<p class = "expanation"><strong>ЗАГРУЗИТЬ ДИВАН</strong></p>
		
		<form method = "POST" enctype = "multipart/form-data" action = "../lib/model/insert_base.php" target = "status">
		
		<p class = "expanation"><strong>Наименование товара</strong></p>
		<input name = "name_tovar" id = "name_tovar" type = "text" cols = "30"  class = "name_logo" onclick = "this.value = ''" />
		
		<p class = "expanation"><strong>Цена</strong></p>
		<input name = "rate" id = "rate" type = "text" cols = "10"  class = "name_logo" onclick = "this.value = ''" />
		
        <p class = "expanation"><strong>Выберите изображение до 2Mb </strong></p>
		<input type = "file" name = "load_img" id = "load_img" class = "load_foto" />

		<p class = "expanation">
		<input type = "checkbox" name = "action" id = "action" class = "name_logo" /> <strong>Акция</strong>
		</p>
		
		<input type = "submit" value = "ДОБАВИТЬ" class = "button_enter" name = "load_divan" action = "" />
				
		</form>
		

		<button  value = "ВЫХОД" class = "button_enter"  onclick = "time_close()" ><strong>ВЫХОД</strong></button>
		
		<br><br>
							
        </div>
		
		<br>
		
		</div>
		
</center>






