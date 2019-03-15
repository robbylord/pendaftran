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
          <td class="row_text" align="center" ><a href="../lihat_pendaftar.php" class="link">Lihat Pendaftar </a></td>
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
						<h2>DATA MEMBER</h2>
					
	
	
	<table cellpadding="5" cellspacing="0" border="1">
		<tr bgcolor="#CCCCCC">
			<th>No.</th>
			<th>Member</th>
			<th>Nama Lengkap</th>
			<th>Jenis Kelamin</th>
			<th>status</th>
			<th>Tempat tanggal Lahir</th>
			<th>Tanggal Lahir</th>
			<th>No identitas</th>
			<th>alamat</th>
			<th>kota</th>
			<th>Propinsi</th>
			<th>kode pos</th>
			<th>pekerjaan</th>
			<th>no telepon</th>
			
		</tr>
		
		<?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table login diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM daftar ORDER BY no_pendaftaran DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['member'].'</td>';	//menampilkan data email dari database
					echo '<td>'.$data['nama_lengkap'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['jk'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['status'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['tempat_lahir'].'</td>';	//menampilkan data jenis_kelamin dari database
					echo '<td>'.$data['tanggal_lahir'].'</td>';	//menampilkan data email dari database
					echo '<td>'.$data['no_identitas'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['alamat'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['kota'].'</td>';	//menampilkan data jenis_kelamin dari database
					echo '<td>'.$data['propinsi'].'</td>';	//menampilkan data jenis_kelamin dari database
					echo '<td>'.$data['kodepos'].'</td>';	//menampilkan data email dari database
					echo '<td>'.$data['pekerjaan'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['telepon'].'</td>';	//menampilkan data kelas dari database
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
	</table>
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
