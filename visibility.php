<?php 

// konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek


// public-> properti dan methode bisa digunakan dimana saja bahkan diluar kelas itu sendiri
//protected-> properti dan method hanya bisa digunakan di dalam sebuah class beserta turunannya
//private-> properti dan method hanya bisa digunakan di dalam sebuah class tertentu saja

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
		   $penerbit;
	protected $discount;
	private $harga;
    public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga="harga"){
    	$this->judul = $judul;
    	$this->penulis = $penulis;
    	$this->penerbit = $penerbit;
    	$this->harga = $harga;

    }
	public function getLabel(){
		return "$this->penulis, $this->penerbit" ;
	}


	public function getHarga(){
		return $this->harga;
	}

	public function hargaSetelahDiscount($diskon){
		return ($diskon/100)*$this->harga;
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

$infoGameFifa = new Game("FIfa 2020","no name","ea sport",250000, 30);

echo $infoKomikNaruto->getInfoProduk();
echo "<br>";
echo $infoGameFifa->getInfoProduk();
echo "<hr>";


echo "harga normal game fifa ".$infoGameFifa->getHarga();
echo "<br>";
echo "harga discount game fifa ".$infoGameFifa->hargaSetelahDiscount(50);
