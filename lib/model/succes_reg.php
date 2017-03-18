<?php

$reg_txt = fopen('reg.txt', 'r');                // считываем файл подтверждения регистрации
$buf_reg = fread($reg_txt, filesize('reg.txt'));
fclose($reg_txt);


if ($buf_reg == 'succes') 
                         {
			               echo '<script>setTimeout("acces()", 1000);</script>'; // если успешно запускаем функцию вывода окна ввода
						   $reg_txt = fopen('reg.txt', 'w');
						   fwrite($reg_txt, '');
						   fclose($reg_txt);
			             }
						 