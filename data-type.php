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
expl
*/
$float = 10.365;
var_dump($float);


// boolean
// boolean merefresentasikan 2 nilai yaitu true (benar) dan false (salah)
// boolean sering digunakan testing pengkondisian (if...else)

$x = true;
var_dump($x);


// Array
/*
array menyimpan beberapa values di dalam sebuah variabke
expl
*/

$cars = array("Volvo", "Honda", "BMW");

var_dump($cars);

// Object
/*
class dan object adalah dua aspek utama untuk object-oriented programming (OOP).

class adalah template untuk object, dan object adalah contoh dari class.
ketiga masing-masing object dibuat, setiap object akan mewarisi semua properti dan perilaku dari class. tetapi setiap object akan memiliki nilai properti yang berbeda beda.

Mari kita asumsikan kita memiliki kelas bernama Mobil yang dapat memiliki properti seperti model, warna, dll. Kita dapat mendefinisikan variabel seperti $model, $color, dan seterusnya, untuk menyimpan nilai properti-properti ini.

Ketika objek individual (Volvo, BMW, Toyota, dll.) dibuat, objek-objek tersebut mewarisi semua properti dan perilaku dari kelas tersebut, tetapi setiap objek akan memiliki nilai properti yang berbeda.

Jika Anda membuat fungsi __construct(), PHP akan secara otomatis memanggil fungsi ini ketika Anda membuat objek dari suatu kelas.
*/

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

  public function message() {
    return "My car is a" . $this->color . $this->model . "!";
  }
}

$myCar = new Car("Red", "Lambo");
var_dump($myCar);

// Null value
/*
Null adalah tipe data khusus yang hanya dapat memiliki satu nilai: NULL.

Variabel bertipe data NULL adalah variabel yang tidak memiliki nilai.

Tips: Jika suatu variabel dibuat tanpa nilai, variabel tersebut secara otomatis akan diberi nilai NULL.

Variabel juga dapat dikosongkan dengan menetapkan nilainya ke NULL:
expl
*/

$n = "Hello World!";
$n = null;
var_dump($n);

// mengubah type data
// jika variable sudah diisi dengan string maka otomatis tipe datanya adalah string, jika kita mengubah isi dari variable tersebut menggunakan number (reassign) maka otomatis pula tipe datanya akan berubah menjadi integer. expl

$o = "Hello world!";
var_dump($o); //hasil akan string
$o = 28; //reassign dengan number (integer)
var_dump($o); //hasil akan integer

// jika ingin mengubah tipe data tanpa mengubah isi data maka kita bisa menggunakan casting, casting mengizinkan untuk mengubah tipe data tanpaharus mengubah data dari variable tersebut

$cast = 25;
var_dump($cast);
$cast = (string) $cast;
var_dump($cast);

?>