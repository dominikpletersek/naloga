<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$naslov_molitve = $_POST["naslov_molitve"];

/* SQL poizvedba */
$sql = "INSERT INTO molitve (naslov_molitve)
        VALUES ('$naslov_molitve')";

$rezultat_sql = mysqli_query($conn, $sql);

/* obdelava rezultata */
if ($rezultat_sql) {
    echo "Molitev je bila uspešno vstavljena v bazo.";
} else {
    echo "Napaka: molitev ni bila vstavljena.<br>";
    echo mysqli_error($conn);
}

/* zapiranje povezave */
mysqli_close($conn);
?>
