<?php session_start(); 
	if (isset($_SESSION['namauser']) and ($_SESSION['passuser'])) {
?>
<html>
<head>
<title>ADMINISTRATOR PAGE </title>
<link rel="SHORTCUT ICON" href="../images/icontexto-webdev-arrow-right-128x128.png" >
<link href="style_admin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php 
	include("lib_function_admin.php");
	include("../lib_function.php");
	include("../dbkoneksi.php"); 
?>
<body leftmargin="0" topmargin="0" onload=didi_moelyadie_ganteng_pisan_asli_subang_he_he_he_he_clock()>
<?php 	$link = koneksi_db();

		$namauser=$_SESSION['namauser'];
		$passuser=$_SESSION['passuser'];
		
		$res = mysql_query("select * from login where username='$namauser' and password='$userpass'");
		$data = mysql_fetch_array($res);
		if (!$res)
			die ("Error : ".mysql_error());
		?>
		<table width="100%" border="0">
  <tr> 
    <td height="25" colspan="3" valign="middle" class="text_putih" bgcolor="#082044"><marquee direction="left" trueSpeed scrollAmount=3>
      Selamat datang user ,.. Silahkan 
      login menggunakan account yang telah terdaftar 
      </marquee></td>
  </tr>
</table>

<tabhle width="100%" height="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="16%" valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top" align="center"><?php menu_admin_view();?></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top" align="center" >&nbsp;</td>
      </tr>
    </table>    </td>
    <td colspan="2" valign="top" class="text_hitam"><?php include "buka_file.php"; ?></td>
  </tr>
  <tr>
    <td width="16%" valign="top">&nbsp;</td>
    <td width="68%" height="20"><?php footer_admin(); ?></td>
    <td width="16%" valign="bottom" align="right">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php  
} 
	else {
		header ('Location: index_admin_gagal.php');
		exit();
		}
?>