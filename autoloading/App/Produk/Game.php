<?php 

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