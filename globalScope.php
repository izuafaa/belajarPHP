<?php 
// global variable
/* 
Global variable adalah varible yang dideklarasikan diluar function. global variable hanya bisa diakses diluar dari function
*/

$x = 5;

function myTest() {
  // x tidak akan bisa di jalankan karena global
  echo "variable x di function $x \n";
}

myTest();

echo "variable x diluar function $x"
?>