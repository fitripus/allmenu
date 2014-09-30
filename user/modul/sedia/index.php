<?php
include'config/koneksi.php';

	if($_GET['form'] == null){
		$admin = mysql_query("SELECT * FROM sedia");
		echo"
		<h1>persediaan barang</h1>
		<div class='but'><a href='?page=sedia&form=add'>tambah</a></div>
		<div class='link'>
			<a href='persediaan.php'>Download Dokumen</a>
		</div>
		<table>
			<thead>
			<tr>
				<td>id</td>
				<td>kode</td>
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
				<td>$a[id_sedia]</td>
				<td>$a[kode_sedia]</td>
				<td>$a[nama_sedia]</td>
				<td>$a[tipe_sedia]</td>
				<td>$a[satuan_sedia]</td>
				<td>
					<div class='buti'>
						<a href='?page=sedia&form=edit&id=$a[id_sedia]'>edit</a>
					</div>
					<div class='buti'>
						<a href='modul/sedia/aksi.php?act=delete&id=$a[id_sedia]'>delete</a>
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
		<form method='post' action='modul/sedia/aksi.php?act=add' enctype='multipart/form-data'>
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
		$query = mysql_query("SELECT * FROM sedia WHERE id_sedia='$_GET[id]'");
		$q = mysql_fetch_array($query);
		echo"
		<form method='post' action='modul/sedia/aksi.php?act=edit' enctype='multipart/form-data'>
		<input type='hidden' name='id' value='$q[id_sedia]'>
		<p>
			<label>kode barang</label>
			<input type='text' name='kode' value='$q[kode_sedia]'>
		</p>
		<p>
			<label>nama barang</label>
			<input type='text' name='nama' value='$q[nama_sedia]'>
		</p>
		<p>
			<label>tipe</label>
			<input type='text' name='tipe' value='$q[tipe_sedia]'>
		</p>
		<p>
			<label>satuan</label>
			<input type='text' name='satuan' value='$q[satuan_sedia]'
		</p>
		<p>
			<input type='submit' value='simpan'>
		</p>
		</form>
		";
	}
?>