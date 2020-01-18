<?php 

// constructor adalah method yang otomatis pertama dijalankan ketika menginstansiasikan objectt


class Produk{
	public $judul = "judul",//instansiasi secara default,
		   $penulis= "penulis",
		   $penerbit ="penerbit",
		   $harga = "harga";
    public function __construct($judul,$penulis,$penerbit,$harga){
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;

    }
	public function komentar(){
		return "saya ingin membeli produk $this->judul yang harganya Rp $this->harga" ;
	}

}


$produk3 = new Produk("naruto","masashi kishimoto","shonen jump",30000);


echo "Komik : $produk3->judul , Harga Komik : Rp $produk3->harga";
echo "<br>";
echo $produk3->komentar();