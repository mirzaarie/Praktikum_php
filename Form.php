<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        Masukkan nilai Anda: <input type="text" name ="nilai"/>
        <input type="submit" name ="Submit"/>
    </form>

    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST["nilai"];
         }
            if ($nilai >0) {
                echo "Bilangan Positif.";
            }
    ?>

    <form method="post" action="">
        Masukkan nilai Anda: <input type="text" name ="Nilai1"/>
        <input type="submit" name ="Submit"/>
    </form>

    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Nilai1 = $_POST["Nilai1"];
         }
             if ($Nilai1 %2 ==0) {
                 echo "Bilangan Genap.";
            } else {
                echo "Bilangan Ganjil.";
            }
    ?>

    <form method="post" action="">
        Masukkan Huruf Anda: <input type="text" name ="Huruf"/>
        <input type="submit" name ="Submit"/>
    </form>

    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Huruf = $_POST["Huruf"];
         }
            if ($nilai == "A") {
                 echo "Anda luar biasa.";
            } elseif ($nilai == "B") {
                 echo "Anda baik-baik saja.";
            } elseif ($nilai == "C") {
                 echo "Anda perlu belajar kelas.";
            } else {
                 echo "Anda perlu banyak belajar";
            }
    ?>

    <form method="post" action="">
        Masukkan Nilai Anda: <input type="text" name ="Nilai2"/>
        <input type="submit" name ="Submit"/>
    </form>

    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Nilai2 = $_POST["Nilai2"];
         }
         switch ($Nilai2) {
            case 1:
                echo "Senin";
                break;
            case 2:
                echo "Selasa";
                break;
            case 3:
                echo "Rabu";
                break;
            case 4:
                echo "Kamis";
                break;
            case 5:
                echo "Jum'at";
                break;
            case 6:
                echo "Sabtu";
                break;
            case 7:
                echo "Minggu";
                break;
            default:
                echo "Nomor hari tidak valid";
        }
    ?>
</body>
</html>