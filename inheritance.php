<?php 

//inheritance adalah pewarisan sifat dari parent class ke chiild class


class Mobil{

	public $nama,
		   $merk,
		   $warna,
		   $kecepatanMaksimal,
		   $jumlahPenumpang;

	public function tambahKecepatan(){
		return "kecepatan bertambah";
	}
}


class MobilSport extends Mobil{
	public $turbo = false;

	public function jalankanTurbo(){
		$this->turbo = true;
		return "turbo dijalankan";
	}
}

$mobil = new MobilSport();
echo $mobil->tambahKecepatan();
echo "<br>";
echo $mobil->jalankanTurbo();
echo "<br>";



class Produk{
	public $judul ,
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
	public function getInfoProduk(){
		return "{$this->judul} , {$this->getLabel()} , RP {$this->harga} ";
	}
}

class Komik extends Produk{

	public $jumlahHalaman;

	public function getInfoKomik(){
		$str = "Komik : {$this->getInfoProduk()} , {$this->jumlahHalaman} halaman";
		return $str;
	}
}

$infoKomik = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$infoKomik->jumlahHalaman = 100;

echo $infoKomik->getInfoKomik();




