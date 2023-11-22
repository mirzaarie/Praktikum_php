<?
$nama = "John";
if ($nama == "Jane") {
    echo "Nama adalah Jane\n";
} elseif ($nama == "John") {
    echo "Nama adalah John\n";
} else {
    echo "Nama tidak dikenal\n";
}
echo "Nama adalah salah\n\n";

$umur = 70;
if ($umur <= 12) {
    echo "Anak-anak\n";
} elseif ($umur <= 18) {
    echo "Remaja\n";
} elseif ($umur <= 60) {
    echo "Dewasa\n";
} else {
    echo "Lansia\n";
}

$a=5;
switch ($a){
  case 1 : echo 1;break;
  case 2 : echo 2;break;
  case 3 : echo 3;break;
  default : echo 4;
}

$a = 50;
$b = 10;
if ($b>=$a){
  echo $b;
}

