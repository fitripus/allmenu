<?php
include'config/koneksi.php';

	if($_GET['form'] == null){
		$admin = mysql_query("SELECT * FROM barangkel");
		echo"
		<h1>barang keluar</h1>
		<div class='but'><a href='?page=barangkel&form=add'>tambah</a></div>
		<div class='link'>
			<a href='barangkeluar.php'>Download Dokumen</a>
		</div>
		<table>
			<thead>
			<tr>
				<td>id</td>
				<td>kode barang</td>
				<td>nama barang</td>
				<td>tipe barang</td>
				<td>tanggal</td>
				<td>costumer</td>
				<td>satuan</td>
				<td>action</td>
			</tr>
			</thead>
			<tbody>
		";
		while($a = mysql_fetch_array($admin)){
		echo"
			<tr>
				<td>$a[id_barangkel]</td>
				<td>$a[kode_barangkel]</td>
				<td>$a[nama_barangkel]</td>
				<td>$a[tipe_barangkel]</td>
				<td>$a[tgl_barangkel]</td>
				<td>$a[costumer_barangkel]</td>
				<td>$a[satuan_barangkel]</td>
				<td>
					<div class='buti'>
						<a href='?page=barangkel&form=edit&id=$a[id_barangkel]'>edit</a>
					</div>
					<div class='buti'>
						<a href='modul/barangkel/aksi.php?act=delete&id=$a[id_barangkel]'>delete</a>
					</div>
				</td>
			</tr>
		";
		}
		echo"
		</tbody>
		</table>
		";
	}elseif($_GET['form'] == 'add'){
		echo"
		<form method='post' action='modul/barangkel/aksi.php?act=add' enctype='multipart/form-data'>
			<p>
				<label>kode barang</label>
				<input type='text' name='kode' placeholder='ex : A005'>
			</p>
			<p>
				<label>nama barang</label>
				<input type='text' name='nama'>
			</p>
			<p>
				<label>tipe barang</label>
				<input type='text' name='tipe'>
			</p>
			<p>
				<label>tanggal</label>
				<input type='text' name='tanggal' placeholder='DD-MM-YYYY'>
			</p>
			<p>
				<label>costumer</label>
				<input type='text' name='costumer'>
			</p>
			<p>
				<label>satuan</label>
				<input type='text' name='satuan' placeholder='Gulung/Buah/Lembar'>
			</p>
			<p>
				<input type='submit' value='simpan'>
			</p>
		</form>
		";

	}elseif($_GET['form'] == 'edit'){
		$query = mysql_query("SELECT * FROM barangkel WHERE id_barangkel='$_GET[id]'");
		$q = mysql_fetch_array($query);
		echo"
		<form method='post' action='modul/barangkel/aksi.php?act=edit' enctype='multipart/form-data'>
		<input type='hidden' name='id' value='$q[id_barangkel]'>
		<p>
			<label>kode barang</label>
			<input type='text' name='kode' value='$q[kode_barangkel]'>
		</p>
		<p>
			<label>nama barang</label>
			<input type='text' name='nama' value='$q[nama_barangkel]'>
		</p>
		<p>
			<label>tipe</label>
			<input type='text' name='tipe' value='$q[tipe_barangkel]'>
		</p>
		<p>
			<label>tanggal</label>
			<input type='text' name='tanggal' value='$q[tgl_barangkel]'>
		</p>
		<p>
			<label>costumer</label>
			<input type='text' name='costumer' value='$q[costumer_barangkel]'>
		</p>
		<p>
			<label>satuan</label>
			<input type='text' name='satuan' value='$q[satuan_barangkel]'
		</p>
		<p>
			<input type='submit' value='simpan'>
		</p>
		</form>
		";
	}
?>