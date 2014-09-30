<?php
$hal=$_GET['page'];
if ($hal==null){
		echo"Inventory Tainan Enterprises";
	}
	elseif($hal=='admin')
	{
		include 'modul/admin/index.php';
	}
	elseif($hal=='barangmsk')
	{
		include 'modul/barangmsk/index.php';
	}
	elseif($hal=='barangkel')
	{
		include 'modul/barangkel/index.php';
	}
	elseif($hal=='barangka')
	{
		include 'modul/barangka/index.php';
	}
	elseif($hal=='sedia')
	{
		include 'modul/sedia/index.php';
	}
	elseif($hal=='cari')
	{
		include 'modul/cari/cari.php';
	}

?>