			
			<table cellspacing = "0px">
			
				<tr style = "vertical-align: top;">
					<td>                                                     <!--панель фильтра-->
						<div style = "width: 225px; margin-top: 10px;">
							<div style = "width: 95%; border-right: solid 3px #FFE4B5;">
								<a  class = "name_tovar" style = "padding: 10px;">
									Фильтр по товарам
								</a>
								<br>
								<br>
								<div class = "field_filtre" style = "margin-left: 10px; width: 82%;">
									Выберите производителя 
									<img width = "10%">
									<img src = "../lib/view/images/strela.png">
								</div>
								<br>
								<div class = "field_filtre" style = "margin-left: 10px; width: 82%; background: #eeeeee;">
									<a  class = "name_tovar" style = "padding: 2px;">
									Функция
									</a>
									 <p style = "font-size: 14px;"><input type="checkbox"> Защищает               <br>
																   <input type="checkbox"> Увеличивает жесткость  <br>
																   <input type="checkbox"> Уменьшает жесткость
									 </p>								
								</div>
								<br>
								<div style = "margin-left: 10px; width: 82%;">
								
									<table style = "width: 100%">
										<tr>
											<td>
												<a style = "padding: 2px;">
												Ширина
												</a>
												<input type = "text" class = "field_filtre" style = "width: 55%;" />
											</td>
											<td>
												<a style = "padding: 2px;">
												Длина
												</a>
												<input type = "text" class = "field_filtre" style = "width: 55%;" />
											</td>
										</tr>
									</table>
									
									<br>
									
									<a style = "padding: 2px;">
										Толщина
									</a>
									
									<br>
									
									<table style = "width: 100%">
										<tr>
											<td>
												<a style = "padding: 2px;">
												от
												</a>
												<input type = "text" class = "field_filtre" style = "width: 55%;" />
											</td>
											<td>
												<a style = "padding: 2px;">
												до
												</a>
												<input type = "text" class = "field_filtre" style = "width: 55%;" />
											</td>
										</tr>
									</table>
									
									<br>
									
									<a style = "padding: 2px;">
										Цена
									</a>
									
									<br>
									<br>
									
									<input type="range" min="1" max="100" id="slider" value="3">
																		
									<br>
									<br>
									
									<table style = "width: 100%">
										<tr>
											<td>
												<a style = "padding: 2px;">
												от
												</a>
												<input type = "text" class = "field_filtre" style = "width: 55%;" />
											</td>
											<td>
												<a style = "padding: 2px;">
												до
												</a>
												<input type = "text" class = "field_filtre" style = "width: 55%;" />
											</td>
										</tr>
									</table>
							
									
								</div>
								
								<br>
								
								<center>
								<input type = "button" value = "показать товары" class = "button_details" style = "width: 60%">
								</center>
								
							</div>
						</div>
					</td>
					
					<td width = "780px">
						
						<table cellspacing = "10px">
							<tr>
								<td>
									<p class = "kategory">
										Каталог наматрасников
									</p>
								</td>
							</tr>
						</table>
						
						<form method = "POST" enctype = "multipart/form-data">
						
						<center>
							<input type = "button" value = "Добавить товар" onclick = "load_img()">
						</center>
						
						<table cellspacing = "10px" width = "660px">                       <!--таблица товаров-->
						
							<?php
								
								require_once dirname(__FILE__).'/../model/read_base_namatrasniky_admin.php';
																
							?>

						</table>
						
						</form>
					</td>
				</tr>
			
			</table>
			
			