<?php 
			$link = koneksi_db();	
		
		echo "<table width=99% border=0 cellpadding=0 cellspacing=0 class=border>
  					<tr align=center> 
    					<td height=22 colspan=2 class=judul_menu ><b>PENDAFTARAN SUKSES</b></td>
  					</tr>
  					<tr class=text_hitam2> 
   						<td height=22 colspan=2 bgcolor='#FFCC66' class=text_hitam2 ><br><label class=text_biru><blink><b>Selamat</b>....!!</blink></label> 
							Pendaftaran sukses, 
      						pendaftar dengan nama $nama_lengkap  telah terdaftar.  <br><br></td>
  					</tr>
  					<tr align=center> 
    					<td height=25 colspan=2 class=judul_menu  ><b>DETAIL DATA MEMBER</b></td>
  					</tr>
					<tr> 
    					<td class=text_hitam2>&nbsp; </td>
    					<td class=text_hitam2>&nbsp;</td>
  					</tr>
					<tr> 
    					<td height=20 colspan=2 class=subjudul>&nbsp;&nbsp;<b>Tipe Member</b></td>
  					</tr>
					<tr > 
    					<td width=20% class=text_hitam2>Tipe Member </td>
    					<td width=80% class=text_hitam2>: $tipe_member</td>
  					</tr>
  					<tr> 
    					<td class=text_hitam2>&nbsp;</td>
    					<td class=text_hitam2>&nbsp;</td>
  					</tr>
  					<tr> 
    					<td height=20 colspan=2 class=subjudul >&nbsp;&nbsp;<b>Data Pribadi</b></td>
  					</tr>
  					
					
  					<tr > 
    					<td class=text_hitam2>Nama Lengkap </td>
    					<td class=text_hitam2>: $nama_lengkap</td>
  					</tr>
  					<tr > 
    					<td class=text_hitam2>Jenis Kelamin</td>
    					<td class=text_hitam2>: $jk</td>
  					</tr>
  					<tr > 
    					<td class=text_hitam2>Status</td>
    					<td class=text_hitam2>: $status</td>
  					</tr>
  					<tr > 
    					<td class=text_hitam2>Tempat Tanggal Lahir </td>
    					<td class=text_hitam2>: $tempat_lahir $tanggal $bulan $tahun</td>
  					</tr>
					<tr> 
    					<td class=text_hitam2>No Identitas</td>
    					<td class=text_hitam2>: $no_identitas</td>
  					</tr>
					
					
  					<tr> 
    					<td class=text_hitam2>Pekerjaan</td>
    					<td class=text_hitam2>: $pekerjaan</td>
  					</tr>
					<tr> 
    					<td class=text_hitam2>&nbsp;</td>
    					<td class=text_hitam2>&nbsp;</td>
  					</tr>
  					<tr> 
    					<td height=20 colspan=2 class=subjudul>&nbsp;&nbsp;<b>Data Alamat MEMBER</b></td>
  					</tr>
									
  					<tr> 
    					<td class=text_hitam2>Alamat Lengkap</td>
    					<td class=text_hitam2>: $alamat</td>
  					</tr>
					<tr> 
    					<td class=text_hitam2>kota</td>
    					<td class=text_hitam2>: $kota</td>
  					</tr>  
					<tr> 
    					<td class=text_hitam2>Propinsi</td>
    					<td class=text_hitam2>: $propinsi</td>
  					</tr>
					<tr> 
    					<td class=text_hitam2>Kodepos</td>
    					<td class=text_hitam2>: $kodepos</td>
  					</tr>
					<tr> 
    					<td class=text_hitam2>&nbsp;</td>
    					<td class=text_hitam2>&nbsp;</td>
  					</tr>
  					<tr> 
    					<td height=20 colspan=2 class=subjudul>&nbsp;&nbsp;<b>Data No Kontak</b></td>
  					</tr>
  					<tr> 
    					<td class=text_hitam2>Phone</td>
    					<td class=text_hitam2>: $telepon </td>
  					</tr>
					<tr> 
    					<td class=text_hitam2>&nbsp;</td>
    					<td class=text_hitam2>&nbsp;</td>
  					</tr>
  					
					
  					
					<tr> 
    					<td class=text_hitam2>&nbsp; </td>
    					<td class=text_hitam2>&nbsp;</td>
  					</tr>
					</table>
				";				
	
?>