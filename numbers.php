<?php 
/*
Angka PHP
Ada tiga tipe data numerik utama dalam PHP:

Integer
Float
Number Strings

Selain itu, PHP memiliki dua tipe data lain yang digunakan untuk angka:

Infinity
NaN

Variabel bertipe numerik dibuat ketika Anda menetapkan nilai ke dalamnya:

*/
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
var_dump($b);
var_dump($c);

// integer
/*
Fungsi PHP is_int() digunakan untuk memeriksa apakah tipe suatu variabel adalah integer.

Integer adalah angka tanpa bagian desimal: 2, 256, -256, 10358, -179567 semuanya adalah integer.
*/

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
/*
Berikut beberapa aturan untuk bilangan bulat:

Bilangan bulat harus memiliki setidaknya satu digit
Bilangan bulat TIDAK BOLEH memiliki titik desimal
Bilangan bulat dapat berupa positif atau negatif
Bilangan bulat dapat ditentukan dalam tiga format: desimal (basis 10), heksadesimal (basis 16 - diawali 0x), oktal (basis 8 - diawali 0), atau biner (basis 2 - diawali 0b).
PHP memiliki konstanta yang telah ditentukan sebelumnya untuk bilangan bulat:

PHP_INT_MAX - Bilangan bulat terbesar yang didukung
PHP_INT_MIN - Bilangan bulat terkecil yang didukung
PHP_INT_SIZE - Ukuran bilangan bulat dalam byte
*/

// FLOAT

/*
Fungsi PHP is_float() digunakan untuk memeriksa apakah tipe suatu variabel adalah float.

Float adalah angka dengan titik desimal atau angka dalam bentuk eksponensial: 2,0, 256,4, 10,358, 7,64E+5, 5,56E-5 semuanya merupakan float.
*/

$x = 10.365;
var_dump(is_float($x));

/*
Tipe data float umumnya dapat menyimpan nilai hingga 1,7976931348623E+308 (tergantung platform), dan memiliki presisi maksimum 14 digit.

PHP memiliki konstanta bawaan berikut untuk float (mulai dari PHP 7.2):

PHP_FLOAT_MAX - Bilangan floating-point terbesar yang dapat direpresentasikan
PHP_FLOAT_MIN - Bilangan floating-point positif terkecil yang dapat direpresentasikan
PHP_FLOAT_DIG - Jumlah digit desimal yang dapat dibulatkan menjadi float dan kembali tanpa kehilangan presisi
PHP_FLOAT_EPSILON - Bilangan positif terkecil yang dapat direpresentasikan x, sehingga x + 1,0 != 1,0
*/

// INFINITY

/*
Fungsi PHP is_finite() memeriksa apakah suatu nilai berhingga atau tidak.

Suatu nilai berhingga jika berada dalam rentang yang diizinkan untuk float PHP pada platform ini.

Fungsi PHP is_infinite() memeriksa apakah suatu nilai tak terhingga atau tidak.

Nilai tak terhingga jika berada di luar rentang yang diizinkan untuk float PHP pada platform ini.
*/

$x = 1.9e411;
var_dump(is_infinite($x));

// NaN
/*
NaN adalah singkatan dari Not a Number (Bukan Angka).

NaN digunakan untuk operasi matematika yang mustahil.

Fungsi PHP is_nan() digunakan untuk memeriksa apakah suatu nilai bukan angka.
*/

$x = acos(8);
var_dump($x);

// Numerical Strings

/*
Fungsi PHP is_numeric() digunakan untuk memeriksa apakah suatu variabel berupa angka atau string numerik.

Fungsi ini mengembalikan nilai true jika variabel berupa angka atau string numerik, dan false jika tidak.
*/

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));
$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

// PHP Casting Strings and Floats to Integers

/*
Terkadang Anda perlu mengonversi nilai numerik ke tipe data lain.

Fungsi (int), (integer), dan intval() sering digunakan untuk mengonversi nilai menjadi integer.
*/

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>