<?php 
// menggunakan object sebagai type data yang bisa digunakan pada class
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
	public function getLabel(){
		return "$this->penulis, $this->penerbit" ;
	}

}


$produk1 = new Produk("naruto","masashi kishimoto","shonen jump",30000);
$produk2 = new Produk("dragon ball");


echo "Komik : $produk1->judul , Harga Komik : Rp $produk1->harga";
echo "<br>";
echo $produk1->getLabel();

echo "<br>";
echo "Komik : $produk2->judul , Harga Komik : Rp $produk2->harga";
echo "<br>";
echo $produk2->getLabel();
echo "<br>";



class CetakInfoProduk{
	public function cetak(Produk $produk){
		$str = "{$produk->judul}, {$produk->getLabel()}, {$produk->harga}";
		return $str;
	}
}

$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak("sevf");





