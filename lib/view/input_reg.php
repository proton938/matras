

<div id = "print_data" class = "screen_div">

<center>
		<!-- окно вывода результата авторизации -->
		<div id = "message" style = "position: absolute; left: 0px; top: 0px; z-index: 5; color: red; 
		width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
		</div>
		
        <div class = "reg_window">
		
		<div class = "reg_window_div"  align = "left" style = "height: ">
		
		<p class = "expanation"><strong>Логин</strong></p>
		<input name = "login" id = "login" type = "text" cols = "30"  class = "name_logo" value = ""  
		onclick = "this.value = ''"/>
		
		<p class = "expanation"><strong>Пароль</strong></p>
		<input name = "password" id = "password" type = "password" cols = "30"  class = "name_logo" value = "" 
		onclick = "this.value = ''"/>
		
		<br>
		<br>
		<hr width = "90%" align = "left" color = "#ffffff" size = "1px">

		<button value = "РЕГИСТРАЦИЯ" class = "button_enter" onclick = "reg()"><strong>Администрирование</strong></button>
		<br><br>
		
		<button  value = "ВЫХОД" class = "button_enter"  onclick = "close_window()" ><strong>ВЫХОД</strong></button>
		<br><br>
							
        </div>
		
		</div>
		
</center>


</div>

<div id = "log">
</div>







