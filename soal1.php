<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL PERTAMA</title>
</head>
<body>
    <?php
    class Tim
    {
        public $namaTim;
        public $skor1;
        public $skor2;
        public $skor3;
        public $rataRata;

        function __construct($namaTim, $skor1, $skor2, $skor3)
        {
            $this->namaTim = $namaTim;
            $this->skor1 = $skor1;
            $this->skor2 = $skor2;
            $this->skor3 = $skor3;
            $this->rataRata = round(($skor1 + $skor2 + $skor3) / 3, 2);
        }
    }

    class Hasil
    {
        public $tim1;
        public $tim2;

        function __construct($tim1, $tim2)
        {
            $this->tim1 = $tim1;
            $this->tim2 = $tim2;
        }

        function hasil()
        {
            $tim1 = $this->tim1->rataRata;
            $tim2 = $this->tim2->rataRata;

            if ($tim1 >= 100 or $tim2 >= 100) {
                if ($tim1 == $tim2) {
                    return 'Kedua Tim Seri';
                } elseif ($tim1 > $tim2) {
                    return 'Tim ' . $this->tim1->namaTim . ' Menang';
                } else {
                    return 'Tim ' . $this->tim2->namaTim . ' Menang';
                }
            } else {
                return 'Tidak ada yang memenangkan trofi';
            }
        }

        function showTimData($tim)
        {
            echo $tim->namaTim . ' (' . $tim->skor1 . ', ' . $tim->skor2 . ', ' . $tim->skor3 . ') : ' . $tim->rataRata;
            echo '<br>';
        }

        function show()
        {
            $this->showTimData($this->tim1);
            $this->showTimData($this->tim2);
            echo 'Hasil : ' . $this->hasil();
            echo '<br> ===============================';
        }
    }

    function show()
    {
        echo $this->tim1->namaTim . ' (' . $this->tim1->skor1 . ', ' . $this->tim1->skor2 . ', ' . $this->tim1->skor3 . ') : ' . $this->tim1->rataRata;
        echo '<br>';
        echo $this->tim2->namaTim . ' (' . $this->tim2->skor1 . ', ' . $this->tim2->skor2 . ', ' . $this->tim2->skor3 . ') : ' . $this->tim2->rataRata;
        echo '<br>';
        echo 'Hasil : ' . $this->hasil();
        echo '<br>[]===============================[]';
    }

echo '<h3>Data 1</h3>';
$lumba = new Tim("Lumba-Lumba", 97, 108, 89);
$koala = new Tim("Koala", 89, 91, 110);
$hasil = new Hasil($lumba, $koala);
$hasil->show();

echo '<h3>Data Bonus 1</h3>';
$lumba = new Tim("Lumba-Lumba", 97, 112, 101);
$koala = new Tim("Koala", 109, 95, 123);
$hasil = new Hasil($lumba, $koala);
$hasil->show();

echo '<h3>Data Bonus 2</h3>';
$lumba = new Tim("Lumba-Lumba", 97, 112, 101);
$koala = new Tim("Koala", 109, 95, 106);
$hasil = new Hasil($lumba, $koala);
$hasil->show();
?>

</body>
</html>