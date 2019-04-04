<?php
 
 include("koneksi.php");


?>

<?php

 mysql_query("INSERT INTO barang set 
 	kode_barang='$_POST[kode_barang]',
 	nama_barang='$_POST[nama_barang]',
 	jenis_barang='$_POST[jenis_barang]',
 	satuan='$_POST[satuan]',
 	stok='$_POST[stok]'")
or die(mysql_error());

 echo "Data telah disimpan";
 echo "<meta http-equiv='refresh' content= '1; url= barang.php'>";

?>