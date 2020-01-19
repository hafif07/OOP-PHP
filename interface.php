<?php 

// interface
// kelas abstrct yang sama sekali tidak memiliki implementasi
//murni merupakan tempalte untuk class turunannya
//idak boleh memiliki properti hanya deklarasi method saja
 

interface InfoProduk{
	public function getInfoProduk();
}


abstract class Produk{
	protected $judul ,//instansiasi secara default,
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
	
	abstract public function getInfo();
	

}
class Komik extends Produk implements InfoProduk{

	public $jumlahHalaman;
	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga="harga",$jumlahHalaman="jumlah halaman"){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jumlahHalaman = $jumlahHalaman;
	}
	public function getInfo(){
		return "{$this->judul} , {$this->getLabel()} , RP {$this->harga} ";
	}
	public function getInfoProduk(){
		$str = "Komik : ". $this->getInfo() ." , {$this->jumlahHalaman} halaman";
		return $str;
	}
}

class Game extends Produk implements InfoProduk{

	public $jamBermain;
	
	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga="harga",$jamBermain="jam bermain"){
		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jamBermain = $jamBermain;
	}
	public function getInfo(){
		return "{$this->judul} , {$this->getLabel()} , RP {$this->harga} ";
	}
// :: method static
	public function getInfoProduk(){
		$str = "Game : ". $this->getInfo() ." , {$this->jamBermain} jam";
		return $str;
	}
}
//instansiasi
$infoKomikNaruto = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);

$infoGameFifa = new Game("FIfa 2020","no name","ea sport",250000, 30);




class CetakInfoProduk{
	public $daftarProduk = array();
	public function tambahProduk(Produk $produk){
		$this->daftarProduk[]=$produk;
	}
	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";
		foreach ($this->daftarProduk as $produk) {
			$str.="- {$produk->getInfoProduk()} <br>";
		}
		return $str;
	}
}

$infoProduk = new CetakInfoProduk();
echo $infoProduk->tambahProduk($infoKomikNaruto);
echo $infoProduk->tambahProduk($infoGameFifa);
echo $infoProduk->cetak();
