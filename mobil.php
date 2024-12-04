<?php
/**
* Program sederhana pendefinisian class dan pemanggilan class.
**/
class Mobil
{
    private $warna;
    private $merk;
    private $harga;

    // Constructor untuk menginisialisasi nilai default
    public function __construct()
    {
        $this->warna = "Biru";
        $this->merk = "BMW";
        $this->harga = "10000000";
    }

    // Method untuk mengganti warna mobil
    public function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    // Method untuk menampilkan warna mobil
    public function tampilWarna()
    {
        echo "Warna mobilnya : " . $this->warna;
    }
}

// Membuat objek mobil pertama dan kedua
$a = new Mobil();
$b = new Mobil();

// Memanggil objek pertama
echo "<b>Mobil pertama</b><br>";
$a->tampilWarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiWarna("Merah");
$a->tampilWarna();

// Memanggil objek kedua
echo "<br><b>Mobil kedua</b><br>";
$b->gantiWarna("Hijau");
$b->tampilWarna();
?>
