<?php
$nama=["Fayad", "Habib", "Ben"];
$nama=array("Fayad", "Habib", "Ben");
//untuk menampilkan isi array
echo $nama[0];
echo $nama[1];
echo $nama[2];
echo "<br>";
//menampilkan seluruh isi array
for($a=0;$a<3;$a++){
    echo $nama[$a];
}
echo "<br>";
$angka=[1,2,4,5,32,2,3,5,6,7,4,4];
echo count($angka);
for($a=0;$a<count($angka);$a++){
    echo $angka[$a];
}
echo "<br>";
foreach($angka as $data){
    echo $data . " ";
}