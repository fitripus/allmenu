<?php
require_once "Excel.class.php";

$excel = new Excel();
// Send Header
$excel->setHeader('persediaan.xls');
$excel->BOF();

$excel->writeLabel(0, 0, "Kode Barang");
$excel->writeLabel(1, 0, "K001");
$excel->writeLabel(2, 0, "B003");
$excel->writeLabel(3, 0, "R001");
$excel->writeLabel(4, 0, "X001");

$excel->writeLabel(0, 1, "Nama Barang");
$excel->writeLabel(1, 1, "Cotton Combed");
$excel->writeLabel(2, 1, "Benang Katun");
$excel->writeLabel(3, 1, "Resleting");
$excel->writeLabel(4, 1, "Kancing");

$excel->writeLabel(0, 2, "Tipe Barang");
$excel->writeLabel(1, 2, "Kain");
$excel->writeLabel(2, 2, "Benang");
$excel->writeLabel(3, 2, "Resleting");
$excel->writeLabel(4, 2, "Kancing");

$excel->writeLabel(0, 3, "Satuan");
$excel->writeLabel(1, 3, "100 Gulung");
$excel->writeLabel(2, 3, "50 Gulung");
$excel->writeLabel(3, 3, "10 Gulung");
$excel->writeLabel(4, 3, "100 Buah");

$excel->EOF();
exit();
?>
