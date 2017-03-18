

<div id = "print_data" class = "screen_div">

<iframe name = "status" width = "0px" height = "0px">
</iframe>

<center>
		
        <div class = "reg_window">
		
		<div class = "reg_window_div"  align = "left" style = "height: ">
		
			<form method = "POST" enctype = "multipart/form-data" action = "../lib/model/delite_tovar.php" target = "status">
		
			<p class = "expanation"><strong>Подтвердить удаление товара</strong></p>
			
			<input type = "text" id = "name_table" name = "name_table" value = ""/>
			<input type = "text" id = "id_tovar" name = "id_tovar" value = ""/>
			
			<hr width = "90%" align = "left" color = "#ffffff" size = "1px">
			
			<table width = "100%">
				<tr>
					<td>
						<input type = "submit" name = "delite_tovar" value = "Удалить" class = "button_enter" />
					</td>
					<td>
						<button  value = "ВЫХОД" class = "button_enter"  onclick = "time_close()" ><strong>ВЫХОД</strong></button>
					</td>
				</tr>
			</table>
			
			</form>
		
		<br>
							
        </div>
		</div>
		
</center>

</div>








