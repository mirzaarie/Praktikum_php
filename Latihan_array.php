<?php
for($a=1;$a<=10;$a++){
    echo $a . " Alwi";
    echo "<br>";
}
echo "<br>";
//mencetak 1, 3, 5, 7, 9
for($a=1;$a<10;$a=$a+2){ 
    echo $a." ";
}
echo "<br>";
//mencetak 10 9, 8 7 ... 1
for($a=10;$a>=1;$a--){
    echo $a . " ";
}
echo "<br>";

$kondisi=false;
while($kondisi==true){
    echo "X TJA 4";
}

$kelas="X TJA4";
do {
    echo "SKOMDA";
}while($kelas=="X TJA 4");

$nama="indra";
$nama2="Alwi";
$nama3="hilmi";
echo $nama;
echo "<br>";

$nama=["indra","Alwi","Hilmi"];
$nama=array("indra","Alwi","Hilmi");
echo $nama[0];
echo "<br>";
echo $nama[1];
echo "<br>";
echo "$nama[2]";
echo "<br>";
//mencetak seluruh array
for($a=0;$a<3;$a++){
    echo $nama[$a] . " ";
}
//menghitung panjang array
echo "<br>";
$angka=[1,2,4,1,34,6,6,3,2,6,8,9,4,2,1,4,5,6,9];
echo "Panjang array = " . count($angka);
echo "<br>";
for($a=0;$a<count($angka);$a++){
    echo $angka[$a] . " ";
}
echo "<br>";
foreach($angka as $data){
    echo $data;
}
