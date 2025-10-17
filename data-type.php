<?php 
// data type
/*

variable bisa menyimpan data dengan type data berbeda-beda, dan type data yang berbeda dapat melakukan hal yang berbeda
type data yang bisa ditangani untuk variable di php antara lain:
-string (tulisan)
-integer(angka)
-float(floating point atau angka pecahan seperti 2,99 dll)
-boolean(true/false)
-Array(larik)
-Object
-Resource

*/

// expl PHP string
// String adalah serangkaian character seperti Hello World!
// String berupa caracter yang berada dalam tanad kutip 2 atau tanda kutip 1

$string1= "Hello World!";
$string2 = 'Hello World!';

var_dump($string1);
echo "\n";
var_dump($string2);

//Integer(bilangan bulat)
/* integer adalah tipe data dari angka yang bukan desimal antara -2,147,483,648 dan 2,147,583,647
Aturan untuk integer
- integer setidaknya terdiri dari satu digit angka
- integer tidak boleh memiliki decimal poin seperti 2.99
- integer bisa berupa bilangan negative atau positive
- Bilangan bulat dapat ditentukan dalam: notasi desimal (basis 10), heksadesimal (basis 16), oktal (basis 8), atau biner (basis 2).

expl
*/

$int = 5985;
var_dump($int);


// float
/* 
float (floating point number) adalahbilangan dengan desimal misal 2.99

*/


?>