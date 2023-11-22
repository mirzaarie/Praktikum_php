<?php
//perulangan 2 - 10
for($a=2;$a<=10;$a+=2){
    echo $a;
    echo "\n";

}
echo "PERULANGAN 10 -1";
echo "\n";

for($b=10;$b>=1;$b--){
    echo $b;
    echo "\n";
}

echo "PERULANGAN WHILE";
echo "\n";
$a="tidak";
while($a=="ya"){
    echo "Kucing";
    echo "\n";
}

echo "PERULANGAN DO WHILE";
echo "\n";
$kondisi="tidak";
do {
    echo "Gajah";
    echo "\n";
} while($kondisi=="ya");

print "\n";
for($x=1;$x<5;$x++){
    for($y=1;$y<5;$y++){
        echo "*";
    }
    echo "\n";
}

echo "\n";

for($x=1;$x<5;$x++){//baris
    for($y=$x;$y<5;$y++){//kolom
        echo "*";
    }
    echo "\n";
}
print "\n";
for($a=5;$a>0;$a--){
	for($b=5;$b>=$a;$b--){
		echo "*";
	}
	echo "\n";
	}

print("\n");

	for( $a=5;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " ";
	}
	for($a1=5;$a1>=$a;$a1--){
		echo"*";
	}
	echo"\n";
	}

