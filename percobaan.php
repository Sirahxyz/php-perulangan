//Perulangan For
<?php
    for ($i = 0; $i < 10; $i++) {
        echo "ini perulangan ke-$i";
        echo"\n";
    }
?>

//Perulangan While
<?php

    $ulangi = 0;

    while ($ulangi < 10) {
        echo "Ini adalah perulangan ke-$ulangi";
        $ulangi++;
        echo"\n";
    }
?>

//Perulangan Do/While
<?php
   
   $ulangi = 10;

    do {
        echo "ini adalah perulangan ke-$ulangi";
        $ulangi++;
    } while ($ulangi > 10);
?>

// Perulangan Foreach
<?php
    $books = [
        "panduan Belajar PHP untuk pemula",
        "Membangun Aplikasi Web dengan PHP",
        "Tutorial PHP dan MySQL",
        "Membuat Chat Bit dengan PHP"
    ];

    echo"Judul Buku PHP:";
    echo"\n";
    foreach ($books as $buku) {
        echo "$buku";
        echo "\n";
    }

?>

//Perulangan Bersarang

<?php
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "ini perulangan ke ($i, $j";
        echo "\n";
    }
}
?>

\\ kedua
<?php
$i = 0;
    while ($i < 10) {
        for ($j = 0; $j < 10; $j++) {
            echo "ini perulangan ke ($i, $j)";
            echo "\n";
        }
        $i++;
    }
?>
