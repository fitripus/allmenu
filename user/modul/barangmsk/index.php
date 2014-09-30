<?php
include'config/koneksi.php';

	if($_GET['form'] == null){
		$admin = mysql_query("SELECT * FROM barangmsk");
		echo"
		<h1>barang masuk</h1>
		<div class='but'><a href='?page=barangmsk&form=add'>tambah</a></div>
		<div class='link'>
			<a href='barangmasuk.php'>Download Dokumen</a>
		</div>
		<table>
			<thead>
			<tr>
				<td>id</td>
				<td>kode barang</td>
				<td>nama barang</td>
				<td>tipe barang</td>
				<td>tanggal</td>
				<td>distributor</td>
				<td>satuan</td>
				<td>action</td>
			</tr>
			</thead>
			<tbody>
		";
		while($a = mysql_fetch_array($admin)){
		echo"
			<tr>
				<td>$a[id_barangmsk]</td>
				<td>$a[kode_barangmsk]</td>
				<td>$a[nama_barangmsk]</td>
				<td>$a[tipe_barangmsk]</td>
				<td>$a[tgl_barangmsk]</td>
				<td>$a[distributor_barangmsk]</td>
				<td>$a[satuan_barangmsk]</td>
				<td>
					<div class='buti'>
						<a href='?page=barangmsk&form=edit&id=$a[id_barangmsk]'>edit</a>
					</div>
					<div class='buti'>
						<a href='modul/barangmsk/aksi.php?act=delete&id=$a[id_barangmsk]'>delete</a>
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
		<form method='post' action='modul/barangmsk/aksi.php?act=add' enctype='multipart/form-data'>
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
				<label>distributor</label>
				<input type='text' name='distributor'>
			</p>
			<p>
				<label>satuan</label>
				<input type='text' name='satuan' placeholder='Buah/Gulung/Kg/Lembar'>
			</p>
			<p>
				<input type='submit' value='simpan'>
			</p>
		</form>
		";

	}elseif($_GET['form'] == 'edit'){
		$query = mysql_query("SELECT * FROM barangmsk WHERE id_barangmsk='$_GET[id]'");
		$q = mysql_fetch_array($query);
		echo"
		<form method='post' action='modul/barangmsk/aksi.php?act=edit' enctype='multipart/form-data'>
		<input type='hidden' name='id' value='$q[id_barangmsk]'>
		<p>
			<label>kode barang</label>
			<input type='text' name='kode' value='$q[kode_barangmsk]'>
		</p>
		<p>
			<label>nama barang</label>
			<input type='text' name='nama' value='$q[nama_barangmsk]'>
		</p>
		<p>
			<label>tipe</label>
			<input type='text' name='tipe' value='$q[tipe_barangmsk]'>
		</p>
		<p>
			<label>tanggal</label>
			<input type='text' name='tanggal' value='$q[tgl_barangmsk]'>
		</p>
		<p>
			<label>distributor</label>
			<input type='text' name='distributor' value='$q[distributor_barangmsk]'>
		</p>
		<p>
			<label>satuan</label>
			<input type='text' name='satuan' value='$q[satuan_barangmsk]'
		</p>
		<p>
			<input type='submit' value='simpan'>
		</p>
		</form>
		";
	}
	
?>