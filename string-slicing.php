<?php 
/*
Fungsi PHP substr() digunakan untuk mengekstrak bagian dari string (memotong string).

Anda dapat mengekstrak sebagian string menggunakan fungsi substr().

Tentukan indeks awal dan jumlah karakter yang ingin Anda kembalikan.
*/

$x = "Hello World!";
echo substr($x, 6, 5); //hasil World

// Catatan Karakter pertama memiliki indeks 0.

/*
Potong String hingga Akhir
Dengan mengabaikan parameter panjang, rentang akan mengarah hingga akhir:
*/

$x = "Hello World!";
echo substr($x, -5, 3);

?>