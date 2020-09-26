<?php

// define('NAMA', 'Farhan Pratama');
// echo NAMA;
// echo "<br>";

// const UMUR = 20;
// echo UMUR;


// class Coba{
// 	const NAMA = 'Farhan';
// }

// echo Coba::NAMA;

// echo __LINE__;	// magic constant baris
// echo "<br>";
// echo __FILE__;	// tampil alamat file
// echo "<br>";
// echo __DIR__;	// mencari tahu direktori

// function coba(){
// 	return __FUNCTION__; // menentukan keberadaan function
// }
// echo coba();

class Coba{
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>