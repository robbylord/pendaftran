<?php 
switch ($_GET['page']){	
	case 'daftar_lihat' :if(!file_exists ("lihat_pendaftar.php")) 
						   die ("<label class=text_merah>&nbsp;<blink><b>Error..!!</b>&nbsp; File lihat pendaftar tidak ada..!!</blink></label>"); 
							include "lihat_pendaftar.php"; 
							break;
	case 'daftar_lihat' :if(!file_exists ("tampil.php")) 
		die ("<label class=text_merah>&nbsp;<blink><b>Error..!!</b>&nbsp; File lihat pendaftar tidak ada..!!</blink></label>"); 
		include "tampil.php"; 
		break;
	
	default				   :if(!file_exists ("default.php")) 
						   die ("File  default tidak ada"); 
							include "default.php"; 
							break;
}
?>