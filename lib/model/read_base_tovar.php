<script>
var dir_tovar = document.location.href;
var dir_tovar = dir_tovar.split("#");
var tbl_id = dir_tovar[1].split("_");
var tbl = tbl_id[0];
var id = tbl_id[1];

</script>


<?php
if (isset($_REQUEST['id'])) {$id = $_REQUEST['id'];}
if (isset($_REQUEST['tbl'])) {$tbl = $_REQUEST['tbl'];}


 $db = new PDO('sqlite:'.dirname(__FILE__).DIRECTORY_SEPARATOR.'base.db');
 
 $buf = $db->query('SELECT * FROM '.$tbl.' WHERE id = "'.$id.'"');
 $readbuf = $buf->fetchAll();
 
 foreach ($readbuf as $mass)
							{
								$image = substr($mass['image'], 2);
							}

		
	
	echo	'<td>
			<div style = "width: 429px; margin-top: 50px;">
				<center>
					<img src = "../lib'.$image.'" style = "border: solid 1px #999999;">
				</center>
			</div>
		</td>
		
		<td>	
				<div style = "width: 309px; margin-top: 50px;">
				<a style = "font-size: 20px;">
					<strong>'.$mass['name_tovar'].'</strong>
				</a>
				<br><br>
				<a style = "font-size: 18px;">
				Производитель: <strong>'.$mass['creator'].'</strong>
				<br>
				Тип: <strong>'.$mass['type'].'</strong>
				<br>
				Жесткость: <strong>'.$mass['rigidity'].'</strong>
				<br><br>
				</a>
				<a style = "font-size: 20px;">
				Размеры:
				</a>

				<table cellspacing = "0px">
				
					<tr>
						<td>
							<br>
							<a style = "font-size: 20px;">
							';
							if ($mass['w60'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Ширина: <strong>60</strong></div>';};
							if ($mass['w70'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Ширина: <strong>70</strong></div>';};
							if ($mass['w80'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Ширина: <strong>80</strong></div>';};			
							if ($mass['w90'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Ширина: <strong>90</strong></div>';};
							if ($mass['w120'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Ширина: <strong>120</strong></div>';};
							if ($mass['w140'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Ширина: <strong>140</strong></div>';};
							if ($mass['w160'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Ширина: <strong>160</strong></div>';};
	
			echo '
						</a>						
						</td>
					</tr>';
					
			echo	'<tr>
						<td>
							<a style = "font-size: 20px;">';
							
							if ($mass['l120'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Длина: <strong>120</strong></div>';};
							if ($mass['l140'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Длина: <strong>140</strong></div>';};
							if ($mass['l190'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Длина: <strong>190</strong></div>';};			
							if ($mass['l195'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Длина: <strong>195</strong></div>';};
							if ($mass['l200'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Длина: <strong>200</strong></div>';};
							if ($mass['l210'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Длина: <strong>210</strong></div>';};
							if ($mass['l220'] == 'on') {echo '<div style = "width: 200px; font-size: 18px;">Длина: <strong>220</strong></div>';};
							
			echo '
							</a>						
						</td>
					</tr>';
					
					
			echo	'<tr>
						<td>
							<div style = "width: 200px; font-size: 18px;">
								Высота: <strong>'.$mass['height'].'</strong>
							</div>
						</td>
					</tr>
					
				</table>
				
				<br>
				
				<a style = "font-size: 20px;">
					<strong>Цена: '.$mass['rate'].' рублей</strong>
				</a>
				<br><br>
				<a style = "font-size: 20px;">
				';
					if ($mass['action']) {echo '<strong>Акция</strong>';}
			echo '
					<strong></strong>
				</a>
				
				</div>
		</td>';
?>	