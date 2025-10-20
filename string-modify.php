<?php 
// modifikasi string

// uppercase

$upper = "Hello World!";
echo strtoupper($upper); //hasil HELLO WORLD!

// lowercase

$lower = "HELLO WORLD!";
echo strtolower($lower);

// Rreplace String
// Fungsi PHP str_replace() mengganti beberapa karakter dengan beberapa karakter lain dalam sebuah string.

$replace = "Hello World!";
echo str_replace("World", "Dolly", $replace); //hasil Hello Dolly!

// Reverse String

$reverse = "Hello World!";
echo strrev($reverse);

// remove whitespace
/* Whitespace adalah spasi sebelum dan/atau sesudah teks itu sendiri, dan seringkali Anda ingin menghapus spasi ini.

Fungsi trim() PHP menghapus spasi apa pun dari awal atau akhir.

*/

$remove = " Hello World! ";
echo trim($remove);


// ubah string ke array

/*
Fungsi PHP explode() membagi string menjadi array.

Parameter pertama fungsi explode() merepresentasikan "separator". "Separator" menentukan di mana string akan dibagi.

Catatan: Separator wajib diisi.
*/

$x = "Hello World!";
$y = explode(" ", $x);
//Use the print_r() function to display the result:
print_r($y);
/*
Result:
Array ( [0] => Hello [1] => World! )
*/
?>