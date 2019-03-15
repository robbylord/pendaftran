<?php 
	
	include("../dbkoneksi.php"); 
	$link = koneksi_db();
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	

	$login=mysql_query("select * from login where username='$username' and password='$password'");
	$data=mysql_fetch_array($login);
	//apabila username dan password benar
	if($data['username']==$username and $data['password']==$password)
		{
			session_start(); //session dimulai
			//daftarkan variabel namauser dan passuser
			session_register("namauser","passuser");
			
			$_SESSION['namauser']=$data['username']; //Isi variable username 
			$_SESSION['passuser']=$data['password']; //Isi variable nama
			
			header("location:sukses.php");
		}
	else if (trim($username)=="") {
 		$pesan[] = "Data Username kosong";
}
	else 
	{
		header("location:gagal.php");
	}
?>
