<?php
for($a=1;$a<=10;$a++){
    echo $a . " " ."X TJA 6" ;
    echo "<br>";
}

echo "<br>";
for($a=10;$a>=1;$a--){
    echo $a . " ";
}

echo "<br>";
$jawaban="X";
while($jawaban=="XI"){
    echo "SMK TELKOM";
}

$jawab=false;
do{
    echo "SKOMDA";
}while($jawab==true);

echo "<br>";
//deklarasi array
$siswa=["Bima","Hilmi","Raka"];
$siswa=array("Bima","Hilmi","Raka");
//cara menampilkan array
echo $siswa[0];
echo "<br>";
echo $siswa[1];
echo "<br>";
echo $siswa[2];
echo "<br>";
//menampilkan seluruh isi array
for($x=0;$x<3;$x++){
    echo $siswa[$x] . " ";
}
echo "<br>";
$angka=[1,3,5,2,2,4,2,4,6,8,5,9,0,6,4,3,6,7,35,64,75,4,464,4,3,6];
//menghitung panjang array
echo count($angka);
echo "<br>";
for($x=0;$x<count($angka);$x++){
    echo $angka[$x] . " ";
}

foreach($angka as $data){
    echo $data;
}