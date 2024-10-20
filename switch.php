<!DOCTYPE html>
<html>

<body>

    <?php
    $makananFavorit = "nasi goreng";

    if ($makananFavorit == "nasi goreng") {
        echo "Makanan favoritmu adalah nasi goreng!";
    } elseif ($makananFavorit == "sate") {
        echo "Makanan favoritmu adalah sate!";
    } elseif ($makananFavorit == "bakso") {
        echo "Makanan favoritmu adalah bakso!";
    } else {
        echo "Makanan favoritmu bukan nasi goreng, sate, ataupun bakso.";
    }
    ?>

</body>

</html>