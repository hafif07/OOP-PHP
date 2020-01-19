<?php  

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