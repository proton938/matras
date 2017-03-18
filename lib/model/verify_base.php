<?php

if (isset($_REQUEST['login'])) { $login = $_REQUEST['login'];}              //считываем логин
if (isset($_REQUEST['password'])) { $password = $_REQUEST['password']; }            // считываем пароль

 $db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');
 
 $buf = $db->query('SELECT * FROM admin');
 $readbuf = $buf->fetchAll();
 
 $i = 0;
 $j = 0;
 
 foreach ($readbuf as $field)
                            {
	if ($field['login'] == $login)
								{
								  $i++;
								       if ($field['password'] == $password)
									                                      {	
                                                                           $j++;
                                                                           $x = $field['id'];																		   
									                                       // загружаем интерфейс									
									                                       echo '<script>
																		   $("#start_load").load("../lib/controler/bootstrap.php"); 
                                                                           document.getElementById("message").innerHTML = "";																		   
																		   </script>';
																		  }
								}
							}
if ($i == 0)
            {
	           echo '<script>
			   document.getElementById("message").innerHTML = "<center>пользователь с таким логином не найден<br>необходимо зарегистрироваться</center>";
			   </script>';
            }
	   else
	        {
             if ($j == 0) 
                        {
			              echo '<script>
			                    document.getElementById("message").innerHTML = "<center>неверный пароль</center>";
			                    </script>';
			            }
			}
			

$txt = fopen('id.txt', 'w');	// записываем идентификационный номер входящего пользователя в базе данных
fwrite($txt, $x);
fclose($txt);