<!--
		шапка и верхнее горизонтальное меню - загружается функцией -
			function in_header()
								{
									$("#header").load("../lib/view/header.php");									
								}
		в файле www/index.php
								-->		
		
		
		
		<div style = "width: 100%; background: #aaaaaa;">               <!--шапка-->
			<table cellspacing = "0px" height = "150px">
				<tr style = "vertical-align: center;">
					<td style = "width: 426px;">
					<center>
						<table cellspacing = "0px">
						<tr>
							<td>
								<p class = "header_1">
								г. Челябинск , Труда 185А,            <br>
								Центр интерьера "Магнит", 3 этаж ,    <br>
								316 секция , часы работы 10.00-20.00  <br>
								</p>
							</td>
						</tr>
						</table>
					</center>		
					</td>
					<td style = "width: 284px;">
						
						<!--скрипт возврата на главную страницу-->
						<script>
							function in_general()
												{
													var current_url = document.location.href;
													current_url = current_url.substr(-4, 4);
													if (current_url != "gnrl")						
														{
															document.location.href = "#gnrl";
														}
													in_content();
													in_menu();
												}
						</script>
						
						<img src = "../lib/view/images/logo.png"
									onmouseover = "this.src = '../lib/view/images/logo_hover.png'"
									onmouseout = "this.src = '../lib/view/images/logo.png'"
									onclick = "in_general()">
					</td>
					<td style = "width: 284px;">
						 <table cellspacing = "0px" width = "100%">
							<tr height = "25px">
								<td style = "color: #ffffff; font-size: 17px;">
								<center>
									Возникли вопросы? Звоните
								</center>
								</td>
							</tr>
							<tr height = "40px">
								<td style = "color: #ffffff; font-size: 27px;">
								<center>
									8 (351) 750-04-79
								</center>
								</td>
							</tr>
							<tr height = "40px">
								<td style = "color: #ffffff; font-size: 27px;">
								<center>
									<input type = "button" value = "заказать звонок менеджера" class = "call" />
								</center>
								</td>
							</tr>
						 </table>
					</td>
				</tr>
			</table>
		</div>                                                           <!--закрываем шапку-->
		
		
		
		<script>
		
				setTimeout("in_menu()", 100);
				
		</script>
		
		<div id = "top_menu">

		</div>