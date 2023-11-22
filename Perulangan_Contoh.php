<?php
for($a=1;$a<=10;$a++){
    echo $a . "X TJA 3";
    echo "<br>";
}
echo "<br>";

for($a=10;$a>=1;$a--){
    echo $a . " ";
}

echo "<br>";
$jawaban = "X TJA";
while($jawaban=="X TJA 3"){
    echo "SMK TELKOM ";
}

echo "<br>";
$jawab=false;
do{
    echo "SKOMDA";
}while($jawab==true);

echo "<br>";
for($b=1;$b<=9;$b+=2){ // $b+=2 => $b=$b+2
    echo $b . " ";
}
echo "<br>";

// $nama="Deva";
// $nama2="Dariel";
// $nama3="Maulana";
// echo $nama;

echo "<br>";
$nama=["Deva", "Dariel", "Maulana"];
$nama2=array("Deva", "dariel", "Maulana");
$angka=[1,2,3,4,5];
//menampilkan 1 indeks array
echo $nama[1];
echo "<br>";
echo $nama[2];

echo "<br>";
//menampilkan seluruh isi array
for($x=0;$x<3;$x++){
    echo $nama[$x] . " ";
}
echo "<br>";
$bilangan = [3,1,2,4,6,7,9,3,2,2,4,5,6,7];
//count($bilangan) untuk menghitung panjang array
for($x=0;$x<count($bilangan);$x++){
    echo $bilangan[$x] . " ";
}
echo "<br>";
foreach($bilangan as $data){
    echo $data . " ";
}

$bilangan = [3,1,2,4,6,7,9,3,2,2,4,5,6,7];
$jumlah= $bilangan[0]+$bilangan[1]+$bilangan[2];
$total=0;
for($x=0;$x<count($bilangan);$x++){
    $total=$total+$bilangan[$x]; 
}