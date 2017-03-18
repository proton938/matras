<meta charset = "utf-8">

<style>

@media screen and (max-width:3000px) { 
    button{ 
        font-size:14; 
    }}
@media screen and (max-width:1600px) { 
    button { 
        font-size:12; 
    }}
@media screen and (max-width:1200px) { 
    button { 
        font-size:10; 
    }}
@media screen and (max-width:1000px) { 
    button { 
        font-size:8; 
    }}
	
	

@media screen and (max-width:3000px) { 
    p{ 
        font-size:14; 
    }}
@media screen and (max-width:1600px) { 
    p { 
        font-size:12; 
    }}
@media screen and (max-width:1200px) { 
    p { 
        font-size:10; 
    }}
@media screen and (max-width:1000px) { 
    p { 
        font-size:8; 
    }}
	

@media screen and (max-width:3000px) { 
    input { 
        font-size:14; 
    }}
@media screen and (max-width:1600px) { 
    input { 
        font-size:12; 
    }}
@media screen and (max-width:1200px) { 
    input { 
        font-size:10; 
    }}
@media screen and (max-width:1000px) { 
    input { 
        font-size:8; 
    }}
	
	
	
@media screen and (max-width:3000px) { 
    table { 
        font-size:14; 
    }}
@media screen and (max-width:1600px) { 
    table { 
        font-size:12; 
    }}
@media screen and (max-width:1200px) { 
    table { 
        font-size:10; 
    }}
@media screen and (max-width:1000px) { 
    table { 
        font-size:8; 
    }}
	
</style>


<form  method = "POST" action = "" enctype = "multipart/form-data">

<div style = "position: fixed; background: #ffffff; top: 2%; left: 0; width: 100%; height: 28%; opacity: 0.8; z-index: 100;">
</div>

<!--шаблон для загрузки CSV-->

<p style = "position: fixed; left: 1%; top: 1%; z-index: 200;">загрузить файл CSV</p>

<div style = "position: fixed; z-index: 200; background: linear-gradient(to bottom, #FFDEAD, #FFEFD5); width: 35%; top: 5%; left: 1%; height: 4%; border: solid 1px #CD853F; border-radius: 5px;" > 
<input type = "file" name = "zagruz" multiple style = "position: absolute; left: 2%; top: 20%; width: 70%; height: 70%; background: linear-gradient(to bottom, #DEB887, #F5DEB3);"/>
<input type = "submit" value = "принять" method = "POST" name = "apple" style = "position: absolute; left: 75%; top: 20%; width: 20%; height: 70%;" />
</div>


<!--шаблон для создания файла SQLITE -->

<p style = "position: fixed; left: 37%; top: 1%; z-index: 200;">Ввести в поле имя SQLITE-файла</p>

<div style = "position: fixed; z-index: 200; left: 37%; background: linear-gradient(to bottom, #FFDEAD, #FFEFD5); border: solid 1px #CD853F; border-radius: 5px; width: 55%; top: 5%; height: 4%;"> 
<input type = "text" id = "xx" value = "" style = "position: absolute; left: 2%; top: 20%; width: 25%; height: 70%;"/>
<button type = "button" value = "утвердить имя базы" onclick = "yes()" style = "position: absolute; left: 27.5%; top: 20%; width: 30%; height: 70%;">утвердить имя базы</button>
<textarea id = "field" name = "enter_text" cols = "25" rows = "1" value = "5555" style = "position: absolute; top: 20%; left: 58%; width: 20%; height: 70%;"></textarea>
<input type = "submit" value = "создать файл" method = "POST" name = "file_creat" style = "position: absolute; top: 20%; left: 80%; width: 18%; height: 70%;"/>
</div>



<!--шаблон для создания таблицы и дирректории загрузки файлов-->

<p style = "position: fixed; z-index: 300; left: 10%; top: 11%; width: 10%;" >введите имя создаваемой таблицы</p>
<p style = "position: fixed; left: 10%; top: 15%; z-index: 205; width: 10%;">введите имя дирректории загрузки </p>

<div style = "position: fixed; z-index: 200; background: linear-gradient(to bottom, #FFDEAD, #FFEFD5); width: 20%; top: 12%; left: 1%; height: 12%; border: solid 1px #CD853F; border-radius: 5px;" > 

<textarea id = "name_table" name = "name_table" cols = "20" rows = "1" style = "position: absolute; top: 5%; left: 2%; height: 25%; width: 40%;"></textarea>
<textarea name = "name_dir" cols = "20" rows = "1" style = "position: absolute; top: 40%; left: 2%; height: 25%; width: 40%;"></textarea>
<input type = "submit" method = "POST" name = "new_table" action = "" value = "создать таблицу"  style = "position: absolute; left: 2%; top: 72%; height: 24%; width: 38%;" />
<input type = "submit" method = "POST" name = "retable" action = "" value = "поменять таблицу"  style = "position: absolute; left: 60%; top: 72%; height: 24%; width: 38%;" />

</div>


<!--шаблон для ввода данных в таблицу-->

<div style = "position: fixed; z-index: 200; left: 22%; top: 12%; width: 62%; height: 7%; background: linear-gradient(to bottom, #FFDEAD, #FFEFD5); border: solid 1px #CD853F; border-radius: 5px;">

<input type = "file" name = "load_produkt" multiple style = "position: absolute; top: 40%; left: 1%;"/>


<p style = "position: absolute; left: 25%; top: -15%; height: 40%; z-index: 100;">название продукта</p>
<textarea  name = "name_pastry" cols = "20" rows = "1" style = "position: absolute; top: 40%; left: 25%; height: 45%; width: 20%;"></textarea>

<p style = "position: absolute; left: 47%; top: -15%; height: 40%; z-index: 100;">вес упаковки в кг</p>
<textarea  name = "ves_pastry" cols = "10" rows = "1" style = "position: absolute; top: 40%; left: 47%; height: 45%; width: 5%;"></textarea>

<p style = "position: absolute; left: 58%; top: -15%; height: 40%; z-index: 100;">срок хранения/в сутках</p>
<textarea  name = "srok_pastry" cols = "10" rows = "1" style = "position: absolute; top: 40%; left: 58%; height: 45%; width: 5%;"></textarea>

<input type = "submit" method = "POST" action = "" name = "apple_table" value = "утвердить продукт" style = "position: absolute; left: 70%; top: 45%; height: 50%"/> 

<input type = "submit" method = "POST" action = "" name = "visual_table" value = "вывести таблицу" style = "position: absolute; left: 85%; top: 45%; height: 50%;"/>

</div>



<p style = "position: fixed; top: 8.5%; left: 85%; z-index: 205;">введите номер редактируемой ячейки</p>

<div style = "position: fixed; z-index: 200; left: 85%; top: 12%; width: 13%; height: 13%; background: linear-gradient(to bottom, #FFDEAD, #FFEFD5); border: solid 1px #CD853F; border-radius: 5px;">
</div>

<!--поле ввода номера-->
<textarea name = "nomer" cols = "4" rows = "1" style = "position: fixed; top: 13%; left: 86%; z-index: 205;"></textarea>

<!--кнопка замены продукта-->

<input type = "submit" method = "POST" action = "" name = "apple_table_update" value = "заменить" style = "position: fixed; left: 86%; top: 16%; z-index: 205;"/> 


<!--кнопка вставки строки-->

<input type = "submit" method = "POST" action = "" name = "dobav" value = "вставить" style = "position: fixed; left: 86%; top: 19%; z-index: 205;">


<!--кнопка удаления продукта-->

<input type = "submit" method = "POST" action = "" name = "udal" value = "удалить" style = "position: fixed; left: 86%; top: 22%; z-index: 205;">

</div>

<!--шаблон вывода списка таблиц-->
<p style = "position: fixed; left: 85%; top: 24%; z-index: 205;">задействованная таблица</p>

<!--кнопка опустошения поля списка-->
<input type = "submit" method = "POST" action = "" name = "stir" value = "стереть таблицу" style = "position: fixed; left: 91%; top: 22%; z-index: 205;">

</form>


<script>

function yes()
{
var c = document.getElementById('xx').value;
document.getElementById('field').innerHTML = c;                                                         <!-- утвердили имя планируемой базы -->
document.getElementById('xx').value = '';
}

</script> 



<?php

function visual()
{
$mm = fopen('memory.txt', 'r');                                                  // считываем ранее записанное имя файла SQLITE
								 $rd = fread($mm, filesize('memory.txt'));
								 fclose($mm);
								 
								 $tp = fopen('t_pastry.txt', 'r');                                              // считываем ранее записанное имя таблицы
								 $tpr = fread($tp, filesize('t_pastry.txt'));
								 fclose($tp);
								 
								 $db = new PDO('sqlite:'.$rd);
								 
								 $zapros = $db->query('SELECT * FROM "'.$tpr.'"');                               // выделяем всю таблицу для вывода
								 $result = $zapros->fetchAll();
								  
								 echo '<div style = "position: absolute; left: 5%; top: 42%; width: 78%;">';
								 echo '<table cellspacing = "10">';
								 $i = 0;
								 $j = 0;						                           
								 foreach($result as $mass)    
								                           {
                                                          $i++;
														   if ($i == 1) {echo '<tr>';}
														   echo '<td style = "width: 20%; background: linear-gradient(to bottom, #F5F5DC, #F5DEB3); border-radius: 20px">';				// выводим содержимое таблицы		                                                            
														   echo '<center><p style = "font-family: arial; color: #B22222; padding-top: 2%;">'.$mass['name'].'</p></center>';
														   echo $mass['id'].' _ ';
														   echo '<img style = "width: 90%; padding-left: 5%;" src = "'.$mass['path'].'">';
														   echo '<center><p style = "padding-bottom: 5%;">'; 
														   echo 'вес упаковки '.$mass['ves'].' кг <br>';
														   echo 'срок хранения '.$mass['srock'].' суток';
														   echo '</p></center>';
														   echo '</td>';
														   if ($i == 4) {echo '</tr>'; $i = 0;}
														   

														   }														   
								  echo count($result);						   
								  echo '</table>';
                                  echo '</div>';
}

								
$buf = $_POST['enter_text'];                                                                                                                                 // считываем утвержденное имя SQLITE-файла
							
								
// процедура создания sqlite файла
							
if (isset($_POST['file_creat']))
                                  {
								   
								   if ($buf != "") {
								                     $db = new PDO('sqlite:'.$buf.'.db');                                                                    // создаем SQLITE-файл
													 echo '<p style = "position: absolute; top: 8%; left: 37%; z-index: 200;">создан файл '.$buf.'.db';
													 $mm = fopen('memory.txt', 'w');                                                                  
													 fwrite($mm, $buf.'.db');                                                                                // записываем имя SQLITE-файла в текстовый документ memory.txt
													 fclose($mm);
                                                    }
													
									else            {
									                 echo '<p style = "position: absolute; top: 8%; left: 37%; z-index: 200;">не задано имя</p>';
													 }
													 isset($_POST['name_table']);
													 
													 $db->query('CREATE TABLE IF NOT EXISTS prise (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, name_table, name_dir)');                                           //создаем таблицу-список таблиц продуктов
                                                     
                                                    // процедура создания таблицы хранения временных данных при работе поисковика

                                                    $db->query('CREATE TABLE search_table (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, allproduct, product, table_product)');

                                                    $buf = $db->query('SELECT * FROM search_table');
                                                    $readbuf = $buf->fetchAll();						  
                                                    $db->query('INSERT INTO search_table (allproduct, product, table_product) VALUES ("rrrrrrr", "yyyyyyyyy", "tretretr")');
						  
                                                    $buf = $db->query('SELECT * FROM search_table');
                                                    $readbuf = $buf->fetchAll();

                                                    foreach($readbuf as $field)
                                                                              {
						                                                       echo $field['id'];
						                                                       echo $field['allproduct'];
						                                                       echo $field['product'];
						                                                       echo $field['table_product'];
						                                                      }													 
								  }
								  
								  
// процедура создания таблицы
							  
if (isset($_POST['new_table']))                                                                                                                              //создаем таблицу
                                {
								 $nt = $_POST['name_table'];                                                                                                // вводим имя таблицы
								 if ($nt != ''){
								                 $mm = fopen('memory.txt', 'r');                                                                            //считываем имя SQLITE-файла из текстового файла memory.txt
								                 $rd = fread($mm, filesize('memory.txt'));
												 fclose($mm);
								                 echo '<p style = "position: absolute; left: 1%; top: 27%; z-index: 200;">'.$rd.'</p>';
												 
												 $db = new PDO('sqlite:'.$rd);                                                                              // запрос к SQLITE-файлу по считанному имени
												 $db->exec('CREATE TABLE IF NOT EXISTS '.$nt.' (                                                              
	
			                                          id INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT,
			                                          path, 
			                                          name,
			                                          ves,
			                                          srock		
			
			                                               )');                                                                                             // создали таблицу  в базе данных 
														   
														    $zapros = $db->query('SELECT name FROM sqlite_master WHERE type = "'.$nt.'"');                  // проверяем наличие таблицы
								                            $result = $zapros->fetchAll();
								  
								                            if (sizeof($result) == 0) {echo '<p style = "position: absolute; left: 1%; top: 29%; z-index: 200;">таблица создана</p>';}
																												
															
													$tp = fopen('t_pastry.txt', 'w');                                                                      //записываем имя таблицы в текстовый документ t_pastry.txt
													$tpr = fwrite($tp, $nt);
													fclose($tp);
													
													// процедура создания дирректории                  
				                                    $dir_prod = $_POST['name_dir'];                                                // считываем введеное имя строки
                                                    if ($dir_prod != '')
                                                    {					
                                                    mkdir($dir_prod, 0777, true);                                                   // создаем дирректорию по заданному пути
					                                $tp = fopen('dir.txt', 'w');                                                    // записываем название каталога документ dir.txt
					                                $tpr = fwrite($tp, $dir_prod.'/');
					                                fclose($tp);
													$db->query('INSERT INTO prise (name_table, name_dir) VALUES ("'.$nt.'", "'.$dir_prod.'")');                                       //записываем имя таблицы в таблицу списка
					                                }
					                                else 
													{
													$db->query('INSERT INTO prise (name_table, name_dir) VALUES ("'.$nt.'", "_________")');
													echo '<p style = "z-index: 205; position: absolute; top: 28%; left: 1%;">не задано имя дирректории</p>';
													}
                                              
								               }
								else		   
								               {
											     echo '<p style = "position: absolute; left: 1%; top: 27%; z-index: 205;">не задано имя таблицы</p>';
											   }
								 
                                }
								
// процедура замены таблицы и дирректории

if (isset($_POST['retable']))
                            {
							
	$nt = $_POST['name_table'];                                                                                // вводим имя таблицы
	if ($nt != '')           {
							 $nomber = $_POST['nomer'];
							 
							 $mm = fopen('memory.txt', 'r');                                                                            //считываем имя SQLITE-файла из текстового файла memory.txt
							 $rd = fread($mm, filesize('memory.txt'));
							 fclose($mm);
							 
							 $tp = fopen('t_pastry.txt', 'r');
							 $tpr = fread($tp, filesize('t_pastry.txt'));
							 fclose($tp);
							 

							 $dir_prod = $_POST['name_dir'];                                                                            // считываем введеное имя дирректории
							 
							 $db = new PDO('sqlite:'.$rd );
							 $db->query('DROP TABLE "'.$tpr.'"');
							 
							 $buf = $db->query('SELECT id FROM prise WHERE name_table = "'.$tpr.'"');
							 $readbuf = $buf->fetchAll();
							 
							 foreach($readbuf as $mass)
							                          {
													   echo $mass['id'];
							                           $db->query('UPDATE prise SET name_table = "'.$nt.'" WHERE id = "'.$mass['id'].'"');                 //записываем имя таблицы в таблицу списка
													   if ($dir_prod != '')
													                      {
																		   $tp = fopen('dir.txt', 'r');                                                    // считываем путь для загрузки файла
						                                                   $del_dir = fread($tp, filesize('dir.txt'));
						                                                   fclose($tp);
																		   
																		   $fd = scandir($del_dir);
																		   
																		   array_shift($fd);
																		   array_shift($fd);
																		   echo count($fd);
																		   for ($i = 0; $i <= count($fd); $i++)
																		                                       {
																											    unlink($del_dir.$fd[$i]);
																											   }
																		   
																		   rmdir($del_dir);
																		   
																		   mkdir($dir_prod, 0777, true);                                                   // создаем дирректорию по заданному пути
					                                                       $tp = fopen('dir.txt', 'w');                                                    // записываем название каталога документ dir.txt
					                                                       $tpr = fwrite($tp, $dir_prod.'/');
					                                                       fclose($tp);
																		   
													                      $db->query('UPDATE prise SET name_dir = "'.$dir_prod.'" WHERE id = "'.$mass['id'].'"'); //записываем имя дирректории в таблицу списка
																		  }
													                  else 
													                      {
													                       $db->query('INSERT INTO prise (name_table, name_dir) VALUES ("'.$nt.'", "_________")');
													                       echo '<p style = "z-index: 205; position: absolute; top: 28%; left: 1%;">не задано имя дирректории</p>';
													                      }
							                          }
													  
						     $db->exec('CREATE TABLE IF NOT EXISTS '.$nt.' (                                                              
	
			                                          id INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT,
			                                          path, 
			                                          name,
			                                          ves,
			                                          srock		
			
			                                               )');                                                                                             // создали таблицу  в базе данных 
														   
							 $zapros = $db->query('SELECT name FROM sqlite_master WHERE type = "'.$nt.'"');                  // проверяем наличие таблицы
						     $result = $zapros->fetchAll();
								  
							 if (sizeof($result) == 0) {echo '<p style = "position: absolute; left: 1%; top: 29%; z-index: 200;">таблица создана</p>';}
							 
							 $tp = fopen('t_pastry.txt', 'w');                                                                      //записываем имя таблицы в текстовый документ t_pastry.txt
							 $ntb = fwrite($tp, $nt);
							 fclose($tp);
							}
					    else {'<p style = "position: fixed; left: 85%; top: 29%; z-index: 205;">не введено имя таблицы</p>';}		 
							}
							
// процедура стирания лишнего поля в списке

if (isset($_POST['stir']))	
                         {
						  $nomber = $_POST['nomer'];
						  
		if ($nomber != '')
                         {		
						  $mm = fopen('memory.txt', 'r');                                                                            //считываем имя SQLITE-файла из текстового файла memory.txt
						  $rd = fread($mm, filesize('memory.txt'));
						  fclose($mm);
						  
						  $db = new PDO('sqlite:'.$rd);
                          $db->query('UPDATE prise SET name_table = "" WHERE id = "'.$nomber.'"');
						  $db->query('UPDATE prise SET name_dir = "" WHERE id = "'.$nomber.'"');
						  }
				    else  {echo '<p style = "position: fixed; left: 93%; top: 26%; z-index: 205;">не введен номер</p>';}
						  
						 }						
								
								
// процедура вывода списка таблиц
                                 
	   $readbase = 'memory.txt';
	   if (file_exists($readbase))
								 {
								 $mm = fopen('memory.txt', 'r');                                                                            //считываем имя SQLITE-файла из текстового файла memory.txt
								 $rd = fread($mm, filesize('memory.txt'));
                                 fclose($mm);
														 
								 $db = new PDO('sqlite:'.$rd);
								 
								 $buf = $db->query('SELECT name_table FROM prise');                                                        //обращаемся к списку таблиц считываем поле имени таблиц
								 $readbuf = $buf->fetchAll();
								 
								 
								 echo '<form  method = "POST" action = "" enctype = "multipart/form-data">';                                       // создаем форму-переключатель таблиц
								 echo '<div style = "position: fixed; left: 85%; top: 30%; z-index: 205; background: #eeeeee; padding: 0.2%;">';
								 $i = 0;
								 
								 foreach($readbuf as $field)                                                                                                             // цикл считывания списка созданных таблиц
								                            {
															 $i++;
															 echo $i;
															 echo  '<input type = "submit" method = "POST" name = "'.$i.'" value = "'.$field['name_table'].'" /><br>';   // создаем кнопку активации таблицы
															 if (isset($_POST[$i]))
															                      {
																				   $tp = fopen('t_pastry.txt', 'w');                                               //записываем имя таблицы в текстовый документ t_pastry.txt
													                               $tpr = fwrite($tp, $field['name_table']);
													                               fclose($tp);
																				   
																				   $buf = $db->query('SELECT name_dir FROM prise WHERE id = "'.$i.'"');            // считываем имя соответствующей дирректории
																				   $readdir = $buf->fetchAll();
																				   
																				   foreach($readdir as $mass)
																				                            {
																						                      $tp = fopen('dir.txt', 'w');                               // записываем название каталога документ dir.txt
					                                                                                          $wdir = fwrite($tp, $mass['name_dir'].'/');
					                                                                                          fclose($tp);
																						                    }
																				  }
															}
								 echo '</div>';
								 echo '</form>';
								 visual();
	 $readtable = 't_pastry.txt';
	 if (file_exists($readtable))
	                             {
								 $tp = fopen('t_pastry.txt', 'r');
								 $tpr = fread($tp, filesize('t_pastry.txt'));
								 fclose($tp);
								 echo '<p style = "position: fixed; left: 85%; top: 26%; z-index: 205;">'.$tpr.'</p>';        // выводим из текстового файла t_pastry.txt имя задействованной таблицы
								 }
							else
							    {
								  echo '<p style = "position: fixed; left: 85%; top: 29%; z-index: 205;">не задействовано ни одной</p>';
								 }
								 
						    $buf = $db->query('SELECT name_dir FROM prise');                                                                    // считываем из списка имя соответствующей дирректории
                            $readdir = $buf->fetchAll();
							
							echo '<div style = "position: fixed; left: 93%; top: 30%; z-index: 205; background: #eeeeee; padding: 0.2%;">';
							foreach($readdir as $field)
							                          {
													   echo '<input type = "text" style = "background: #ffffff; width: 90%;" border: solid 0px; value = "'.$field['name_dir'].'" /><br>'; // выводим имя соответствующей дирректории
													  }
							echo '</div>';
	
								 								 
								 }
						    else
							     {
								  echo '<p style = "position: fixed; left: 85%; top: 26%; z-index: 205;">не задействовано ни одной</p>';
								 }
				
                            							
								  
// процедура ввода данных в таблицу
								  
if (isset($_POST['apple_table']))                                                                                                                            //вводим данные в созданную таблицу 
                                 {
								  if (is_uploaded_file($_FILES['load_produkt'] ['tmp_name']))                                                               // задаем условие выбран ли файл
								  {
								  
								  
								  $tp = fopen('dir.txt', 'r');                                                                                              // считываем ранее записанный путь для загрузки файла
								  $dir_prod = fread($tp, filesize('dir.txt'));
								  fclose($tp);
								  
								  $zagruzfile = $dir_prod.basename($_FILES['load_produkt'] ['name']);                                                       // выводим имя заданной дирректории для загрузки файла
								  
								  echo $zagruzfile;
								  
								  move_uploaded_file($_FILES['load_produkt'] ['tmp_name'], $zagruzfile);                                                    // перемещаем выбранный файл в заданную дирректорию 
								  
								                                                                          
								  $name_prod = $_POST['name_pastry'];                                                                                      // считываем данные из поля имени продукта
								  
								  $ves_prod = $_POST['ves_pastry'];                                                                                        // считываем данные из поля веса продукта
								  
								  $srok_hran = $_POST['srok_pastry'];                                                                                     // считываем данные из поля срока хранения продукта
								  
								  
								  $mm = fopen('memory.txt', 'r');
								  $rd = fread($mm, filesize('memory.txt'));
								  fclose($mm);
								  echo $rd;
								 
								  $tp = fopen('t_pastry.txt', 'r');
								  $tpr = fread($tp, filesize('t_pastry.txt'));
								  fclose($tp);
								  
								  $db = new PDO('sqlite:'.$rd);
								  
								  $zapros = $db->query('SELECT name FROM sqlite_master WHERE type = "'.$tpr.'"');                                        // проверяем наличие таблицы
								  $result = $zapros->fetchAll();
								  
								  if (sizeof($result) == 0) {echo 'таблица создана';}
								  
								  
								  if ($db->query('INSERT INTO "'.$tpr.'" (path, name, ves, srock) VALUES ("'.$zagruzfile.'", "'.$name_prod.'", "'.$ves_prod.'", "'.$srok_hran.'")') > 0)   // вводим данные в таблицу
								  {echo '<p style = "position: fixed; left: 24%; top: 24%;">данные введены</p>';}   
								  else {echo '<p style = "position: absolute; left: 24%; top: 28%;">данные отсутствуют</p>';}
								  
								  
								  visual();													   
								  }
								  else {echo '<p style = "position: absolute; left: 24%; top: 28%;">Не выбран файл</p>';}
								 }	
								 
								 

								 
// процедура замены данных в заданной строке								 
								 
if (isset($_POST['apple_table_update']))                                                                                                                // заменяем данные в строке таблицы
                                       {
									    $nomber = $_POST['nomer'];
										echo '<p style = "position: absolute; left: 24%; top: 30%;">'.$nomber.'</p>';
										
										if ($nomber != '')
										                 {
									                          
										                                                                                
																														$dr = fopen('dir.txt', 'r');                         // считываем ранее записанное имя файла дирректории
																														$rdr = fread($dr, filesize('dir.txt'));
																														fclose($dr);
																														
																														 $mm = fopen('memory.txt', 'r');                      // считываем ранее записанное имя файла SQLITE
																														 $rd = fread($mm, filesize('memory.txt'));
																														 fclose($mm);
																														 
											                                                                             echo '<p style = "position: absolute; left: 24%; top: 28%;">wau!!!</p>';
																														 
																														 $tp = fopen('t_pastry.txt', 'r');                  // считываем ранее записанное имя таблицы
																														 $tpr = fread($tp, filesize('t_pastry.txt'));
																														 fclose($tp);
																														 
																														 $zagruzfile = $rdr.basename($_FILES['load_produkt'] ['name']);
																														 
																														 $db = new PDO('sqlite:'.$rd); 
																														 
																														 if (basename($_FILES['load_produkt'] ['name'] != ''))																									 
																														 {
																														 $zz = $db->query('SELECT path FROM "'.$tpr.'" WHERE id = "'.$nomber.'"');                 // выделяем поле path для считывания имени файла  для удаления              
																														 $ff = $zz->fetchAll();
																														 foreach($ff as $field)
																														                       {																																			    
																																			    unlink($field['path']);                                           // удаляем файл для замены
																																			   }
																														 
																														 move_uploaded_file($_FILES['load_produkt'] ['tmp_name'], $zagruzfile);                   // заменняем удаленный файл      
																														 $db->query('UPDATE "'.$tpr.'" SET path = "'.$zagruzfile.'" WHERE  id = "'.$nomber.'"');        // перезаписываем имя файла в поле path 
																														 }
																														 																														 
																														 
																														 $name_prod = $_POST['name_pastry'];                                              // считываем данные из поля имени продукта																														 
								                                                                                         if ($name_prod != '') 
																														                      {
																																			   $db->query('UPDATE "'.$tpr.'" SET name = "'.$name_prod.'" WHERE id = "'.$nomber.'"');   // перезаписываем имя продукта
																																			  }        																														 
																														 
								                                                                                         $ves_prod = $_POST['ves_pastry'];                                                 // считываем данные из поля веса продукта
																														 if ($ves_prod != '') 
																														                     {
																																			  $db->query('UPDATE "'.$tpr.'" SET ves = "'.$ves_prod.'" WHERE id = "'.$nomber.'"');     // перезаписываем вес продукта
																																			 }
								  
								                                                                                         $srok_hran = $_POST['srok_pastry'];                                               // считываем данные из поля срока хранения продукта
																														 if ($srok_hran != '')
																														                      {
																																			   $db->query('UPDATE "'.$tpr.'" SET srock = "'.$srok_hran.'" WHERE id = "'.$nomber.'"');  // перезаписываем срок хранения продукта
																																			  } 
																														 
																														 
											                                                                            
														  visual();	  
									                     }
										else {echo '<p style = "position: absolute; left: 88%; top: 32%;">Не введен номер</p>'; visual();}
									   }

// процедура вывода содержимого таблицы на экран

if (isset($_POST['visual_table']))

								{
								
								visual(); 
								 
								} 
								

// процедура вставки новой строки между строками в таблице
								
if (isset($_POST['dobav']))                                                                                                     // вставка строки среди таблицы
                          {
						  $nomber = $_POST['nomer'];
						  
						  $mm = fopen('memory.txt', 'r');                                                                                            // считываем ранее записанное имя файла SQLITE
						  $rd = fread($mm, filesize('memory.txt'));
						  fclose($mm);
								 
						  $tp = fopen('t_pastry.txt', 'r');
						  $tpr = fread($tp, filesize('t_pastry.txt'));                                                                             // считываем ранее записанное имя таблицы
						  fclose($tp);
						  
						  $db = new PDO('sqlite:'.$rd);
						  
						  $readstr = $db->query('SELECT * FROM "'.$tpr.'"'); 
						  $strread = $readstr->fetchAll();
						  echo '<p style = "position: absolute; top: 35%;">'.count($strread).'</p>';
						  
                          if ($nomber != ''){	                                                                                                     // если последняя строка не пустая - добавляем пустую строку для переноса значений
						                     $buf = $db->query('SELECT path FROM "'.$tpr.'" WHERE id = "'.count($strread).'"');
						                     $result = $buf->fetchAll();
                                             foreach($result as $field) {
											                              echo '<p style = "position: absolute; top: 37%;">'.$field['path'].'</p>';
																		  if ($field['path'] != '') {$db->query('INSERT INTO "'.$tpr.'"(path, name, ves, srock)VALUES("", "", "", "")');}
																		  }
																		  
																		  $tp = fopen('dir.txt', 'r');                                                        // считываем путь для загрузки файла
								                                          $dir_prod = fread($tp, filesize('dir.txt'));
								                                          fclose($tp);
																		  
																		  if (is_uploaded_file($_FILES['load_produkt'] ['tmp_name']))
																		  
																		  {
																		  $readstr = $db->query('SELECT * FROM "'.$tpr.'"');
																		  $strread = $readstr->fetchAll();
																		  
																		  
																		  echo '<p style = "position: absolute; top: 39%;">';
																		  for ($i = 1; $i <= count($strread)-$nomber; $i++)                                       // задаем цикл смещения строк на + 1
																		                                                {
																														 $raznost = count($strread)-$i;           // определяем разность между номером вставляемой строки и общим количеством строк
																														 $raznost1 = $raznost + 1;
																														 
																														 $znak = $db->query('SELECT path FROM "'.$tpr.'" WHERE id = "'.$raznost.'"');
																														 $znak1 = $znak->fetchAll();
																										foreach($znak1 as $mass) 
																														      {
																														       $db->query('UPDATE "'.$tpr.'" SET path = "'.$mass['path'].'" WHERE id = "'.$raznost1.'"');    // копируем поле path на следующую строку
																														       }
																														 
																														 $znak = $db->query('SELECT name FROM "'.$tpr.'" WHERE id = "'.$raznost.'"');
																														 $znak1 = $znak->fetchAll();
																									    foreach($znak1 as $mass) 
																														       {
																														        $db->query('UPDATE "'.$tpr.'" SET name = "'.$mass['name'].'" WHERE id = "'.$raznost1.'"');   // копируем поле name на следующую строку
																														       }
																															   
																														 $znak = $db->query('SELECT ves FROM "'.$tpr.'" WHERE id = "'.$raznost.'"');
																														 $znak1 = $znak->fetchAll();
																									    foreach($znak1 as $mass) 
																														       {
																														        $db->query('UPDATE "'.$tpr.'" SET ves = "'.$mass['ves'].'" WHERE id = "'.$raznost1.'"');   // копируем поле ves на следующую строку
																														       }
																															   
																														 $znak = $db->query('SELECT srock FROM "'.$tpr.'" WHERE id = "'.$raznost.'"');
																														 $znak1 = $znak->fetchAll();
																									    foreach($znak1 as $mass) 
																														       {
																														        $db->query('UPDATE "'.$tpr.'" SET srock = "'.$mass['srock'].'" WHERE id = "'.$raznost1.'"');  // копируем поле srock на следующую строку 
																														       }
																														 
																														}
																														$zagruzfile = $dir_prod.basename($_FILES['load_produkt'] ['name']);            // определяем дирректорию для вставляемого файла
																														echo '<p style = "position: absolute; top: 35%;">'.$zagruzfile.'</p>';
																														move_uploaded_file($_FILES['load_produkt'] ['tmp_name'], $zagruzfile);		   // перемещаяем вставляемый файл	
																														
																														$name_prod = $_POST['name_pastry'];                                            // считываем данные из поля имени продукта
								                                                                                        $ves_prod = $_POST['ves_pastry'];                                              // считываем данные из поля веса продукта								  
								                                                                                        $srok_hran = $_POST['srok_pastry'];                                            // считываем данные из поля срока хранения продукта
																														
																														$db->query('UPDATE "'.$tpr.'" SET path = "'.$zagruzfile.'" WHERE id = "'.$nomber.'"');     // меняем значение поля path
																														$db->query('UPDATE "'.$tpr.'" SET name = "'.$name_prod.'" WHERE id = "'.$nomber.'"');      // меняем значение поля name
																														$db->query('UPDATE "'.$tpr.'" SET ves = "'.$ves_prod.'" WHERE id = "'.$nomber.'"');        // меняем значение поля ves
																														$db->query('UPDATE "'.$tpr.'" SET srock = "'.$srok_hran.'" WHERE id = "'.$nomber.'"');     // меняем значение поля srock
																		  echo '</p>';
																		  visual();
																		  }
																else {echo '<p style = "position: absolute; top: 32%; left: 88%;">не загружен файл</p>';}
																		  
                                             																		  
                                             }	
                           else {echo '<p style = "position: absolute; top: 32%; left: 88%;">Не введен номер строки</p>'; visual();}											 
						  }



// процедура удаления строки и продукта

if (isset($_POST['udal']))
                          {
						  $nomber = $_POST['nomer'];                                                          // вводим номер с клавиатуры
						  
				if ($nomber != '')
                          {				
						  $mm = fopen('memory.txt', 'r');                                                     // считываем ранее записанное имя файла SQLITE
						  $rd = fread($mm, filesize('memory.txt'));
						  fclose($mm);
						  
						  $tp = fopen('dir.txt', 'r');                                                        // считываем путь для загрузки файла
						  $dir_prod = fread($tp, filesize('dir.txt'));
						  fclose($tp);
								 
						  $tp = fopen('t_pastry.txt', 'r');
						  $tpr = fread($tp, filesize('t_pastry.txt'));                                       // считываем ранее записанное имя таблицы
						  fclose($tp);
						  
						  $name_prod = $_POST['name_pastry'];                                            // считываем данные из поля имени продукта
		                  $ves_prod = $_POST['ves_pastry'];                                              // считываем данные из поля веса продукта								  
						  $srok_hran = $_POST['srok_pastry'];                                            // считываем данные из поля срока хранения продукта
						  
						  $db = new PDO('sqlite:'.$rd);
						  
						  $buf = $db->query('SELECT * FROM "'.$tpr.'"');
						  $readbuf = $buf->fetchAll();
						  
						  echo '<p style = "position: absolute; top: 38%;">'.count($readbuf).'</p>';
						  
						  $buf = $db->query('SELECT path FROM "'.$tpr.'" WHERE id = "'.$nomber.'"');
						  $str = $buf->fetchAll();
						  
						  foreach($str as $field)
						                        {
												 echo '<p style = "position: absolute; top: 38%;">'.$field['path'].'</p>';
												 unlink($field['path']);
												}
												
						  for ($i = $nomber+1; $i <= count($readbuf); $i++)
						                                                 {
																		  $buf = $db->query('SELECT * FROM "'.$tpr.'" WHERE id = "'.$i.'"');
																		  $str = $buf->fetchAll();
																		  foreach($str as $field)
																		  {
																		  $j = $i-1;
																		  $db->query('UPDATE "'.$tpr.'" SET path = "'.$field['path'].'" WHERE id = "'.$j.'"');
																		  $db->query('UPDATE "'.$tpr.'" SET name = "'.$field['name'].'" WHERE id = "'.$j.'"');
																		  $db->query('UPDATE "'.$tpr.'" SET ves = "'.$field['ves'].'" WHERE id = "'.$j.'"');
																		  $db->query('UPDATE "'.$tpr.'" SET srock = "'.$field['srock'].'" WHERE id = "'.$j.'"');
																		  }
																		 }
						 $maximum = count($readbuf);
						 $db->query('UPDATE "'.$tpr.'" SET path = "" WHERE id = "'.$maximum.'"');
						 $db->query('UPDATE "'.$tpr.'" SET name = "" WHERE id = "'.$maximum.'"');
						 $db->query('UPDATE "'.$tpr.'" SET ves = "" WHERE id = "'.$maximum.'"');
						 $db->query('UPDATE "'.$tpr.'" SET srock = "" WHERE id = "'.$maximum.'"');
						  visual();
						  }	
						  
				else  {echo'<p style = "position: absolute; top: 32%; left: 88%;">не введен номер</p>'; visual();}	  
						  
						  }	  
								  
// процедура загрузки csv файла							  

if (isset($_POST['apple']))                                                                                                                                  //загружаем csv файл
                           {
						   $n = basename($_FILES['zagruz'] ['name']);
						   echo "<p style = 'position: absolute; top: 10%; left: 1%;'>".$n."</p>";
						   $r = substr($n, -3);
						   echo "<p style = 'position: absolute; top: 12%; left: 1%;'>".$r."</p>";
						   if ($r != 'csv') 
						    {
						                     if ($r == ''){echo "<p style = \"position: absolute; left: 1%; top: 8%; z-index: 205;\">файл не загружен</p>";}
						                     else {echo "<p style = \"position: absolute; left: 1%; top: 8%; z-index: 205;\">неподходящий формат</p>";}
							}
						   else {echo "<p style = \"position: absolute; left: 1%; top: 8%; z-index: 205;\">правильно</p>";}
						   }