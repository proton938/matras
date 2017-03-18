 function acces()                                                                   /* окно доступа в админку */
	                {
					  $("#start_load").load("../lib/view/input_reg.php");
					  $("#back").load("../lib/view/fon.php");
					  $("#tumbler").load("../lib/model/create_base.php");
					}
					
 function load_img()                                                                 /* окно загрузки мебели наматрасников*/
	                {
					  $("#start_load").load("../lib/view/load_image.php");
					  $("#back").load("../lib/view/fon.php");
					  $("#tumbler").load("../lib/model/create_base.php");
					}
					
 function load_img_mtrs()                                                             /* окно загрузки матрасов */
	                {
					  $("#start_load").load("../lib/view/load_image_matrasy.php");
					  $("#back").load("../lib/view/fon.php");
					  $("#tumbler").load("../lib/model/create_base.php");
					}
					
 function load_img_krvt()                                                            /* окно загрузки кровати*/
	                {
					  $("#start_load").load("../lib/view/load_image_krovaty.php");
					  $("#back").load("../lib/view/fon.php");
					  $("#tumbler").load("../lib/model/create_base.php");
					}
					
 function load_img_podu()                                                             /* окно загрузки подушек */
	                {
					  $("#start_load").load("../lib/view/load_image_podushky.php");
					  $("#back").load("../lib/view/fon.php");
					  $("#tumbler").load("../lib/model/create_base.php");
					}
					
  function load_img_osnv()                                                            /* окно загрузки оснований */
	                {
					  $("#start_load").load("../lib/view/load_image_osnovaniya.php");
					  $("#back").load("../lib/view/fon.php");
					  $("#tumbler").load("../lib/model/create_base.php");
					}
					
 function load_img_mebl()                                                             /* окно загрузки мебели */
	                {
					  $("#start_load").load("../lib/view/load_image_mebel.php");
					  $("#back").load("../lib/view/fon.php");
					  $("#tumbler").load("../lib/model/create_base.php");
					}
					
 function load_img_divn()                                                              /* окно загрузки диванов */
	                {
					  $("#start_load").load("../lib/view/load_image_divany.php");
					  $("#back").load("../lib/view/fon.php");
					  $("#tumbler").load("../lib/model/create_base.php");
					}
					
 function close_window()
					{
						$("#start_load").load("../lib/view/dummy.txt");
					}
					
					
      function reg()
                    {
					  var current_url = document.location.href;   				/* считываем url адрес */
					  current_url = current_url.substr(-4, 4);                	/* отделяем последние 4 символа */
					  
					  if (current_url != "admn")                               /* проверяем если сайт не в режиме администрирования... */
						{
							  document.location.href = "#" + current_url + "_admn";
							  var current_admin_url = document.location.href;
							  current_admin_url = current_admin_url.substr(-9, 9);

							  if (current_admin_url == "gnrl_admn")
								{
									$("#content").load("../lib/view/admin_general.php");
								}
								
							  if (current_admin_url == "nmtr_admn")
								{
									$("#content").load("../lib/view/admin_namatrasniky.php");
								}
								
							 if (current_admin_url == "mtrs_admn")
								{
									$("#content").load("../lib/view/admin_matrasy.php");
								}
								
							 if (current_admin_url == "krvt_admn")
								{
									$("#content").load("../lib/view/admin_krovaty.php");
								}
								
							 if (current_admin_url == "podu_admn")
								{
									$("#content").load("../lib/view/admin_podushky.php");
								}
								
							 if (current_admin_url == "osnv_admn")
								{
									$("#content").load("../lib/view/admin_osnovaniya.php");
								}
								
							 if (current_admin_url == "mebl_admn")
								{
									$("#content").load("../lib/view/admin_mebel.php");
								}
								
							 if (current_admin_url == "divn_admn")
								{
									$("#content").load("../lib/view/admin_divany.php");
								}
								
							  $("#start_load").load("../lib/view/dummy.txt");
							  document.getElementById("maps").style.display = "none";
						}
					else                                                         /* если сайт в режиме администрирования... */
						{
							  var current_admin_url = document.location.href;
							  current_admin_url = current_admin_url.substr(-9, 9);

							  if (current_admin_url == "gnrl_admn")
								{
									$("#content").load("../lib/view/admin_general.php");
								}
								
							  if (current_admin_url == "nmtr_admn")
								{
									$("#content").load("../lib/view/admin_namatrasniky.php");
								}
								
							 if (current_admin_url == "mtrs_admn")
								{
									$("#content").load("../lib/view/admin_matrasy.php");
								}
								
							 if (current_admin_url == "krvt_admn")
								{
									$("#content").load("../lib/view/admin_krovaty.php");
								}
							
							 if (current_admin_url == "podu_admn")
								{
									$("#content").load("../lib/view/admin_podushky.php");
								}
								
							 if (current_admin_url == "osnv_admn")
								{
									$("#content").load("../lib/view/admin_osnovaniya.php");
								}
								
							 if (current_admin_url == "mebl_admn")
								{
									$("#content").load("../lib/view/admin_mebel.php");
								}
								
							 if (current_admin_url == "divn_admn")
								{
									$("#content").load("../lib/view/admin_divany.php");
								}
								
							  $("#start_load").load("../lib/view/dummy.txt");
							  document.getElementById("maps").style.display = "none";
						}
						
				
					}

function time_close() 
					{
						setTimeout("reg()", 200); 
						setTimeout("close_window()", 500); 						
					}
					
function interval_reg() 
					{
						setInterval("reg()", 200); 					
					}
					

function bootstrap()
                    {
					  var login = document.getElementById("login").value;
					  var password = document.getElementById("password").value;
	  if (login != '')
					  {
					  if (password != '')
					                    {
					                     $("#tumbler").load("../lib/model/verify_base.php", "login="+login+"&password="+password);	
										}	
                                   else	
                                        {
                                         document.getElementById("message").innerHTML = "<center>не ввели пароль</center>";	 
					                    }									   
					  }	
                else	
                      {
                        document.getElementById("message").innerHTML = "<center>не ввели логин</center>";	 
					  }					
					}
