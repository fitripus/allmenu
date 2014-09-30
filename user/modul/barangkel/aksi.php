<?php
	include '../../config/koneksi.php';
	if($_GET['act']=='add'){
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];

		if($file_name == null){
			mysql_query("INSERT INTO barangkel (kode_barangkel, nama_barangkel, tipe_barangkel, tgl_barangkel, costumer_barangkel, satuan_barangkel) values('$_POST[kode]','$_POST[nama]','$_POST[tipe]','$_POST[tanggal]','$_POST[costumer]','$_POST[satuan]')");
		}else{
			move_uploaded_file($file_tmp,"../../foto/".$file_name);
			mysql_query("INSERT INTO barangkel (kode_barangkel, nama_barangkel, tipe_barangkel, tgl_barangkel, costumer_barangkel, satuan_barangkel) values('$_POST[kode]','$_POST[nama]','$_POST[tipe]','$_POST[tanggal]','$_POST[costumer]','$_POST[satuan]')");
		}

	}elseif($_GET['act']=='edit'){
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];
		if($file_name == null){
				mysql_query("UPDATE barangkel SET kode_barangkel='$_POST[kode]', nama_barangkel='$_POST[nama]', tipe_barangkel='$_POST[tipe]', tgl_barangkel='$_POST[tanggal]', costumer_barangkel='$_POST[costumer]', satuan_barangkel='$_POST[satuan]' WHERE id_barangkel='$_POST[id]'");
	
		}else{
				move_uploaded_file($file_tmp,"../../foto/".$file_name);
				mysql_query("UPDATE barangkel SET kode_barangkel='$_POST[kode]', nama_barangkel='$_POST[nama]', tipe_barangkel='$_POST[tipe]', tgl_barangkel='$_POST[tanggal]', costumer_barangkel='$_POST[costumer]', satuan_barangkel='$_POST[satuan]' WHERE id_barangkel='$_POST[id]'");
		}

	}elseif($_GET['act']=='delete'){
			mysql_query("DELETE FROM barangkel WHERE id_barangkel='$_GET[id]'");
	}
	
	header("location:../../index.php?page=barangkel");
?>