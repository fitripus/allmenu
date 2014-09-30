<?php
include'config/koneksi.php';

	if($_GET['form'] == null){
		$admin = mysql_query("SELECT * FROM barangka");
		echo"
		<h1>barang kadaluarsa</h1>
		<div class='but'>
			<a href='?page=barangka&form=add'>tambah</a>
		</div>
		<div class='link'>
			<a href='barangka.php'>Download Dokumen</a>
		</div>
		<table>
			<thead>
			<tr>
				<td>id</td>
				<td>kode barang</td>
				<td>nama barang</td>
				<td>tipe barang</td>
				<td>satuan</td>
				<td>action</td>
			</tr>
			</thead>
			<tbody>
		";
		while($a = mysql_fetch_array($admin)){
		echo"
			<tr>
				<td>$a[id_barangka]</td>
				<td>$a[kode_barangka]</td>
				<td>$a[nama_barangka]</td>
				<td>$a[tipe_barangka]</td>
				<td>$a[satuan_barangka]</td>
				<td>
					<div class='buti'>
						<a href='?page=barangka&form=edit&id=$a[id_barangka]'>edit</a>
					</div>
					<div class='buti'>
						<a href='modul/barangka/aksi.php?act=delete&id=$a[id_barangka]'>delete</a>
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
		<form method='post' action='modul/barangka/aksi.php?act=add' enctype='multipart/form-data'>
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
				<label>satuan</label>
				<input type='text' name='satuan' placeholder='Gulung/Buah/Lembar'>
			</p>
			<p>
				<input type='submit' value='simpan'>
			</p>
		</form>
		";

	}elseif($_GET['form'] == 'edit'){
		$query = mysql_query("SELECT * FROM barangka WHERE id_barangka='$_GET[id]'");
		$q = mysql_fetch_array($query);
		echo"
		<form method='post' action='modul/barangka/aksi.php?act=edit' enctype='multipart/form-data'>
		<input type='hidden' name='id' value='$q[id_barangka]'>
		<p>
			<label>kode barang</label>
			<input type='text' name='kode' value='$q[kode_barangka]'>
		</p>
		<p>
			<label>nama barang</label>
			<input type='text' name='nama' value='$q[nama_barangka]'>
		</p>
		<p>
			<label>tipe</label>
			<input type='text' name='tipe' value='$q[tipe_barangka]'>
		</p>
		<p>
			<label>satuan</label>
			<input type='text' name='satuan' value='$q[satuan_barangka]'
		</p>
		<p>
			<input type='submit' value='simpan'>
		</p>
		</form>
		";
	}
?>