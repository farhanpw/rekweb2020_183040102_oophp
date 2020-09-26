<?php

class produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHalaman,
		   $waktuMain,
		   $tipe;

	public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0,$jmlHalaman = 0, $waktuMain = 0, $tipe){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}
		   
	public function getLabel(){
		return "$this->penulis,$this->penerbit";
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ({$this->harga})";

		if($this->tipe == "Komik"){
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if ($this->tipe == "Game"){
			$str .= " ~ {$this->waktuMain} Jam.";
		}

		return $str;
	}
}

class CetakInfoProduk {
	public function cetak( produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Produk("Naruto","Masashi kishimoto","Shonen Jump",30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
echo "<br>";
