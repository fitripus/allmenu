<?php
require_once "Excel.class.php";

$excel = new Excel();
// Send Header
$excel->setHeader('barangkadaluarsa.xls');
$excel->BOF();

$excel->writeLabel(0, 0, "Kode Barang");
$excel->writeLabel(1, 0, "J001");
$excel->writeLabel(2, 0, "D002");
$excel->writeLabel(3, 0, "V001");
$excel->writeLabel(4, 0, "P001");
$excel->writeLabel(5, 0, "S004");

$excel->writeLabel(0, 1, "Nama Barang");
$excel->writeLabel(1, 1, "Jacket");
$excel->writeLabel(2, 1, "Dresses");
$excel->writeLabel(3, 1, "Vest");
$excel->writeLabel(4, 1, "Pants");
$excel->writeLabel(5, 1, "Skirts");

$excel->writeLabel(0, 2, "Tipe Barang");
$excel->writeLabel(1, 2, "Atasan");
$excel->writeLabel(2, 2, "Terusan");
$excel->writeLabel(3, 2, "Atasan");
$excel->writeLabel(4, 2, "Bawahan");
$excel->writeLabel(5, 2, "Atasan");

$excel->writeLabel(0, 3, "Tanggal");
$excel->writeLabel(1, 3, "10-04-2014");
$excel->writeLabel(2, 3, "10-04-2014");
$excel->writeLabel(3, 3, "14-04-2014");
$excel->writeLabel(4, 3, "15-04-2014");
$excel->writeLabel(5, 3, "20-04-2014");

$excel->writeLabel(0, 4, "Costumer");
$excel->writeLabel(1, 4, "Tony Jeans");
$excel->writeLabel(2, 4, "GAP");
$excel->writeLabel(3, 4, "GAP");
$excel->writeLabel(4, 4, "Tony Jeans");
$excel->writeLabel(5, 4, "GAP");

$excel->writeLabel(0, 5, "Satuan");
$excel->writeLabel(1, 5, "200 Buah");
$excel->writeLabel(2, 5, "200 Buah");
$excel->writeLabel(3, 5, "200 Buah");
$excel->writeLabel(4, 5, "100 Buah");
$excel->writeLabel(5, 5, "50 Buah");

$excel->EOF();
exit();
?>
