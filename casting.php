<!DOCTYPE html>
<html>

<body>
    <pre>

<?php
$Sa = 7; // Integer
$b = 6.78; // Float
$c = "30 kilometer"; // String
$d = "kilometer 30"; // String
$e = "halo"; // String
$f = true; // Boolean
$g = null; // NULL

// Konversi ke integer
$a = (int) $Sa;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

// Untuk memverifikasi tipe dari objek apapun di PHP, gunakan fungsi var_dump():
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
?>

</pre>

    <p>Perhatikan bahwa ketika mengonversi string yang dimulai dengan angka, fungsi (int) akan menggunakan angka tersebut. Jika tidak dimulai dengan angka, fungsi (int) akan mengonversi string menjadi angka 0.</p>

</body>

</html>