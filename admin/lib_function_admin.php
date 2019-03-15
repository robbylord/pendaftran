<link href="style_admin.css" rel="stylesheet" type="text/css">
<?php function login_admin() {?>
	<style type="text/css">
<!--
.style1 {font-size: 14px}
-->
    </style>
	<form method="post" action="cek_login.php">
	<table width="60%" border="0" align="center">
        <tr> 
          <td colspan="2" class="judul"><div align="center">ADMINISTRATOR LOGIN</div>
		  <h2 colspan="2" align="center" class="text_hitam">silahkan login username dan password : user</h2>
          <hr /></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr > 
          <td  class="text_hitam"valign="middle">Username </td>
          <td><input type="text" name="username" class="input" size="25"></td>
        </tr>
        <tr> 
          <td class="text_hitam" valign="middle">Password</td>
          <td><input type="password" name="password" class="input" size="25"></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td><input name="submit" type="submit" class="button" value="Login"></td>
        </tr>
        <tr> 
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr> 
          <td colspan="2" align="center" class="text_hitam">kembali ke<a href="../index.php" class="link">home</a></td>
        </tr>
      </table>
    </form>
	
	<?php } function menu_admin_view() { ?>
<table width="96%" border="0" cellpadding="0" cellspacing="0" class="border">
        <tr>
          <td height="25"  align="center" class="judul_menu" >MENU ADMIN VIEW </td>
        </tr>
        <tr>
          <td class="row_text" align="center" ><a href="tampil.php" class="link">Data User </a></td>
        </tr>
		<tr>
          <td class="row_text" align="center" ><a href="lihat_pendaftar.php" class="link">Lihat Pendaftar </a></td>
        </tr>
        <tr>
          <td class="row_text" >&nbsp;</td>
        </tr>
        <tr>
          <td class="row_text" align="center" ><b>[ <a href="logout.php" class="link">Logout</a> ]</b></td>
        </tr>
    </table>
	  <?php } function footer_admin() {?>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="footer" align="center">Copyright&copy; 2019 - 2020 create by ayuoktariasari  <b>PENDAFTARAN ONLINE</b> 
      All rights reserved<br>
     </td>
  </tr>
</table> <?php } ?>

	