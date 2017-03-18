<head>

<meta charset = "utf-8">

<link rel = "stylesheet" href = "..lib/view/css/templ_desine.css">

</head>




<div class = "top_layer">                                                    <!-- верхняя панель -->

<center>


<table cellspacing = "20px">

<tr style = "vertical-align: top;">


<!-- список пользователей -->


<td>

<center>

<div class = "user_contur">
                        <center>
                            <div class = "user_prise">                                                  <!-- загружаем аватарку -->
							                          <script> 
													  $("#foto").load("../lib/model/my_profil.php"); 
													  </script>
							                          <div id = "foto" class = "foto">
							                          </div>
							                          <div id = "my_name" class = "user_shadow">
							                          </div>
                            </div>
						</center>
</div>

<script>

function crlobby()
                  {
		            $("#panel_contur").load("../lib/view/create_lobby.php");
					$("#display_contur").load("../lib/view/panel_create_lobby.php");
		            $("#contur_block").load("../lib/view/button_block_target.php");
				  }
				  
function lobby_2x()
                  {
				    $("#panel_contur").load("../lib/view/panel_lobby2.php");
				    var n = 6;
					document.getElementById('display_contur').innerHTML = "<div style = 'height: 550px; overflow: auto; margin-top: 30px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;' class = 'contur_cnt5' id = 'lb_2'></div>";
				    $("#lb_2").load("../lib/model/tbl_lobby2.php", "n="+n)
					$("#contur_block").load("../lib/view/button_block.php");
				  }
				  
function lobby_4x()
                  {
				    $("#panel_contur").load("../lib/view/panel_lobby4.php");
				    var n = 6;
					document.getElementById('display_contur').innerHTML = "<div style = 'height: 550px; overflow: auto; margin-top: 30px; margin-left: 10px; margin-right: 10px; margin-bottom: 10px;' class = 'contur_cnt5'  id = 'lb_2'></div>";
				    $("#lb_2").load("../lib/model/tbl_lobby4.php", "n="+n)
					$("#contur_block").load("../lib/view/button_block.php");
				  }
				  
function on_general()
                     {
					   $("#panel_contur").load("../lib/view/insert_panel.php");
		               $("#display_contur").load("../lib/view/insert_lobby.php");
			         }
					 
					 setTimeout("on_general()", 500);
					 
function open_lobby()
                     {
					   $("#display_contur").load("../lib/model/open_lobby.php");
					 }
				  
</script>

<script>
$("#contur_block").load("../lib/view/button_block.php");
</script>

<div class = "contur_block" id = "contur_block">

</div>

</center>

</td>


<td align = "center">

<script>
		$("#panel_contur").load("../lib/view/insert_panel.php");
		$("#display_contur").load("../lib/view/insert_lobby.php");
</script>

<div class = "contur_cnt">
                         
						 
                         <div class = "contur_cnt1" id = "panel_contur">       <!--окно панели-->

                         </div>

                         <div class = "contur_cnt2">                           
                         </div>

</div>





<!-- общая таблица лобби -->


<div class = "contur_cnt3" id = "display_contur">                             <!--окно дисплэя-->                                      

                         
						  
</div>


</td>

</tr>

</table>




</center>

</div>




