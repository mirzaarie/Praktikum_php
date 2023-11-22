<?php
$nama=['a','b','c'];
$angka = array(1, 2, 3, 4, 5);

//menampilkan array
echo $nama[2];
$angka = array(1, 2, 3, 4, 5);
 echo "<br>";
 //menampilkan seluruh array
 //count()=> menghitung panjang array/banyaknya data
for($a=0;$a<count($angka);$a++){
    echo $angka[$a];
}
echo "<br>";
echo "Panjang array nama = ".count($nama);

echo "<br>";
echo "isi array nama = ";
//menampilkan seluruh isi array
foreach($nama as $data){
    echo $data . " ";
}
//menambah data array
$nama[3]="f";
echo "<br>";
echo "isi array nama = ";
//menampilkan seluruh isi array
foreach($nama as $data){
    echo $data . " ";
}
//menghapus satu array indeks ke 1
unset($nama[1]);
echo "<br>";
echo "isi array nama = ";
//menampilkan seluruh isi array
foreach($nama as $data){
    echo $data . " ";
}

$student = array(
    "nama" => "Indra", 
    "umur" => 25, 
    "kelas" => "X");

    $matrix = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
    
    $buah = []; // Mendeklarasikan array kosong
    $buah = ["mangga", "semangga", "melon","strobery"];

    $buah = array("mangga", "semangga", "melon","strobery");    
    //menampilkan array
    echo $buah[2];

    foreach($buah as $data){
        echo $data . " ";
    }


