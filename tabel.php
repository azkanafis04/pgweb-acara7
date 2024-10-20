<!DOCTYPE html>
<html>

<body>
    <pre>
<?php
$tim = array("Barcelona", "Real Madrid", "Bayern Munich", "Liverpool", "Manchester United");
$pelatih = array("Xavi", "Carlo Ancelotti", "Julian Nagelsmann", "Jürgen Klopp", "Erik ten Hag");
$juara = array(26, 35, 31, 19, 20); // Jumlah gelar liga yang dimiliki

echo "<table border='1'>";
echo "<tr><th>Tim</th><th>Pelatih</th><th>Jumlah Gelar Liga</th></tr>"; // Header tabel

for ($i = 0; $i < 5; $i++) {
    echo "<tr><td>" . $tim[$i] . "</td><td>" . $pelatih[$i] . "</td><td>" . $juara[$i] . "</td></tr>";
}

echo "</table>";
?>
</pre>
</body>

</html>