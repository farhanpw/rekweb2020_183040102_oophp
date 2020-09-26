<?php

class produk{
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	public function __construct($judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $harga = 0,$jmlHalaman = 0, $waktuMain = 0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}
		   
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (RP. {$this->harga})";
		return $str;
	}

}

class Komik extends Produk{
	public $jmlHalaman;

    public function __construct($judul = "judul", $penerbit = "penerbit",$penulis = "penulis", $harga = 0, $jmlHalaman = 0){
        
        parent::__construct($judul, $penerbit, $penulis, $harga);
        
        $this->jmlHalaman = $jmlHalaman;
    }

	public function getInfoProduk(){
		$str = "Komik : {$this->judul} | {$this->getLabel()} (RP. {$this->harga}) - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{
	public $waktuMain;

    public function __construct($judul = "judul", $penerbit = "penerbit",$penulis = "penulis", $harga = 0, $waktuMain = 0){
        
        parent::__construct($judul, $penerbit ,$penulis , $harga);
        
        $this->waktuMain = $waktuMain;
    }
	public function getInfoProduk(){
		$str = "Game : {$this->judul} | {$this->getLabel()} (RP. {$this->harga}) ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

class CetakInfoProduk {
	public function cetak( produk $produk){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Naruto","Masashi kishimoto","Shonen Jump",30000, 100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";