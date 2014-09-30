<?php
include'config/koneksi.php';

	if($_GET['form'] == null){
		$admin = mysql_query("SELECT * FROM admin");
		echo"
		<h1>user</h1>
		<div class='but'><a href='?page=admin&form=add'>registrasi</a></div>
		<table>
			<thead>
			<tr>
				<td>no</td>
				<td>username</td>
				<td>password</td>
				<td>nama</td>
				<td>jabatan</td>
				<td>action</td>
			</tr>
			</thead>
			<tbody>
		";
		while($a = mysql_fetch_array($admin)){
		echo"
			<tr>
				<td>$a[id_admin]</td>
				<td>$a[username_admin]</td>
				<td>$a[password_admin]</td>
				<td>$a[nama_admin]</td>
				<td>$a[jabatan_admin]</td>
				<td>
					<div class='buti'>
						<a href='?page=admin&form=edit&id=$a[id_admin]'>edit</a>
					</div>
					<div class='buti'>
						<a href='modul/admin/aksi.php?act=delete&id=$a[id_admin]'>delete</a>
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
		<form method='post' action='modul/admin/aksi.php?act=add' enctype='multipart/form-data'>
			<p>
				<label>username</label>
				<input type='text' name='username'>
			</p>
			<p>
				<label>password</label>
				<input type='password' name='password'>
			</p>
			<p>
				<label>nama</label>
				<input type='text' name='nama' placeholder='nama lengkap'>
			</p>
			<p>
				<label>jabatan</label>
				<input type='text' name='jabatan'>
			</p>
			<p>
				<input type='submit' value='simpan'>
			</p>
		</form>
		";

	}elseif($_GET['form'] == 'edit'){
		$query = mysql_query("SELECT * FROM admin WHERE id_admin='$_GET[id]'");
		$q = mysql_fetch_array($query);
		echo"
		<form method='post' action='modul/admin/aksi.php?act=edit' enctype='multipart/form-data'>
		<input type='hidden' name='id' value='$q[id_admin]'>
			<p>
				<label>username</label>
				<input type='text' name='username' value='$q[username_admin]' readonly>
			</p>
			<p>
				<label>password</label>
				<input type='password' name='password' placeholder='ketik untuk edit'>
			</p>
			<p>
				<label>nama</label>
				<input type='text' name='nama' value='$q[nama_admin]'>
			</p>
			<p>
				<label>jabatan</label>
				<input type='text' name='jabatan' value='$q[jabatan_admin]'>
			</p>
			<p>
				<input type='submit' value='simpan'>
			</p>
		</form>
		";
	}
?>