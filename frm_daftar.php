	<?php 
			
		echo "<form method=post action=?page=action_daftar enctype=multipart/form-data>
					<table align=center width=98% cellpadding=5 cellspacing=5 border=0>
			
			<tr>
			<td>
				<table width=98% border=0  cellspacing=0 cellpadding=0>
  					<tr>
    					<td colspan=2 class=judul_menu><b>PENDAFTARAN MEMBER</td>
  					</tr>
					<tr>
    					<td colspan=2>&nbsp;</td>
  					</tr>
					<tr>
    					<td class=text_hitam>Tipe Member<font color='red'>*</font></td>
    					<td>
							<select name=tipe_member class=input>
							<option  selected class=text_hitam >";
							//tampilkan nama2 kategori pada combo box
							include "dbkoneksi.php";
							$link = koneksi_db();
					
							$tampil=mysql_query("select * from member order by id_member");
							while($data=mysql_fetch_array($tampil))
							{
								echo"<option value=$data[tipe] class=text_hitam>$data[tipe]";
							}
								echo "</option></select>
						</td>
  					</tr>
					<tr>
    					<td class=text_hitam>&nbsp;</td>
    					<td>&nbsp;</td>
  					</tr>
  					<tr>
    					<td  class=text_hitam>Nama Lengkap<font color='red'>*</font></td>
    					<td ><input type=text name=nama_lengkap size=40 class=input  ></td>
  					</tr>
  					<tr>
    					<td class=text_hitam>Jenis Kelamin</td>
    					<td class=text_hitam><input name=jk type=radio value=pria class=input  checked='checked'  />
      						Pria&nbsp;
      						<input name=jk type=radio class=input value=wanita >
      						Wanita </td>
  					</tr>
					<tr>
    					<td class=text_hitam>Status</td>
    					<td class=text_hitam><input name=status type=radio value='Belum Menikah' class=input checked='checked' />
      						Belum Menikah&nbsp;
      						<input name=status type=radio class=input value=Menikah  >
      						Menikah&nbsp; 
							<input name=status type=radio class=input value='Pernah Menikah'  >
      						Pernah Menikah&nbsp;
						</td>
  					</tr>
					<tr>
    					<td class=text_hitam>Tempat Lahir<font color='red'>*</font></td>
    					<td><input type=text name=tempat_lahir size=20 class=input /></td>
  					</tr>
  					<tr>
    					<td class=text_hitam>Tanggal Lahir</td>
    					<td><select name='tanggal' class=input>";
      						for($i=1; $i<=31; $i++) 
								echo  "<option > $i </option>";
   	 							echo "</select>
								
	 						<select name='bulan' class=input>";
      						
								echo  "<option >Januari</option>
										<option >Februari</option>
										<option >Maret</option>
										<option >April</option>
										<option >Mei</option>
										<option >Juni</option>
										<option >Juli</option>
										<option >Agustus</option>
										<option >September</option>
										<option >Oktober</option>
										<option >November</option>
										<option >Desember</option>";
   							 	echo "</select>
	 						
							<select name='tahun' class=input>";
      						for($i=1960; $i<=2009; $i++) 
								echo  "<option > $i </option>";
   	 							echo "</select>
       					</td>
  					</tr>
  					
  					
					<tr>
    					<td class=text_hitam>Nomor Identitas<font color='red'>*</font></td>
    					<td><input type=text name=no_identitas size=30 class=input /></td>
  					</tr>
					<tr>
    					<td class=text_hitam valign=top>Alamat Lengkap<font color='red'>*</font></td>
    					<td><textarea name=alamat cols=27 rows=3 class=input></textarea></td>
  					</tr>
					<tr>
    					<td class=text_hitam>Kota<font color='red'>*</font></td>
    					<td><input type=text name=kota size=20 class=input /></td>
  					</tr>
					<tr>
    					<td class=text_hitam>Propinsi<font color='red'>*</font></td>
    					<td><select name=propinsi class=input>
							<option  selected class=text_hitam >";
							//tampilkan nama2 kategori pada combo box
							
							$link = koneksi_db();
					
							$tampil=mysql_query("select * from t_provinsi");
							while($data=mysql_fetch_array($tampil))
							{
								echo"<option value='$data[nama]' class=text_hitam>$data[nama]";
							}
								echo "</option></select></td>
  					</tr>
					<tr>
    					<td class=text_hitam>Kodepos<font color='red'>*</font></td>
    					<td><input type=text name=kodepos size=7 maxlength=5 class=input /></td>
  					</tr>
					<tr>
    					<td class=text_hitam>Pekerjaan</td>
    					<td><input type=text name=pekerjaan size=40 class=input /></td>
  					</tr>
					<tr>
    					<td class=text_hitam>&nbsp;</td>
    					<td>&nbsp;</td>
  					</tr>
					<tr>
    					<td class=text_hitam>Phone<font color='red'>*</font></td>
    					<td><input type=text name=telepon size=20 class=input /></td>
  					</tr>			
  					
  					<tr>
    					<td class=text_hitam>&nbsp;</td>
    					<td>&nbsp;</td>
  					</tr>
  					
 				 	<tr>
    					<td>&nbsp;</td>
    					<td><input type=submit name=submit class=button value=Kirim />
        					<input  type=reset name=btn_batal class=button value=Hapus /></td>
  					</tr>
					<tr>
    					<td class=text_hitam>&nbsp;</td>
    					<td>&nbsp;</td>
  					</tr>
					<tr>
    					<td colspan=2 class=text_hitam>&nbsp;</td>
    				
  					</tr>
  					
  					</tr>				
				</table>
		  	</td>
			</tr></table>
			  </form>";	
			  			
	
?>