<?php

// for($a=1;$a<=1000;$a+=3){//$a=$a+2 => $a+=2
//     echo "$a ";
// }

// echo "<br>";
// for($a=10;$a>=1;$a--){
//     echo "$a ";
// }

// $Jawaban="X TJA";
// while($jawaban=="X TJA 5"){
//     echo "X TJA 5";
//     echo "<br>";
// }

// echo "<br>";
// $nilai=false;
// do{
//     echo "X TJA 5";
//     echo "<br>";
// }while($nilai==true);

$nama=["Alif", "Radit", "Messi"];
echo $nama[2];
echo "<br>";

for($a=0;$a<3;$a++){
    echo $nama[$a]. " ";
}

echo "<br>";

$angka=[4,2,1,5,6,3,4,6,7,8,9];
for($a=0;$a<count($angka);$a++){
    echo $angka[$a] . " ";
}

echo "<br>";
foreach($angka as $data){
    echo $data . " ";
}
