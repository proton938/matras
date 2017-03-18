<html>

<head>
<meta charset = "utf-8">
<link rel = "stylesheet" href = "../lib/view/css/design.css">
<link rel = "stylesheet" href = "../lib/view/css/reg_desine.css">
<link href="https://fonts.googleapis.com/css?family= Oranienbaum " rel="stylesheet">

<script src = "../lib/model/js/admin.js"></script>
<script src = "../lib/model/js/navigation.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
</head>



<body style = "background: url(../lib/view/images/fon_element.jpg);" onload = "in_header()">

<div id = "id_url" style = "display: block"> <!-- скрытое имя контента для сравнения с url адресом -->
</div>

<div style = "position: absolute; left: 0px; top: 0px; width: 100%;">   <!--открываем абсолютный общий шаблон-->


<center>
	<div style = "width: 1004px;">                                      <!--открываем относительный общий шаблон-->
	
	
	
		<div id = "header">  <!--шаблон загрузки шапки и верхнего горизонтального меню
		                        файл lib/view/header.php-->
		
		</div>
		
			
		<script>
								
			setInterval("verif_url()", 200);
		
		</script>
		
		<!--поле контента-->
		<div style = "width: 100%; height: auto; background: #ffffff; ">
		
			<div id = "content">
			</div>
		
			<div id = "maps" style = "display: none;">
			
			<!--Карта Яндекс-->		
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=qYah9mcBVLNSQpHBiB0mo2FFqdyaRBsx&amp;width=1004&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
			
			</div>
		
		</div>
		<!--закрываем поле контента-->
		
		<div id = "footer" style = "width: 100%; height: 200px;">
		</div>
		
	</div>	                                                             <!--закрываем относительный общий шаблон-->		
</center>
</div>  
                                                                 <!--закрываем абсолютный общий шаблон-->
																 
																 
																 
<!--шаблоны для окна доступа в администрировании-->	
														 
																 
<div id = "tumbler">
</div>

<div id = "start_load">
</div>

<div id = "back">
</div>



<script>
</script>

<input type = "button" onclick = "acces()" style = "position: absolute; z-index: 999;">

</body>

</html>
