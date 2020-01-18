<?php 

//jualan produk 
//komik
//game

class Produk{
	//cara 1
	// public $judul;
	// public $penulis;

	//cara2
	// menunjukan sama sama dalam visibility public
	public $judul = "judul",//instansiasi secara default,
		   $penulis= "penulis",
		   $penerbit ="penerbit",
		   $harga = "harga";

	public function komentar(){
		return "saya ingin membeli produk $this->judul yang harganya Rp $this->harga" ;
	}

}


$produk1 = new Produk();
$produk1->judul = "naruto shipuden";
var_dump($produk1);


$produk2 = new Produk();
$produk2->judul = "fifa 2020";
$produk2->tahunKeluaran = "2018";
var_dump($produk2);


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "masashi kishimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 30000;

var_dump($produk3);


echo "Komik : $produk3->judul , Harga Komik : Rp $produk3->harga";
echo "<br>";
echo $produk3->komentar();