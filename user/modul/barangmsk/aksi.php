<?php
	include '../../config/koneksi.php';
	if($_GET['act']=='add'){
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];

		if($file_name == null){
			mysql_query("INSERT INTO barangmsk (kode_barangmsk, nama_barangmsk, tipe_barangmsk, tgl_barangmsk, distributor_barangmsk, satuan_barangmsk) values('$_POST[kode]','$_POST[nama]','$_POST[tipe]','$_POST[tanggal]','$_POST[distributor]','$_POST[satuan]')");
		}else{
			move_uploaded_file($file_tmp,"../../foto/".$file_name);
			mysql_query("INSERT INTO barangmsk (kode_barangmsk, nama_barangmsk, tipe_barangmsk, tgl_barangmsk, distributor_barangmsk, satuan_barangmsk) values('$_POST[kode]','$_POST[nama]','$_POST[tipe]','$_POST[tanggal]','$_POST[distributor]','$_POST[satuan]','$file_name')");
		}

	}elseif($_GET['act']=='edit'){
		$file_name = $_FILES['gambar']['name'];
		$file_tmp = $_FILES['gambar']['tmp_name'];
		if($file_name == null){
				mysql_query("UPDATE barangmsk SET kode_barangmsk='$_POST[kode]', nama_barangmsk='$_POST[nama]', tipe_barangmsk='$_POST[tipe]', tgl_barangmsk='$_POST[tanggal]', distributor_barangmsk='$_POST[distributor]', satuan_barangmsk='$_POST[satuan]' WHERE id_barangmsk='$_POST[id]'");
	
		}else{
				move_uploaded_file($file_tmp,"../../foto/".$file_name);
				mysql_query("UPDATE barangmsk SET kode_barangmsk='$_POST[kode]', nama_barangmsk='$_POST[nama]', tipe_barangmsk='$_POST[tipe]', tgl_barangmsk='$_POST[tanggal]', distributor_barangmsk='$_POST[distributor]', satuan_barangmsk='$_POST[satuan]' WHERE id_barangmsk='$_POST[id]'");
		}

	}elseif($_GET['act']=='delete'){
			mysql_query("DELETE FROM barangmsk WHERE id_barangmsk='$_GET[id]'");
	}
	
	header("location:../../index.php?page=barangmsk");
?>