<?php 
// STRING (penjelasan lengkap string)
/*
tanda kutip double atau single ("/')

penulisan string bisa menggunakan single atau double quotes, tetapi harus berhati-hati dengan perbedaan keduanya

double quotes string memiliki memiliki kempanpuan untuk caracter khusus

contoh seperti kita ingin mencetak isi variable
*/

$name = "Jhon";
echo "Hello $name !"; //return Hello Jhon !

/*
Sedangkan single quotes tidak memiliki kemapuan untuk mengeluarkan isi dari variable

*/
$single = "Fauzi";
echo 'Hello $single'; //maka akan tampil Hello $single


// operasi pada string

// string Length
/*
PHP strlen() berfungsi untuk menghitung panjang dari string (berapa huruf)-

*/

echo(strlen("Hello World!"));  

/*
output 12 padahal hurufnya 11 kok bisa??
ingat spasi dan karakter lain juga terhitung
*/

// word count
// menghitung jumlah kata yang ada di string

echo(str_word_count("Hello World!")); //hasilnya adalah 2

// mencari kata yang spesifik di dalam string. Jika kecocokan ditemukan, fungsi akan mengembalikan posisi karakter dari kecocokan pertama. Jika tidak ditemukan kecocokan, fungsi akan mengembalikan FALSE.

echo strpos("Hello World!", "World"); //hasil 6
?>