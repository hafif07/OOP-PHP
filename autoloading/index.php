<?php 
require_once "App/init.php";


$infoKomikNaruto = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);

$infoGameFifa = new Game("FIfa 2020","no name","ea sport",250000, 30);


$infoProduk = new CetakInfoProduk();
echo $infoProduk->tambahProduk($infoKomikNaruto);
echo $infoProduk->tambahProduk($infoGameFifa);
echo $infoProduk->cetak();
