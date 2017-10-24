<?php
require_once'penjumlahan.php';
echo "panjang =10"."<br>";
echo "alas =5"."<br>";
  $penjumlahan = new luassegitiga;
  $penjumlahan ->set_luassegitiga(0.5,10,5);
  echo "luassegitiga = "
  .$penjumlahan->get_luassegitiga();
  echo "<br>";
  ?>