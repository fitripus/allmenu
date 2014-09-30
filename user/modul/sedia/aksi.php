<?php
	include '../../config/koneksi.php';
	if($_GET['act']=='add'){
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];

		if($file_name == null){
			mysql_query("INSERT INTO sedia (kode_sedia, nama_sedia, tipe_sedia, satuan_sedia) values('$_POST[kode]','$_POST[nama]','$_POST[tipe]','$_POST[satuan]')");
		}else{
			move_uploaded_file($file_tmp,"../../foto/".$file_name);
			mysql_query("INSERT INTO sedia (kode_sedia, nama_sedia, tipe_sedia, satuan_sedia) values('$_POST[kode]','$_POST[nama]','$_POST[tipe]','$_POST[satuan]')");
		}

	}elseif($_GET['act']=='edit'){
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];
		if($file_name == null){
				mysql_query("UPDATE sedia SET kode_sedia='$_POST[kode]', nama_sedia='$_POST[nama]', tipe_sedia='$_POST[tipe]', satuan_sedia='$_POST[satuan]' WHERE id_sedia='$_POST[id]'");
	
		}else{
				move_uploaded_file($file_tmp,"../../foto/".$file_name);
				mysql_query("UPDATE sedia SET kode_sedia='$_POST[kode]', nama_sedia='$_POST[nama]', tipe_sedia='$_POST[tipe]', satuan_sedia='$_POST[satuan]' WHERE id_sedia='$_POST[id]'");
		}

	}elseif($_GET['act']=='delete'){
			mysql_query("DELETE FROM sedia WHERE id_sedia='$_GET[id]'");
	}
	
	header("location:../../index.php?page=sedia");
?>