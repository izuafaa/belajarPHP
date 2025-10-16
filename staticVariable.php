<?php 
// static variable

/*
saat kita mendeklarasikan variable di dalam funtion, setelah fungsi di jalankan maka variable tersebut juga akan dihapus, tetapi adakalanya kita tidak ingin menghapus variable tersebut dan akan digunakan kembali oleh kode kita. kita bisa menggunakan static variable 
*/

function myTest() {
  static $x = 0;
  echo "nilai x sekarang adalah $x \n";
  $x++;
}

myTest();
myTest();
myTest();
myTest();
myTest();


?>