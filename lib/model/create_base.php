 <?php
 
 $db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');
 
 $db->query('CREATE TABLE matrasy (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, 
									name_tovar, 
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
									image,
									action
											)');
 
 $db->query('CREATE TABLE krovaty (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, 
									name_tovar, 
									creator, 
									material,
									type,
									basis,
									width,
									length,
									height,
									rate,
									image,
									action
											)');
 
 $db->query('CREATE TABLE namatrasniky (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, 
										name_tovar, 
										creator,
										funct,
										width,
									    length,
										thickness,
										rate,
										image,
										action
												)');
 
 $db->query('CREATE TABLE podushky (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, 
									name_tovar, 
									creator,
									material,
									rate,									
									image,
									action
											)');
 
 $db->query('CREATE TABLE osnovaniya (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, 
										name_tovar, 
										creator,
										basis,
										width,
										length,
										height,
										rate,
										image,
										action
												)');
 
 $db->query('CREATE TABLE mebel (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, 
									name_tovar, 
									creator, 
									type,
									material,
									rate,
									image,
									action
											)');
 
 $db->query('CREATE TABLE divany (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, 
									name_tovar,
									rate,
									image,
									action
									       )');
 
 ?>
 