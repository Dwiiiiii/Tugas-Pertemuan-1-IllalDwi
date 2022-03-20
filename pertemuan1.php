<?php


class laptop {

	public  $pemilik, $merk, $warna, $ukuran_layar;

	public function __construct($pemilik, $merk, $warna, $ukuran_layar){
		$this->pemilik = $pemilik;
        $this->merk = $merk;
        $this->warna = $warna;
        $this->ukuran_layar = $ukuran_layar;

	}
	public  function hidupkan_laptop() {
     return "Tekan tombol power : Hidupkan Laptop";
    }
   	public function matikan_laptop() {
     return "Tekan alt+f4 : Matikan Laptop";
   }
}

$leptop  = new laptop ("illal", "lenovo", "hitam", "15 inch");
echo "pemilik : $leptop->pemilik <br>";
echo "merk : $leptop->merk <br>"; 
echo "warna : $leptop->warna <br>";
echo "ukuran layar : $leptop->ukuran_layar <br>";
echo $leptop->hidupkan_laptop();
echo "<br />";
echo $leptop->matikan_laptop();
echo "<hr><br>";


class hewan {

	public  $nama, $jenis, $makanan, $habitat;

	public function __construct($nama, $jenis, $makanan, $habitat){
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->makanan = $makanan;
        $this->habitat = $habitat;

	}
	public  function fakta_buaya() {
     return "Buaya adalah reptil bertubuh besar yang hidup di air. ";
}
}

$binatang  = new hewan ("buaya", "reptil", "daging", "perairan tawar / payau");
echo "nama : $binatang->nama <br>";
echo "jenis : $binatang->jenis <br>"; 
echo "makanan : $binatang->makanan <br>";
echo "habitat : $binatang->habitat <br>";
echo $binatang->fakta_buaya();
echo "<br />";
echo "<hr><br>";

