<?php 

//ini komentar
/*untuk komentar yng banyak */

/*echo "Hello Word <br>";
echo 'Hello Word <br>';
print_r("Inan Sri Pinasti <br>");
var_dump("STT Nurul Fikri<br>");
var_dump(123)*/

//membuat varibel user
$nama = "Inan Sri Pinasti";
$umur = 18;
$berat = 50.4;
$mahasiswa = true;

// echo "hallo nama saya $nama <br>";
// echo "Umurku $umur tahun <br>";
// echo "dan memiliki berat badan $berat kg";

//membuat varibel sistem
// echo "Dokument root " . $_SERVER['DOCUMENT_ROOT'];
// echo "<br>";
// echo "Nama file " . $_SERVER['PHP_SELF'];

//membuat varibel konstanta
define ('PHI', 3.14);
$jari = 8;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

// echo "<br>luas lingkaran dengan jari-jari $jari = $luas cm";
// echo "<br>keliling lingkaran dengan jari- jari $jari = $keliling cm";

// membuat array
$programs = ["php", "javascript", "html", "css"];

// echo $programs[0];
echo "jumlah data sebanyak " . count($programs);
?>