<head>
<meta charset = "utf-8">
<link rel = "stylesheet" href = "../lib/view/css/reg_desine.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</head>

<div id = "print_data" class = "screen_div">

<center>
		
        <div class = "reg_window">
		
		<div class = "reg_window_div"  align = "left">
		
		<form method = "POST" enctype = "multipart/form-data" action = "" target = "status">
		
		<p class = "expanation"><strong>Логин</strong></p>
		<input name = "login" id = "login" type = "text" cols = "30"  class = "name_logo" onclick = "this.value = ''" />
		
		<p class = "expanation"><strong>Пароль</strong></p>
		<input name = "password" id = "password" type = "password" cols = "30"  class = "name_logo" onclick = "this.value = ''" />
		
        <p class = "expanation"><strong>Выберите изображение до 2Mb </strong></p>
		<input type = "file" name = "load_img" id = "load_img" class = "load_foto" />		
		
		<br>
		<input type = "submit" value = "ОТПРАВИТЬ" class = "button_enter" name = "reg" action = "" onclick = "backto()" />
		
		
		</form>
		



		<button  value = "ВХОД" class = "button_enter"  onclick = "acces()" ><strong>ВЫХОД</strong></button>

							
        </div>
		
		</div>
		
</center>



<div style = "position: absolute; top: 0px; left: 0px; width: 200px; height: 100px; background: #eeeeee;" id = "procedure">

</div>


<?php


 if (isset($_POST['reg']))
	
{
								  									   
		   if (is_uploaded_file($_FILES['load_img'] ['tmp_name']))  // если изображение выбрано ...

			{	
			 $path = '../lib/view/images/';									
			 $ship_img = $path.basename($_FILES['load_img'] ['name']);
				
			 // загружаем фото пользователя										
			 move_uploaded_file($_FILES['load_img'] ['tmp_name'], $ship_img); 
			 
			echo '<div style = "width: 100px; height: 100px; background: red;" id = "name_img">images/'.basename($_FILES['load_img'] ['name']).'</div>';	// процедура вызова уменьшителя изображения
            echo '<script>var i = document.getElementById("name_img").innerHTML;';
            echo '$("#procedure").load("../lib/view/image_size.php", "i="+i);</script>';
				   
          
				   

			 echo '<div style = "position: absolute; left: 0px; top: 0px; z-index: 999; color: red;
				   width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
				   <center>
				   Изображение загружено<br></center></div>';									 
																																					
			 $reg_txt = fopen('reg.txt', 'w');
			 fwrite($reg_txt, 'succes');
			 fclose($reg_txt);
									 
			}
 

	
}


?>