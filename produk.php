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
	// public $judul = "judul",//instansiasi secara default,
	// 	   $penulis= "penulis",
	// 	   $penerbit ="penerbit",
	// 	   $harga = "harga";


	public $judul,//instansiasi secara default,
		   $penulis,
		   $penerbit,
		   $harga;

	 public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga="harga"){
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;

    }

	public function getLabel(){
		return "$this->penulis, $this->penerbit" ;
	}

}


$produk1 = new Produk();
$produk1->judul = "naruto shipuden";
var_dump($produk1);


$produk2 = new Produk();
$produk2->judul = "fifa 2020";
$produk2->tahunKeluaran = "2018";
var_dump($produk2);


// $produk3 = new Produk();
// $produk3->judul = "Naruto";
// $produk3->penulis = "masashi kishimoto";
// $produk3->penerbit = "shonen jump";
// $produk3->harga = 30000;

// var_dump($produk3);

$produk3 = new Produk("naruto","masashi kishimoto","shonen jump",30000);
$produk4 = new Produk("fifa2020","ea sport","i dont know",30000);


echo "Komik : $produk3->judul , Harga Komik : Rp $produk3->harga";
echo "<br>";
echo $produk3->getLabel();

echo "<br>";
echo "Game : $produk4->judul , Harga Komik : Rp $produk4->harga";
echo "<br>";
echo $produk4->getLabel();
echo "<br>";


class CetakInfoProduk{
	// menginstansiasikan class yang hanya boleh mengambil dari class Produk
	public function cetak(Produk $produk){
		$str = "{$produk->judul}, {$produk->getLabel()}, {$produk->harga}";
		return $str;
	}
}

$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk3);



