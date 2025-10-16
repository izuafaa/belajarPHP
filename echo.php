<?php 
// di php ada 2 cara dasar untuk menampilkan data ke layar, yaitu echo dan print.

/* 
echo dan print sama-sama bisa menapilkan data kelayar, perbedaan keduanya sangat kecil

- echo tidak mengembalikan value, dan print mengembalikan value 1 jadi bisa digunakan di expression
- echo bisa menangani beberapa parameter, print hanya bisa 1
- echo lebih cepat dari print

expl
*/

// echo statement
echo "Hello";
echo("Hello"); //ini sama saja


// menampilkan text
echo "PHP is Fun! \n";
echo "Hello World! \n";
echo "I'm about to learn php \n";
echo "String ", "ini ", "dibuat ", "menggunakan ", "multiple parameters.";

// menampilkan variable 

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "$txt1 \n";
echo "Belajar di $txt2 \n";
// menggunakan single quotes
echo 'Belajar di  ' . $txt2 . ' oke!';

?>