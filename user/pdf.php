<?php
require_once 'index.php?page=barangka';
 
#koneksi ke mysql
$mysqli = new mysqli("localhost","root",'qwerty','demo');
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_error . ') ');
}
#akhir koneksi
 
#ambil data
$query = 'SELECT kode, nama, tipe, satuan FROM barangka';
$sql = $mysqli->query($query);
$arrmhs = array();
while ($row = $sql->fetch_assoc()) {
	array_push($arrmhs, $row);
}
#akhir data
 
$excel = new Excel();
#Send Header
$excel->setHeader('contoh-1.xls');
$excel->BOF();
?>