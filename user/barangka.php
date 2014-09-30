<?php
require_once "Excel.class.php";

$excel = new Excel();
// Send Header
$excel->setHeader('barangkadaluarsa.xls');
$excel->BOF();

$excel->writeLabel(0, 0, "Kode Barang");
$excel->writeLabel(1, 0, "K001");
$excel->writeLabel(0, 1, "Nama Barang");
$excel->writeLabel(1, 1, "Cotton Combed");
$excel->writeLabel(0, 2, "Tipe Barang");
$excel->writeLabel(1, 2, "Kain");
$excel->writeLabel(0, 3, "Satuan");
$excel->writeLabel(1, 3, "100 Gulung");

$excel->EOF();
exit();
?>
