<?php 

// constructor adalah method yang otomatis pertama dijalankan ketika menginstansiasikan objectt


class Produk{
	public $judul ,//instansiasi secara default,
		   $penulis,
		   $penerbit,
		   $harga;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga="harga"){
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;

    }
	public function komentar(){
		return "saya ingin membeli produk $this->judul yang harganya Rp $this->harga" ;
	}

}


$produk1 = new Produk("naruto","masashi kishimoto","shonen jump",30000);
$produk2 = new Produk("dragon ball");


echo "Komik : $produk1->judul , Harga Komik : Rp $produk1->harga";
echo "<br>";
echo $produk1->komentar();

echo "<br>";
echo "Komik : $produk2->judul , Harga Komik : Rp $produk2->harga";
echo "<br>";
echo $produk2->komentar();