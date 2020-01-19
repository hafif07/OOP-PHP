<?php 

// menyimpan nilai dengan nilai yang tidak dapat berubh
// bisa emnggunakan define(), atau const perbedaannya kalo define() gak bisa digunakan di dalam class

define("NAMA", "Muhammad Hafif");
echo NAMA;
echo "<br>"; 
const UMUR = 20;
echo UMUR;
echo "<hr>";


class Coba{
	const NAMA= "Hafif";
}

echo Coba::NAMA;

echo "<hr>";


//Magic contant

echo __LINE__;// menampilakn magic constant di line berapa
echo "<br>";
echo __FILE__;// menampilkan magic constan di file mana
echo "<br>";
echo __DIR__;// menampilkan magic constant di direktori mana
echo "<br>";


function coba(){
	return __FUNCTION__;// menampilkan magic constant di function mana
}
echo coba();
echo "<br>";



class NamaSaya{
	public $kelas = __CLASS__;
}

$obj = new NamaSaya();
echo $obj->kelas;

