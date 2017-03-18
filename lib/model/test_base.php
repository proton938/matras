<meta charset = "utf-8">


<form method = "POST" action = "" enctype = "multipart/form-data">
<input id = "cur_url" name = "cur_url" type = "text" method = "POST" value = "654" />
</form>

<?php



$db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');

$buf = $db->query('SELECT * FROM matrasy');
$readbuf = $buf->fetchAll();


foreach ($readbuf as $mass)
							{
								echo $mass['name_tovar'].'<br>';
								echo $mass['creator'].'<br>';
								echo $mass['rigidity'].'<br>'; 
								echo $mass['type'].'<br>'; 
								
								echo $mass['w60'].'<br>'; 
								echo $mass['w70'].'<br>';
								echo $mass['w80'].'<br>';
								echo $mass['w90'].'<br>';
								echo $mass['w90'].'<br>';
								echo $mass['w120'].'<br>';
								echo $mass['w140'].'<br>';
								echo $mass['w160'].'<br>';
								
								echo $mass['l120'].'<br>';
								echo $mass['l140'].'<br>';
								echo $mass['l190'].'<br>';
								echo $mass['l195'].'<br>';
								echo $mass['l200'].'<br>';
								echo $mass['l210'].'<br>';
								echo $mass['l220'].'<br>';
								
								echo $mass['rate'].'<br>'; 
								echo $mass['image'].'<br>';
								echo $mass['action'].'<br>'; 
							}
							

