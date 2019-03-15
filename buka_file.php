<?php 
switch ($_GET['page']){	
	case 'daftar' :if(!file_exists ("frm_daftar.php")) 
						   die ("<label class=text_merah>&nbsp;<blink><b>Error..!!</b>&nbsp; File daftar tidak ada..!!</blink></label>"); 
							include "frm_daftar.php"; 
							break;
	case 'action_daftar' :if(!file_exists ("act_daftar.php")) 
						   die ("<label class=text_merah>&nbsp;<blink><b>Error..!!</b>&nbsp; File action daftar tidak ada..!!</blink></label>"); 
							include "act_daftar.php"; 
							break;
	case 'persyaratan' :if(!file_exists ("frm_syarat.php")) 
						   die ("<label class=text_merah>&nbsp;<blink><b>Error..!!</b>&nbsp; File persyaratan tidak ada..!!</blink></label>"); 
							include "frm_syarat.php"; 
							break;
	case 'about' :if(!file_exists ("about.php")) 
						   die ("<label class=text_merah>&nbsp;<blink><b>Error..!!</b>&nbsp; File About tidak ada..!!</blink></label>"); 
							include "about.php"; 
							break;
	

	default				   :if(!file_exists ("default.php")) 
						   die ("<label class=text_merah>&nbsp;<blink><b>Error..!!</b>&nbsp; File default tidak ada..!!</blink></label>"); 
							include "default.php"; 
							break;
}
?>