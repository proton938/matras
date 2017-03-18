<?php

$db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');

$db->query('CREATE TABLE kategory (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, img_path)');

$buf = $db->query('SELECT * FROM kategory');
$readbuf = $buf->fetchAll();

$limit = count($readbuf);


if ($limit < 7)
	{
		$limit_plus = $limit+1;
		$value = '00'.$limit_plus;
		$db->query('INSERT INTO kategory (img_path) VALUES ("'.$value.'")');
	}
	
echo '<div id = "img_path">';
foreach($readbuf as $mass)
	{
		echo $mass['img_path'].' ';
	}
echo '</div>';
							
?>

<div id = "message" style = "position: absolute; left: 100px; top: 200px; z-index: 999; color: red;
							 padding-top: 5%; font-family: arial; font-size: 20;">
</div>

<script>


	var x = document.getElementById("img_path").innerHTML;
	x = x.split(" ");
	document.getElementById("message").innerHTML = x['2'];


</script>