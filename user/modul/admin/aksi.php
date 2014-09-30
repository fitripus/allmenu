<?php
	include '../../config/koneksi.php';
	if($_GET['act']=='add'){
		$pass=md5($_POST['password']);
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];

		if($file_name == null){
			mysql_query("INSERT INTO admin (username_admin, password_admin, nama_admin, jabatan_admin) values('$_POST[username]','$pass','$_POST[nama]','$_POST[nama]','$_POST[jabatan]')");
		}else{
			move_uploaded_file($file_tmp,"../../foto/".$file_name);
			mysql_query("INSERT INTO admin (username_admin, password_admin, nama_admin, jabatan_admin) values('$_POST[username]','$pass','$_POST[nama]','$_POST[nama]','$_POST[jabatan]')");
		}

	}elseif($_GET['act']=='edit'){
		$pass=md5($_POST['password']);
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];
		if($file_name == null){
				mysql_query("UPDATE admin SET username_admin='$_POST[username]', password_admin='$pass', nama_admin='$_POST[nama]', jabatan_admin='$_POST[jabatan]' WHERE id_admin='$_POST[id]'");
	
		}else{
				move_uploaded_file($file_tmp,"../../foto/".$file_name);
				mysql_query("UPDATE sedia SET username_admin='$_POST[username]', password_admin='$pass', nama_admin='$_POST[nama]', jabatan_admin='$_POST[jabatan]' WHERE id_admin='$_POST[id]'");
		}

	}elseif($_GET['act']=='delete'){
			mysql_query("DELETE FROM admin WHERE id_admin='$_GET[id]'");
	}
	
	header("location:../../index.php?page=admin");
?>