<?php
	include'config/koneksi.php';
?>
<?php
$nama=$_POST['name'];
$query="SELECT * FROM barangmsk where nama_barangmsk like '%$nama_barangmsk%'";
$hasil=mysql_query($query);
echo"<center>";
echo"<h2>Hasil Pencarian</h2>";
echo"<table border='1' cellpadding='5'>";
echo"<tr bgcolor='#556B2F'><th>id</th><th><th>Kode Barang</th><th>Nama Barang</th><th>Tipe Barang</th><th>Tanggal</td>
<th>Distributor</th><th>satuan</th><th>hobi</th><th>Tgl Daftar</th><th>Aksi</th></tr>";
while($data=mysql_fetch_array($hasil)){
    echo"<tr><td>".$data['id']."</td>
        <td>".$data['kode']."</td>
        <td>".$data['nama']."</td>
        <td>".$data['tanggalLahir']."</td>
        <td align='center'>".$data['sex']."</td>
        <td>".$data['alamat']."</td>
        <td>".$data['hobi']."</td>
        <td>".$data['tglDaftar']."</td>
<td>| <a href='pendaftaran.php'><input type='submit' value='Tambah'></a> |
         <a href='edit.php?id_data=" .$data['id'] . "'><input type='submit' value='Edit'></a> |
        <a href='delete.php?id_data=" .$data['id'] . "'><input type='submit' value='Hapus'></a> |</td></tr>";
}
echo"</table>";
?>
<br>
    <body><a href='pencarian.php'><input type='submit' value='Kembali'></a></body>