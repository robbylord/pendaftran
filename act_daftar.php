<?php 

	if ($_GET['page']=="action_daftar") {		
		
		if (trim($_POST['tipe_member'])=="") {
			$pesan[] = "Data Tipe member belum di pilih";
			}	
		if (trim($_POST['nama_lengkap']) =="") {
			$pesan[] = "Data nama masih kosong";
			}
		if (trim($_POST['tempat_lahir']) =="") {
			$pesan[] = "Data tempat lahir masih kosong";
			}
		if (trim($_POST['no_identitas']) =="") {
			$pesan[] = "Data nomor identitas belum di isi";
			}
		if (trim($_POST['alamat']) =="") {
			$pesan[] = "Data alamat belum di isi";
			}
		if (trim($_POST['kota']) =="") {
			$pesan[] = "Data kota belum di isi";
			}
		if (trim($_POST['propinsi']) =="") {
			$pesan[] = "Data propinsi belum di pilih";
			}
		if (trim($_POST['kodepos']) =="") {
			$pesan[] = "Data kodepos belum di isi";
			}
		if (trim($_POST['telepon']) =="") {
			$pesan[] = "Data nomor telepon belum di isi";
			}
			

		if (! count($pesan)==0 ) {
		// Variabel data dibaca 
		
			$tipe_member		= $_POST['tipe_member'];
			$nama_lengkap		= $_POST['nama_lengkap'];
			$tempat_lahir		= $_POST['tempat_lahir'];
			$no_identitas		= $_POST['no_identitas'];
			$alamat				= $_POST['alamat'];
			$kota				= $_POST['kota'];	
			$propinsi			= $_POST['propinsi'];	
			$kodepos			= $_POST['kodepos'];		
			$telepon			= $_POST['telepon'];	
			
			
			

		

	// Form Kembali Tampil saat Gagal
		include "frm_daftar.php";		
		
		echo " <b><label class=text_hitam>&nbsp; &nbsp; Kesalahan Input : </label></b><br>";
		foreach ($pesan as $indeks=>$pesan_tampil) {
			$urut_pesan++;
			
			echo "&nbsp;&nbsp;&nbsp; &nbsp;";
			echo "<label class=text_merah>$urut_pesan. $pesan_tampil </label><br>";			
		}}
		
	else {		
				include "dbkoneksi.php";
				$link = koneksi_db();
				
				$tipe_member		= $_POST['tipe_member'];
				$nama_lengkap		= $_POST['nama_lengkap'];
				$jk					= $_POST['jk'];
				$status				= $_POST['status'];
				$tempat_lahir		= $_POST['tempat_lahir'];
				$tanggal			= $_POST['tanggal'];
				$bulan				= $_POST['bulan'];
				$tahun				= $_POST['tahun'];
				$no_identitas		= $_POST['no_identitas'];
				$alamat				= $_POST['alamat'];
				$kota				= $_POST['kota'];
				$propinsi			= $_POST['propinsi'];
				$kodepos			= $_POST['kodepos'];
				$pekerjaan			= $_POST['pekerjaan'];
				$telepon			= $_POST['telepon'];
				
				
				$input=mysql_query("insert into daftar (member, 
														nama_lengkap,
														jk,
														status,
														tempat_lahir,
														tanggal_lahir,
														no_identitas,
														alamat,
														kota,
														propinsi,
														kodepos,
														pekerjaan,
														telepon 
												  		)
										   values ('$tipe_member',
										   		   '$nama_lengkap',
												   '$jk',
												   '$status',
												   '$tempat_lahir',
												   '$tanggal $bulan $tahun',
												   '$no_identitas',
												   '$alamat',
												   '$kota',
												   '$propinsi',
												   '$kodepos',
												   '$pekerjaan',
												   '$telepon'
										   		   )");
				
				if($input) 
				{		
					include "berhasil.php";
				}
		
		
		
}
		}
		
	?>