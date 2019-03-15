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
						<h2> EDIT DATA USER</h2>
	
	<p><a href="tampil.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>
	
	<?php
	//proses mengambil data ke database untuk ditampilkan di form edit berdasarkan user_id yg didapatkan dari GET id -> edit.php?id=user_id
	
	//include atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=user_id
	$id = $_GET['id'];
	
	//melakukan query ke database dg SELECT table login dengan kondisi WHERE user_id = '$id'
	$show = mysql_query("SELECT * FROM login WHERE user_id='$id'");
	
	//cek apakah data dari hasil query ada atau tidak
	if(mysql_num_rows($show) == 0){
		
		//jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
		echo '<script>window.history.back()</script>';
		
	}else{
	
		//jika data ditemukan, maka membuat variabel $data
		$data = mysql_fetch_assoc($show);	//mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
	
	}
	?>
	
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah user_id -->
		<table cellpadding="3" cellspacing="0">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $data['email']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" size="30" value="<?php echo $data['username']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="password" size="30" value="<?php echo $data['password']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jenis_kelamin" required>
						<option value="">Pilih Jenis Kelamin</option>
						<option value="Laki-laki" <?php if($data['jenis_kelamin'] == 'Laki-laki'){ echo 'selected'; } ?>>Laki-laki</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						<option value="Perempuan" <?php if($data['jenis_kelamin'] == 'Perempuan'){ echo 'selected'; } ?>>Perempuan</option>	<!-- jika data di database sama dengan value maka akan terselect/terpilih -->
						
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
					
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
