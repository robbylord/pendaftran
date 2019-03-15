<html>
<head>
<title>ADMINISTRATOR PAGE </title>
<link rel="SHORTCUT ICON" href="../images/icontexto-webdev-arrow-right-128x128.png" >
<link href="style_admin.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<link href="style_admin.css" rel="stylesheet" type="text/css">

	<link href="style.css" rel="stylesheet" type="text/css">
 <body leftmargin="0" topmargin="0" onload=didi_moelyadie_ganteng_pisan_asli_subang_he_he_he_he_clock()>
		<table width="100%" border="0">
  <tr> 
    <td height="25" colspan="3" valign="middle" class="text_putih" bgcolor="#082044"><marquee direction="left" trueSpeed scrollAmount=3>
      Selamat datang user ,.. Silahkan 
      login menggunakan account yang telah terdaftar 
      </marquee></td>
  </tr>
</table>

<table width="100%" height="95%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td width="16%" valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td valign="top" align="center"><table width="96%" border="0" cellpadding="0" cellspacing="0" class="border">
        <tr>
          <td height="25"  align="center" class="judul_menu" >MENU ADMIN VIEW </td>
        </tr>
        <tr>
          <td class="row_text" align="center" ><a href="tampil.php" class="link">Data User </a></td>
        </tr>
		<tr>
          <td class="row_text" align="center" ><a href="?page=daftar_lihat" class="link">Lihat Pendaftar </a></td>
        </tr>
        <tr>
          <td class="row_text" >&nbsp;</td>
        </tr>
        <tr>
          <td class="row_text" align="center" ><b>[ <a href="logout.php" class="link">Logout</a> ]</b></td>
        </tr>
    </table>
	  </td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top" align="center" >&nbsp;</td>
      </tr>
    </table>    </td>
    <td colspan="2" valign="top" class="text_hitam">
	
				<table align=center width=98%  border=0>
                  <tr>
                    <td colspan=2 class=text_hitam align=justify>
<?php
//memulai proses hapus data

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=user_id
if(isset($_GET['id'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=user_id
	$id = $_GET['id'];
	
	//cek ke database apakah ada data login dengan user_id='$id'
	$cek = mysql_query("SELECT user_id FROM login WHERE user_id='$id'") or die(mysql_error());
	
	//jika data login tidak ada
	if(mysql_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table login dengan kondisi WHERE user_id='$id'
		$del = mysql_query("DELETE FROM login WHERE user_id='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			echo 'Data login berhasil di hapus! ';		//Pesan jika proses hapus berhasil
			echo '<a href="tampil.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
			
		}else{
			
			echo 'Gagal menghapus data! ';		//Pesan jika proses hapus gagal
			echo '<a href="tampil.php">Kembali</a>';	//membuat Link untuk kembali ke halaman beranda
		
		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>
</td>
                  </tr>
                </table>
				</td>
  </tr>
  <tr>
    <td width="16%" valign="top">&nbsp;</td>
    <td width="68%" height="20">	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="footer" align="center">Copyright&copy; 2019 - 2020 create by ayuoktariasari  <b>PENDAFTARAN ONLINE</b> 
      All rights reserved<br>
     </td>
  </tr>
</table> </td>
    <td width="16%" valign="bottom" align="right">&nbsp;</td>
  </tr>
</table>
</body>
</html>
