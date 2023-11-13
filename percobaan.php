<?php
    for ($i = 0; $i < 10; $i++) {
        echo "ini perulangan ke-$i";
        echo"\n";
    }
?>

<?php

    $ulangi = 0;

    while ($ulangi < 10) {
        echo "Ini adalah perulangan ke-$ulangi";
        $ulangi++;
        echo"\n";
    }
?>


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