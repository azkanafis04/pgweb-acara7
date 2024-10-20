<!DOCTYPE html>
<html>

<body>

    <?php
    // Cek apakah jenis variabel adalah integer (skor pertandingan)
    $skor = 3;
    var_dump(is_int($skor));
    echo "<br>";

    // Cek lagi dengan nilai skor berbeda
    $skor = 3.5;
    var_dump(is_int($skor));
    ?>

</body>

</html>