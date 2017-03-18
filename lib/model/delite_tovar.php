<?php

if (isset($_POST['delite_tovar']))
	{
		$tbl = $_POST['name_table'];
		$id = $_POST['id_tovar'];

		$db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');
		 
		$buf = $db->query('SELECT * FROM '.$tbl.' WHERE id = "'.$id.'"');
		$readbuf = $buf->fetchAll();
		 
		foreach ($readbuf as $mass)
									{
										$path = '..'.substr($mass['image'], 2);
										unlink($path);
										$db->query('DELETE FROM '.$tbl.' WHERE id = "'.$id.'"');
									}
	}

 	
?>

