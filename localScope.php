<?php 
// local scope variable

/* 
Variable local scope adalah  variable yang hanya bisa diakses di dalam daripada function dan tidak bisa digunakan di luar seperti global

*/

function myTest() {
  $x = 5;

  echo "variable x diambil di dalam function, hasil = $x";
}

myTest();

echo "variable x diambil di luar function, hasil = $x"
?>