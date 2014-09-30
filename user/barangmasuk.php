<?php
require_once "Excel.class.php";

$excel = new Excel();
// Send Header
$excel->setHeader('barangmasuk.xls');
$excel->BOF();

$excel->writeLabel(0, 0, "Kode Barang");
$excel->writeLabel(1, 0, "B001");
$excel->writeLabel(2, 0, "B002");
$excel->writeLabel(3, 0, "K001");
$excel->writeLabel(4, 0, "T001");
$excel->writeLabel(5, 0, "K003");
$excel->writeLabel(6, 0, "G001");

$excel->writeLabel(0, 1, "Nama Barang");
$excel->writeLabel(1, 1, "Benang Putih");
$excel->writeLabel(2, 1, "Benang Hitam");
$excel->writeLabel(3, 1, "Cotton Combed");
$excel->writeLabel(4, 1, "Leather");
$excel->writeLabel(5, 1, "Viscose");
$excel->writeLabel(6, 1, "Kancing");

$excel->writeLabel(0, 2, "Tipe Barang");
$excel->writeLabel(1, 2, "Benang");
$excel->writeLabel(2, 2, "Benang");
$excel->writeLabel(3, 2, "Kain");
$excel->writeLabel(4, 2, "Kulit");
$excel->writeLabel(5, 2, "Kain");
$excel->writeLabel(6, 2, "Kancing");

$excel->writeLabel(0, 3, "Tanggal");
$excel->writeLabel(1, 3, "12-03-2014");
$excel->writeLabel(2, 3, "15-03-2014");
$excel->writeLabel(3, 3, "15-04-2014");
$excel->writeLabel(4, 3, "18-04-2014");
$excel->writeLabel(5, 3, "20-04-2014");
$excel->writeLabel(6, 3, "28-04-2014");

$excel->writeLabel(0, 4, "Distributor");
$excel->writeLabel(1, 4, "PT Sandang Priangan");
$excel->writeLabel(2, 4, "PT Tunas Jaya");
$excel->writeLabel(3, 4, "Jaya Anugrah Textile");
$excel->writeLabel(4, 4, "Mitra Duta Trading");
$excel->writeLabel(5, 4, "Jaya Anugrah Textile");
$excel->writeLabel(6, 4, "PT Sandang Priangan");

$excel->writeLabel(0, 5, "Satuan");
$excel->writeLabel(1, 5, "50 Gulung");
$excel->writeLabel(2, 5, "50 Gulung");
$excel->writeLabel(3, 5, "50 Gulung");
$excel->writeLabel(4, 5, "50 Lembar");
$excel->writeLabel(5, 5, "100 Gulung");
$excel->writeLabel(6, 5, "100 Buah");

$excel->EOF();
exit();
?>
