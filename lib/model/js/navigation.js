function verif_url()      /* функция верификации url для вывода сооответствующего контента */
					{
						
						var id_url = document.getElementById("id_url").innerHTML;   /* считываем скрытое имя контента */
						var current_url = document.location.href;   				/* считываем url адрес */
						current_url = current_url.split("#");                	/* отделяем последние 4 символа */
						current_url = current_url[1];
						
						if (id_url != current_url)            /* если адрес не соответствует скрытому имени ... */
							{
								in_content();
								in_menu();
								document.getElementById("id_url").innerHTML = current_url;
							}
					}



function in_url()            /*запускаем скрипт виртуального адреса генеральной страницы для условия вывода контента*/
					{
						var current_url = document.location.href;
						verif_admin = current_url.substr(-4, 4);
																
						if (verif_admin != "admn")                     /* проверяем если сайт не в режиме администрирования... */
							{
								current_url = current_url.substr(-5, 1);
								if (current_url != "#")						
									{
										document.location.href = "#gnrl";
									}
							}
						else
							{
								reg();
							}
					}




function in_header()          /*скрипт загрузки header - стартует при загрузке страницы в браузер*/
					{
						in_url();
						$("#header").load("../lib/view/header.php");
						in_content();
						in_menu();
					}

function in_menu()    /* загрузка меню */
					{
						var current_url = document.location.href;   				/* считываем url адрес */
						current_url = current_url.split("#");                	/* отделяем последние 4 символа */
						current_url = current_url[1];
						
						if (current_url == "admn")                                  /* если сайт в режиме администрирования */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_general.php");
							}
							
							
						
						if (current_url == "gnrl")                                            /* задаем условие вывода меню генеральная */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_general.php");
							}
							
						if (current_url == "nmtr")                                           /* задаем условие вывода меню наматрасники */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_nmtr.php");
							}
							
						if (current_url == "mtrs")                                          /* задаем условие вывода меню матрасы */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_mtrs.php");
							}
							
						if (current_url == "krvt")											/* задаем условие вывода меню кровати */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_krvt.php");	  
							}
							
						if (current_url == "podu")                                            /* задаем условие вывода меню подушки */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_podu.php");
							}
							
						if (current_url == "osnv")                                            /* задаем условие вывода меню основания */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_osnv.php");
							}
							
						if (current_url == "mebl")                                            /* задаем условие вывода меню мебель */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_mebl.php");
							}
							
						if (current_url == "divn")                                            /* задаем условие вывода меню диваны */
							{
								$("#top_menu").load("../lib/view/menu/top_menu_divn.php");
							}
							
						if (current_url == "stvr")
							{
								$("#top_menu").load("../lib/view/menu/top_menu_general.php");
							}
							
					}
		
		
function namatrasniky()    /* переходим в раздел наматрасники */
					{
						document.location.href = "#nmtr";
						document.getElementById("id_url").innerHTML = "nmtr";
						in_menu();
						in_content();
					}
					
function matrasy()    /* переходим в раздел матрасы */
					{
						document.location.href = "#mtrs";
						document.getElementById("id_url").innerHTML = "mtrs";
						in_menu();
						in_content();
					}
					
function krovaty()    /* переходим в раздел кровати */
					{
						document.location.href = "#krvt";
						document.getElementById("id_url").innerHTML = "krvt";
						in_menu();
						in_content();
					}
					
function podushky()    /* переходим в раздел подушки */
					{
						document.location.href = "#podu";
						document.getElementById("id_url").innerHTML = "podu";
						in_menu();
						in_content();
					}
					
function osnovaniya()    /* переходим в раздел основания */
					{
						document.location.href = "#osnv";
						document.getElementById("id_url").innerHTML = "osnv";
						in_menu();
						in_content();
					}
					
function mebel()    /* переходим в раздел мебель */
					{
						document.location.href = "#mebl";
						document.getElementById("id_url").innerHTML = "mebl";
						in_menu();
						in_content();
					}
					
function divany()    /* переходим в раздел мебель */
					{
						document.location.href = "#divn";
						document.getElementById("id_url").innerHTML = "divn";
						in_menu();
						in_content();
					}
					
					
					
function in_content()       /* скрипт загрузки content - стартует при старте скрипт header */
					{
						var current_url = document.location.href;   				/* считываем url адрес */
						current_url = current_url.split("#");                	/* отделяем последние 4 символа */
						current_url = current_url[1];
						
						if (current_url != "admn")                                  /* проверяем если сайт не в режиме администрирования... */
							{
								if (current_url == "gnrl")                                  /* задаем условие вывода генеральной страницы */
									{
										$("#content").load("../lib/view/content_general.php");
										document.getElementById("maps").style.display = "block";
									}
								
								if (current_url == "nmtr")                                  /* задаем условие вывода страницы наматрасники*/
									{
										$("#content").load("../lib/view/content_namatrasniky.php");
										document.getElementById("maps").style.display = "none";
									}
									
								if (current_url == "mtrs")                                  /* задаем условие вывода страницы матрасы*/
									{
										$("#content").load("../lib/view/content_matras.php");
										document.getElementById("maps").style.display = "none";
									}
									
								if (current_url == "krvt")                                  /* задаем условие вывода страницы кровати*/
									{
										$("#content").load("../lib/view/content_krovat.php");
										document.getElementById("maps").style.display = "none";
									}
									
								if (current_url == "podu")                                  /* задаем условие вывода страницы подушки */
									{
										$("#content").load("../lib/view/content_podushky.php");
										document.getElementById("maps").style.display = "none";
									}
									
								if (current_url == "osnv")                                  /* задаем условие вывода страницы основания */
									{
										$("#content").load("../lib/view/content_osnovaniya.php");
										document.getElementById("maps").style.display = "none";
									}
									
								if (current_url == "mebl")                                  /* задаем условие вывода страницы основания */
									{
										$("#content").load("../lib/view/content_mebel.php");
										document.getElementById("maps").style.display = "none";
									}
									
								if (current_url == "divn")                                  /* задаем условие вывода страницы основания */
									{
										$("#content").load("../lib/view/content_divany.php");
										document.getElementById("maps").style.display = "none";
									}
									
								if (current_url == "stvr")                                  /* задаем условие вывода страницы товар*/
									{
										$("#content").load("../lib/view/content_tovar.php");
										document.getElementById("maps").style.display = "none";
									}	
								
							}
						
						
					}
					
function in_tovar()
					{
						document.location.href = "#stvr";
						in_menu();
						in_content();
					}