<?php 

// static method adaah cara kita memanggil sebuah properti atau method dei dalam sebuah class tanpa harus menginstansiasikannya kedalam object


//static keyword
//member yang terikat dengan class bukan object
//nilasi static akan selalu tetap walaupun object diinstansiasi berulang kali

class ContohStatic{
	public static $angka=1;

	public static function halo(){
		return "hallooo ". self::$angka. "kali";
	}

}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";

class ClassWithoutStatic{
	public $angka = 1;

	public function  halo(){
		return "halo ". $this->angka++. " kali<br>";
	}
}
// akan eror jika memanggil properti tanpa menginstansiasikannya jika bukan static method
//echo ClassWithoutStatic::$angka;


$objWithoutStatic= new ClassWithoutStatic();
echo $objWithoutStatic->halo();
echo $objWithoutStatic->halo();
echo $objWithoutStatic->halo();

$objWithoutStatic2 = new ClassWithoutStatic();
echo $objWithoutStatic2->halo();
echo $objWithoutStatic2->halo();
echo $objWithoutStatic2->halo();
echo "<hr>";

//perbandingan obj1 dan obj2 ketika dijalankan nilai akan terhenti pada penginstansiasian objectnya, jika object nyaberbeda nilai akan kembali keawal

class ClassWithStatic{
	public static $angka = 1;

	public function  halo(){
		return "halo ". self::$angka++. " kali<br>";
	}
}


$objWithStatic= new ClassWithStatic();
echo $objWithStatic->halo();
echo $objWithStatic->halo();
echo $objWithStatic->halo();

$objWithStatic2 = new ClassWithStatic();
echo $objWithStatic2->halo();
echo $objWithStatic2->halo();
echo $objWithStatic2->halo();
echo "<hr>";








