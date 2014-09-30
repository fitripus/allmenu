<?php
	include'config/koneksi.php';
	$name= $_POST['name']; //get the nama value from form
	$q = "SELECT * from barangmsk where name like '%$nama_barangmsk%' "; //query to get the search result
	$result = mysql_query($q); //execute the query $q
				$query = mysql_query("SELECT * FROM barangmsk WHERE nama_barangmsk LIKE  '%$_POST[cari]%' LIMIT 6");
				while($q = mysql_fetch_array($query)){
					echo"
						<div class='lain'>
						<li>
							<a href='hasil.php?id=$q[id_barangmsk]'>$q[nama_barangmsk] </a>";
							echo"
						</li>
						</div>
					";
				}
	echo "</table>";
?>