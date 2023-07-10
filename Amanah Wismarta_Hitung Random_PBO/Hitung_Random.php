<?php

use Berhitung as AmPerhitungan;

class Berhitung
{
    public $data;


    public function __construct($nilai)
    {
        $this->data = $nilai;
    }

    public function minim()
    {
        $nilai_min = $this->data[0];
        foreach ($this->data as $value) {
            if ($value < $nilai_min) {
                $nilai_min = $value;
            }
        }

        return $nilai_min;
    }
    public function maxi()
    {
        $nilai_max = $this->data[0];
        foreach ($this->data as $value) {
            if ($value > $nilai_max) {
                $nilai_max = $value;
            }
        }

        return $nilai_max;
    }

    public function average()
    {
        $total = 0;
        $jumlah_data = 0;
        foreach ($this->data as $value) {
            $total += $value;
            $jumlah_data++;
        };

        $rata_rata = $total / $jumlah_data;

        print("Banyak Data = " . $jumlah_data);
        echo "<br>";
        echo "============= <br>";
        print("Jumlah Data = " . $total);
        echo "<br>";
        echo "============= <br>";

        return $rata_rata;
    }

    public static function arrayAcak()
    {
        $arr = [];
        for ($i = 0; $i < 50; $i++) {
            $arr[] = rand(1, 50);
        }

        return $arr;
    }
}
$hasilAcak = AmPerhitungan::arrayAcak();  //dideklarasikan sebagai static agar dapat dipanggil 

// $valueData = [2, 3, 4, 5, 9, 10];
$hasil = new AmPerhitungan($hasilAcak);

$hasilMin = $hasil->minim();
$hasilMax = $hasil->maxi();
$hasilAverage = $hasil->average();


foreach ($hasilAcak as $key => $value) {
    print_r("  , nilai ke -   " . $key . " adalah " .  $value);
}


echo "<br>";
echo "============= <br>";
echo "Nilai Terkecil adalah : " . $hasilMin . "<br>";
echo "Nilai Terbesar adalah : " . $hasilMax . "<br>";
echo "Rata- Ratanya adalah : " . $hasilAverage . "<br>";
echo "============= <br>";
