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
									<select name = "creator" id = "creator" style = "width: 100%; border: solid 0px; outline: none;">
										<option selected="selected" >Выбор производителя</option>
										<option>Аскона</option>
										<option>Орматек</option>
										<option>Райтон</option>
										<option>Verda</option>
									</select>
								</div>
								<br>
								<div class = "field_filtre" style = "margin-left: 10px; width: 82%; background: #eeeeee;">
									<a  class = "name_tovar" style = "padding: 2px;">
									Вид основания
									</a>
									 <p style = "font-size: 14px;"><input type="checkbox"> Деревянное              <br>
																   <input type="checkbox"> Металлическое           <br>
																   <input type="checkbox"> С подъемным механизмом         <br>
																   <input type="checkbox"> Трансформируемое                	<br>
																   <input type="checkbox"> Корпусное               
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
												<select name = "width_mtrs" id = "width_mtrs" class = "field_filtre" style = "outline: none; margin-top: 5px;">
														<option selected="selected" ></option>
														<option>60</option>
														<option>70</option>
														<option>80</option>
														<option>90</option>
														<option>120</option>
														<option>140</option>
														<option>160</option>
													</select>
											</td>
											<td>
												<a style = "padding: 2px;">
												Длина
												</a>
												<select name = "length_mtrs" id = "length_mtrs" class = "field_filtre" style = "outline: none; margin-top: 5px;">
													<option selected="selected" ></option>
													<option>120</option>
													<option>140</option>
													<option>190</option>
													<option>195</option>
													<option>200</option>
													<option>210</option>
													<option>220</option>
												</select>
											</td>
										</tr>
									</table>
									
									<br>
									
									<a style = "padding: 2px;">
										Высота
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
								
								<p style = "font-size: 14px;"><input type="checkbox"> Показать товары по акции                   	<br>              
								</p>
								
								<br>
								
								<center>
								<input type = "button" value = "показать товары" class = "button_details" style = "width: 60%">
								</center>
								<br><br>
								
							</div>
						</div>
					</td>
					
					<td width = "780px">
						
						<table cellspacing = "10px">
							<tr>
								<td>
									<p class = "kategory">
										Каталог оснований
									</p>
								</td>
							</tr>
						</table>
						
						<table cellspacing = "10px" width = "660px">                       <!--таблица товаров-->
						
							<?php
								
								require_once dirname(__FILE__).'/../model/read_base_osnovaniya.php';
																
							?>

						</table>
					</td>
				</tr>
			
			</table>
			
			
			
			
			