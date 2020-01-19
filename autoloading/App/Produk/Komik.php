<?php 


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