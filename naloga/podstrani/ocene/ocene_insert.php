<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava z bazo ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ocena = $_POST["ocena"];
$snov = $_POST["snov"];
$id_otroka = $_POST["id_otroka"];

/* SQL poizvedba */
$sql = "INSERT INTO ocene (ocena, snov, id_otroka)
        VALUES ('$ocena', '$snov', '$id_otroka')";

$rezultat_sql = mysqli_query($conn, $sql);

/* izpis rezultata */
if ($rezultat_sql) {
    echo "Ocena je bila uspešno vstavljena v bazo.";
} else {
    echo "Napaka: ocena ni bila vstavljena.<br>";
    echo mysqli_error($conn);
}

/* zapiranje povezave */
mysqli_close($conn);
?>
