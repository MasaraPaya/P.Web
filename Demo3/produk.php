<?php

namespace MyApp;

trait DeskripsiTrait {
    public function deskripsi() {
        return "Ini adalah " . $this->nama . " dengan harga " . $this->harga . ".";
    }
}

abstract class Obat {
    protected $nama;
    protected $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    abstract public function getDetail();

    public function __toString() {
        return $this->getDetail();
    }
}

class ObatResep extends Obat {
    private $dosis;

    use DeskripsiTrait;

    public function __construct($nama, $harga, $dosis) {
        parent::__construct($nama, $harga);
        $this->dosis = $dosis;
    }

    public function getDetail() {
        return "Obat: " . $this->nama . ", Harga: " . $this->harga . ", Dosis: " . $this->dosis . ".";
    }
}

class ObatBebas extends Obat {
    private $masaKadaluarsa;

    use DeskripsiTrait;

    public function __construct($nama, $harga, $masaKadaluarsa) {
        parent::__construct($nama, $harga);
        $this->masaKadaluarsa = $masaKadaluarsa;
    }

    public function getDetail() {
        return "Obat: " . $this->nama . ", Harga: " . $this->harga . ", Masa Kadaluarsa: " . $this->masaKadaluarsa . " hari.";
    }
}

$obat1 = new ObatResep("Multivitamin", 20000, "500 mg");
$obat2 = new ObatBebas("Paracetamol", 25000, 365);

echo $obat1; 
echo "<br>";
echo $obat2; 
echo "<br>";

echo $obat1->deskripsi();
echo "<br>";
echo $obat2->deskripsi();

?>
