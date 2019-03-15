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
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$email		= $_POST['email'];	//membuat variabel $email dan datanya dari inputan email
	$username	= $_POST['username'];	//membuat variabel $username dan datanya dari inputan username Lengkap
	$password	= $_POST['password'];	//membuat variabel $password dan datanya dari inputan dropdown password
	$jenis_kelamin	= $_POST['jenis_kelamin'];	//membuat variabel $jenis_kelamin dan datanya dari inputan dropdown jenis_kelamin
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE user_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE login SET email='$email', username='$username', password='$password', jenis_kelamin='$jenis_kelamin' WHERE user_id='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="tampil.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
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
