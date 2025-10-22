<?php 
// string concatenate

// Untuk menggabungkan, atau mengombinasikan, dua string, Anda dapat menggunakan operator .

$x = "Hello";
$y = "World";

$con = $x . $y;

echo $con; //hasil HelloWorld

/*
The result of the example above is HelloWorld, without a space between the two words.

You can add a space character like this:
*/

$x = "Hello";
$y = "World";
$z = $x . " " . $y;
echo $z; //hasil Hello World

/*
Cara yang lebih mudah dan lebih baik adalah dengan menggunakan kekuatan tanda kutip ganda.

Dengan mengapit kedua variabel dalam tanda kutip ganda dengan spasi di antaranya, spasi juga akan muncul dalam hasil:
*/

$x = "Hello";
$y = "World";
$z = "$x $y";
echo $z; //hasil Hello World
?>