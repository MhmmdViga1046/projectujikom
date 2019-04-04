<?php

  include("koneksi.php");

  mysql_query("DELETE FROM barang WHERE id_barang='$_GET[nomorurut]'") or die 
  (mysql_error());


  echo "Data Berhasil Dihapus Bang!";
  echo "<meta http-equiv='refresh' content= '1; url= barang.php'>";




?>