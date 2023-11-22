<?php
for($a=1;$a<=10;$a++){
    echo $a. " Raffi";
    echo "<br>";
}
echo "<br>";
for($a=1;$a<10;$a=$a+2){ //$a+=2
    echo "$a ";
}
echo "<br>";
for($a=10;$a>=1;$a--){
    echo "$a ";
}
echo "<br>";
$b=1;
while($b<10){
    echo $b;
    $b++;
}
echo "<br>";
$jawaban=true;
while($jawaban == false){
    echo "X TJA 1";
    echo "<br>";
}
echo "<br>";
$nilai=true;
do{
    echo "SKOMDA ";
    echo "<br>";
} while($nilai==false);

echo "<br>";
for($b=1;$b<=5;$b++){//baris
    for($a=1;$a<=5;$a++){ //kolom
        echo "$a ";
    }
    echo "<br>";
}

$fruits = array("Apel", "Jeruk", "Pisang", "Mangga");
foreach ($fruits as $fruit) {
    echo "Buah: $fruit<br>";
}
