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
	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga="harga",$jumlahHalaman="jumlah halaman"){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jumlahHalaman = $jumlahHalaman;
	}
	public function getInfoProduk(){
		$str = "Komik : ". parent::getInfoProduk() ." , {$this->jumlahHalaman} halaman";
		return $str;
	}
}

class Game extends Produk{

	public $jamBermain;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga="harga",$jamBermain="jam bermain"){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jamBermain = $jamBermain;
	}
// :: method static
	public function getInfoProduk(){
		$str = "Game : ". parent::getInfoProduk() ." , {$this->jamBermain} jam";
		return $str;
	}
}
//instansiasi
$infoKomikNaruto = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);

$infoGameFifa = new Game("FIfa 2020","no name","ea sport",30000, 30);

echo $infoKomikNaruto->getInfoProduk();
echo "<br>";
echo $infoGameFifa->getInfoProduk();




