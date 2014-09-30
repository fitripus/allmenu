<?php
	include '../../config/koneksi.php';
	if($_GET['act']=='add'){
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];

		if($file_name == null){
			mysql_query("INSERT INTO barangka (kode_barangka, nama_barangka, tipe_barangka, satuan_barangka) values('$_POST[kode]','$_POST[nama]','$_POST[tipe]','$_POST[satuan]')");
		}else{
			move_uploaded_file($file_tmp,"../../foto/".$file_name);
			mysql_query("INSERT INTO barangka (kode_barangka, nama_barangka, tipe_barangka, satuan_barangka, gambar_resep) values('$_POST[kode]','$_POST[nama]','$_POST[tipe]','$_POST[satuan]')");
		}

	}elseif($_GET['act']=='edit'){
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];
		if($file_name == null){
				mysql_query("UPDATE barangka SET kode_barangka='$_POST[kode]', nama_barangka='$_POST[nama]', tipe_barangka='$_POST[tipe]', satuan_barangka='$_POST[satuan]' WHERE id_barangka='$_POST[id]'");
	
		}else{
				move_uploaded_file($file_tmp,"../../foto/".$file_name);
				mysql_query("UPDATE barangka SET kode_barangka='$_POST[kode]', nama_barangka='$_POST[nama]', tipe_barangka='$_POST[tipe]', satuan_barangka='$_POST[satuan]' WHERE id_barangka='$_POST[id]'");
		}

	}elseif($_GET['act']=='delete'){
			mysql_query("DELETE FROM barangka WHERE id_barangka='$_GET[id]'");
	}
	
	header("location:../../index.php?page=barangka");
?>