
<?php

if (isset($_POST['down']))
						{
							echo 'tweryht54uy6 <br>';
						}

$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

echo $url;
?>

<head>
<meta charset = "utf-8">

</head>




<script>

function pp()
			{
			document.location.href = "#dddd";
			var mm = document.location.href;
			var ss = mm.substr(-4, 4);
			document.getElementById('rect').innerHTML = ss;
			document.getElementById('buf').innerHTML = ss;
			rectcolor();
			}
			
function mm()
			{
			document.location.href = "#eeee";
			var mm = document.location.href;
			var ss = mm.substr(-4, 4);
			document.getElementById('rect').innerHTML = ss;
			document.getElementById('buf').innerHTML = ss;
			rectcolor();
			}
			
			
function rectcolor()
					{
						var tt = document.location.href;
						tt = tt.substr(-4, 4);
						
						if (tt == "eeee") { document.getElementById('rect').style.background = "blue"; }
						
						if (tt == "dddd") { document.getElementById('rect').style.background = "#eeeeee"; }
					}
	
	
</script>


<body onload = "rectcolor()">

<form method = "POST" action = "" enctype = "multipart/form-data">

<input name = "down" type = "submit" value = "down" action = "">

<input  type = "submit" value = "no" action = "">

</form>


<input type = "button" value = "treyt" onclick = "pp()">
<input type = "button" value = "gfdgh" onclick = "mm()">


<div id = "rect" style = "position: absolute; top: 200px; left: 200px; width: 100px; height: 100px; background: red;">
</div>

<div id = "buf" style = "position: absolute; top: 100px; left: 200px; width: 100px; height: 50px; background: #eeeeee;">
</div>

</body>