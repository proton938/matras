<head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<meta charset = "utf-8">

</head>


<div id = "procedure"></div>



<?php


 $db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');

 
if (isset($_POST['reg']))                                      // добавить наматрасник
	
{
		
$name = $_POST['name_tovar'];		                            // считываем наименование товара
							  											  
$creator = $_POST['creator'];                                  // считываем имя производителя

$funct = $_POST['funct'];                                  // считываем функцию

$width = $_POST['width_mtrs'];                                 // считываем ширину

$length = $_POST['length_mtrs'];                                 // считываем длину

$thickness = $_POST['thickness'];                                 // считываем толщину

$rate = $_POST['rate'];                                      // считываем цену

$action = $_POST['action'];                                      // считываем значение акции

									   
	   if (is_uploaded_file($_FILES['load_img'] ['tmp_name']))  // если изображение выбрано ...

		{	
		 $path = '../view/images/';									
		 $ship_img = $path.basename($_FILES['load_img'] ['name']);
			
		 // загружаем фото пользователя										
		 move_uploaded_file($_FILES['load_img'] ['tmp_name'], $ship_img); 
		 
		 echo '<div id = "name_img">images/'.basename($_FILES['load_img'] ['name']).'</div>';	// процедура вызова уменьшителя изображения
		 echo '<script>var i = document.getElementById("name_img").innerHTML;
			   $("#procedure").load("../view/image_size.php", "i="+i);</script>';
			   

		 echo '<div style = "position: absolute; left: 0px; top: 0px; z-index: 999; color: red;
			   width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
			   <center>
			   Регистрация прошла успешно<br></center></div>';									 
																																				
		 $db->query('INSERT INTO namatrasniky (name_tovar,                                    
											   creator, 
											   funct,
											   width,
											   length,
											   thickness,
											   rate,
											   action,
											   image) 
													VALUES ("'.$name.'", 
															"'.$creator.'",
															"'.$funct.'",
															"'.$width.'",
															"'.$length.'",
															"'.$thickness.'",
															"'.$rate.'",
															"'.$action.'",
															"'.$ship_img.'")');
		 
		}
	else
		{
		 $db->query('INSERT INTO namatrasniky (name_tovar,                                    
											   creator, 
											   funct,
											   width,
											   length,
											   thickness,
											   rate,
											   action,
											   image) 
													VALUES ("'.$name.'", 
															"'.$creator.'",
															"'.$funct.'",
															"'.$width.'",
															"'.$length.'",
															"'.$thickness.'",
															"'.$rate.'",
															"'.$action.'",
															"")');
		}		
	
}






if (isset($_POST['load_matras']))                                      // добавить матрас
	
{
		
$name = $_POST['name_tovar'];		                            // считываем наименование товара
							  											  
$creator = $_POST['creator'];                                   // считываем имя производителя

$rigidity = $_POST['rigidity'];                                 // считываем жесткость

$type = $_POST['type_mtrs'];                                 // считываем тип



$w60 = $_POST['w60'];                                 // считываем ширину
$w70 = $_POST['w70'];
$w80 = $_POST['w80'];
$w90 = $_POST['w90'];
$w120 = $_POST['w120'];
$w140 = $_POST['w140'];
$w160 = $_POST['w160'];


$l120 = $_POST['l120'];                                 // считываем длину
$l140 = $_POST['l140'];
$l190 = $_POST['l190'];
$l195 = $_POST['l195'];
$l200 = $_POST['l200'];
$l210 = $_POST['l210'];
$l220 = $_POST['l220'];



$height = $_POST['height_mtrs'];                                 // считываем высоту

$rate = $_POST['rate'];                                      // считываем цену

$action = $_POST['action'];                                      // считываем значение акции

									   
	   if (is_uploaded_file($_FILES['load_img'] ['tmp_name']))  // если изображение выбрано ...

		{	
		 $path = '../view/images/';									
		 $ship_img = $path.basename($_FILES['load_img'] ['name']);
			
		 // загружаем фото пользователя										
		 move_uploaded_file($_FILES['load_img'] ['tmp_name'], $ship_img); 
		 
		 echo '<div id = "name_img">images/'.basename($_FILES['load_img'] ['name']).'</div>';	// процедура вызова уменьшителя изображения
		 echo '<script>var i = document.getElementById("name_img").innerHTML;
			   $("#procedure").load("../view/image_size.php", "i="+i);</script>';
			   

		 echo '<div style = "position: absolute; left: 0px; top: 0px; z-index: 999; color: red;
			   width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
			   <center>
			   Регистрация прошла успешно<br></center></div>';									 
																																				
		 $db->query('INSERT INTO matrasy (name_tovar,                                    
										creator,
										rigidity,
										type,
										
										w60,
										w70,
										w80,
										w90,
										w120,
										w140,
										w160,
										
										l120,
										l140,
										l190,
										l195,
										l200,
										l210,
										l220,
										
										height,
										rate,
										action,
										image) 
											VALUES (
													"'.$name.'", 
													"'.$creator.'", 
													"'.$rigidity.'",
													"'.$type.'",
													
													"'.$w60.'",
													"'.$w70.'",
													"'.$w80.'",
													"'.$w90.'",
													"'.$w120.'",
													"'.$w140.'",
													"'.$w160.'",
													
													"'.$l120.'",
													"'.$l140.'",
													"'.$l190.'",
													"'.$l195.'",
													"'.$l200.'",
													"'.$l210.'",
													"'.$l220.'",
													
													"'.$height.'",
													"'.$rate.'",
													"'.$action.'",
													"'.$ship_img.'"
																	)');
		 
		}
	else
		{
		 $db->query('INSERT INTO matrasy (name_tovar,                                    
										creator,
										rigidity,
										type,
										width,
										length,
										height,
										rate,
										action,
										image) 
											VALUES (
													"'.$name.'", 
													"'.$creator.'", 
													"'.$rigidity.'",
													"'.$type.'",
													"'.$width.'",
													"'.$length.'",
													"'.$height.'",
													"'.$rate.'",
													"'.$action.'",
													""
																	)');
		}		
	
}







 if (isset($_POST['load_krovat']))                                      // добавить кровать
	
{
		
$name = $_POST['name_tovar'];		                            // считываем наименование товара
							  											  
$creator = $_POST['creator'];                                  // считываем имя производителя

$material = $_POST['material'];                              // считываем материал

$type = $_POST['type_mtrs'];                                 // считываем тип

$basis = $_POST['view_basis'];                                 // считываем вид основания

$width = $_POST['width_mtrs'];                                 // считываем ширину

$length = $_POST['length_mtrs'];                                 // считываем длину

$height = $_POST['height_mtrs'];                                 // считываем высоту

$rate = $_POST['rate'];                                      // считываем цену

$action = $_POST['action'];                                      // считываем значение акции

									   
	   if (is_uploaded_file($_FILES['load_img'] ['tmp_name']))  // если изображение выбрано ...

		{	
		 $path = '../view/images/';									
		 $ship_img = $path.basename($_FILES['load_img'] ['name']);
			
		 // загружаем фото пользователя										
		 move_uploaded_file($_FILES['load_img'] ['tmp_name'], $ship_img); 
		 
		 echo '<div id = "name_img">images/'.basename($_FILES['load_img'] ['name']).'</div>';	// процедура вызова уменьшителя изображения
		 echo '<script>var i = document.getElementById("name_img").innerHTML;
			   $("#procedure").load("../view/image_size.php", "i="+i);</script>';
			   

		 echo '<div style = "position: absolute; left: 0px; top: 0px; z-index: 999; color: red;
			   width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
			   <center>
			   Регистрация прошла успешно<br></center></div>';									 
																																				
		 $db->query('INSERT INTO krovaty (name_tovar,                                    
										creator,
										material,
										type,
										basis,
										width,
										length,
										height,
										rate,
										action,
										image) 
											VALUES (
													"'.$name.'", 
													"'.$creator.'", 
													"'.$material.'",
													"'.$type.'",
													"'.$basis.'",
													"'.$width.'",
													"'.$length.'",
													"'.$height.'",
													"'.$rate.'",
													"'.$action.'",
													"'.$ship_img.'"
																	)');
		 
		}
	else
		{
		 $db->query('INSERT INTO krovaty (name_tovar,                                    
										creator,
										material,
										type,
										basis,
										width,
										length,
										height,
										rate,
										action,
										image) 
											VALUES (
													"'.$name.'", 
													"'.$creator.'", 
													"'.$material.'",
													"'.$type.'",
													"'.$basis.'",
													"'.$width.'",
													"'.$length.'",
													"'.$height.'",
													"'.$rate.'",
													"'.$action.'",
													""
																	)');
		}		
	
}







 if (isset($_POST['load_podushka']))                                      // добавить подушку
	
{
		
$name = $_POST['name_tovar'];		                            // считываем наименование товара
							  											  
$creator = $_POST['creator'];                                  // считываем имя производителя

$material = $_POST['material'];                              // считываем материал

$rate = $_POST['rate'];                                      // считываем цену

$action = $_POST['action'];                                      // считываем значение акции

									   
	   if (is_uploaded_file($_FILES['load_img'] ['tmp_name']))  // если изображение выбрано ...

		{	
		 $path = '../view/images/';									
		 $ship_img = $path.basename($_FILES['load_img'] ['name']);
			
		 // загружаем фото пользователя										
		 move_uploaded_file($_FILES['load_img'] ['tmp_name'], $ship_img); 
		 
		 echo '<div id = "name_img">images/'.basename($_FILES['load_img'] ['name']).'</div>';	// процедура вызова уменьшителя изображения
		 echo '<script>var i = document.getElementById("name_img").innerHTML;
			   $("#procedure").load("../view/image_size.php", "i="+i);</script>';
			   

		 echo '<div style = "position: absolute; left: 0px; top: 0px; z-index: 999; color: red;
			   width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
			   <center>
			   Регистрация прошла успешно<br></center></div>';									 
																																				
		 $db->query('INSERT INTO podushky (name_tovar,                                    
											creator,
											material,
											rate,
											action,
											image) 
												VALUES (
														"'.$name.'", 
														"'.$creator.'", 
														"'.$material.'",
														"'.$rate.'",
														"'.$action.'",
														"'.$ship_img.'"
																		)');
		 
		}
	else
		{
		 $db->query('INSERT INTO podushky (name_tovar,                                    
											creator,
											material,
											rate,
											action,
											image) 
												VALUES (
														"'.$name.'", 
														"'.$creator.'", 
														"'.$material.'",
														"'.$rate.'",
														"'.$action.'",
														""
																		)');
		}		
	
}



 if (isset($_POST['load_osnovaniye']))                                      // добавить основание
	
{
		
$name = $_POST['name_tovar'];		                            // считываем наименование товара
							  											  
$creator = $_POST['creator'];                                  // считываем имя производителя

$basis = $_POST['view_basis'];                                 // считываем вид основания

$width = $_POST['width_mtrs'];                                 // считываем ширину

$length = $_POST['length_mtrs'];                                 // считываем длину

$height = $_POST['height_mtrs'];                                 // считываем высоту

$rate = $_POST['rate'];                                      // считываем цену

$action = $_POST['action'];                                      // считываем значение акции

									   
	   if (is_uploaded_file($_FILES['load_img'] ['tmp_name']))  // если изображение выбрано ...

		{	
		 $path = '../view/images/';									
		 $ship_img = $path.basename($_FILES['load_img'] ['name']);
			
		 // загружаем фото пользователя										
		 move_uploaded_file($_FILES['load_img'] ['tmp_name'], $ship_img); 
		 
		 echo '<div id = "name_img">images/'.basename($_FILES['load_img'] ['name']).'</div>';	// процедура вызова уменьшителя изображения
		 echo '<script>var i = document.getElementById("name_img").innerHTML;
			   $("#procedure").load("../view/image_size.php", "i="+i);</script>';
			   

		 echo '<div style = "position: absolute; left: 0px; top: 0px; z-index: 999; color: red;
			   width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
			   <center>
			   Регистрация прошла успешно<br></center></div>';									 
																																				
		 $db->query('INSERT INTO osnovaniya (name_tovar,                                    
												creator,
												basis,
												width,
												length,
												height,
												rate,
												action,
												image) 
													VALUES (
															"'.$name.'", 
															"'.$creator.'", 
															"'.$basis.'",
															"'.$width.'",
															"'.$length.'",
															"'.$height.'",
															"'.$rate.'",
															"'.$action.'",
															"'.$ship_img.'"
																			)');
		 
		}
	else
		{
		 $db->query('INSERT INTO osnovaniya (name_tovar,                                    
												creator,
												basis,
												width,
												length,
												height,
												rate,
												action,
												image) 
													VALUES (
															"'.$name.'", 
															"'.$creator.'", 
															"'.$basis.'",
															"'.$width.'",
															"'.$length.'",
															"'.$height.'",
															"'.$rate.'",
															"'.$action.'",
															""
																			)');
		}		
	
}
	





if (isset($_POST['load_mebel']))                                      // добавить мебель
	
{
		
$name = $_POST['name_tovar'];		                            // считываем наименование товара
							  											  
$creator = $_POST['creator'];                                  // считываем имя производителя

$material = $_POST['material'];                              // считываем материал

$type = $_POST['type_mtrs'];                                 // считываем тип

$rate = $_POST['rate'];                                      // считываем цену

$action = $_POST['action'];                                      // считываем значение акции

									   
	   if (is_uploaded_file($_FILES['load_img'] ['tmp_name']))  // если изображение выбрано ...

		{	
		 $path = '../view/images/';									
		 $ship_img = $path.basename($_FILES['load_img'] ['name']);
			
		 // загружаем фото пользователя										
		 move_uploaded_file($_FILES['load_img'] ['tmp_name'], $ship_img); 
		 
		 echo '<div id = "name_img">images/'.basename($_FILES['load_img'] ['name']).'</div>';	// процедура вызова уменьшителя изображения
		 echo '<script>var i = document.getElementById("name_img").innerHTML;
			   $("#procedure").load("../view/image_size.php", "i="+i);</script>';
			   

		 echo '<div style = "position: absolute; left: 0px; top: 0px; z-index: 999; color: red;
			   width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
			   <center>
			   Регистрация прошла успешно<br></center></div>';									 
																																				
		 $db->query('INSERT INTO mebel (name_tovar, 
										creator, 
										type,
										material,
										rate,
										action,
										image) 
												VALUES ("'.$name.'", 
														"'.$creator.'",
														"'.$type.'",
														"'.$material.'",
														"'.$rate.'",
														"'.$action.'",
														"'.$ship_img.'"
																		)');
		 
		}
	else
		{
		 $db->query('INSERT INTO mebel (name_tovar, 
										creator, 
										type,
										material,
										rate,
										action,
										image) 
												VALUES ("'.$name.'", 
														"'.$creator.'",
														"'.$type.'",
														"'.$material.'",
														"'.$rate.'",
														"'.$action.'",
														""
																		)');
		}		
	
}	



if (isset($_POST['load_divan']))                                      // добавить диван
	
{
		
$name = $_POST['name_tovar'];		                            // считываем наименование товара

$rate = $_POST['rate'];                                      // считываем цену
							  											  
$action = $_POST['action'];                                      // считываем значение акции
									   
	   if (is_uploaded_file($_FILES['load_img'] ['tmp_name']))  // если изображение выбрано ...

		{	
		 $path = '../view/images/';									
		 $ship_img = $path.basename($_FILES['load_img'] ['name']);
			
		 // загружаем фото пользователя										
		 move_uploaded_file($_FILES['load_img'] ['tmp_name'], $ship_img); 
		 
		 echo '<div id = "name_img">images/'.basename($_FILES['load_img'] ['name']).'</div>';	// процедура вызова уменьшителя изображения
		 echo '<script>var i = document.getElementById("name_img").innerHTML;
			   $("#procedure").load("../view/image_size.php", "i="+i);</script>';
			   

		 echo '<div style = "position: absolute; left: 0px; top: 0px; z-index: 999; color: red;
			   width: 100%; padding-top: 5%; font-family: arial; font-size: 20;">
			   <center>
			   Регистрация прошла успешно<br></center></div>';									 
																																				
		 $db->query('INSERT INTO divany (name_tovar,                                    
										rate,
										action,									   
										image) 
											VALUES ("'.$name.'",
													"'.$rate.'",
													"'.$action.'", 
													"'.$ship_img.'")');
		 
		}
	else
		{
		 $db->query('INSERT INTO divany (name_tovar,                                    
										   rate, 
										   action,
										   image) 
												VALUES ("'.$name.'",
														"'.$rate.'",
														"'.$action.'", 
														"")');
		}		
	
}	