<meta charset = "utf-8">

<?php

 $db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');
 
 $buf = $db->query('SELECT * FROM users');
 $readbuf = $buf->fetchAll();
 
foreach ($readbuf as $field)
                           {
							   echo $field['login'].' ';
							   echo $field['password'].'<br>';
						   }
						   
						   echo '<br><br>';
						   
 $buf = $db->query('SELECT * FROM sqlite_master');
 $readbuf = $buf->fetchAll();
 
foreach ($readbuf as $field)
                           {
						       echo $field['rootpage'].' ';
							   echo $field['name'].'<br>';
						   }