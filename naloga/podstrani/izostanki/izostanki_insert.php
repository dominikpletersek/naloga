<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$datum_izostanka = $_POST["datum_izostanka"];
$razlog = $_POST["razlog"];
$opravicljivost = $_POST["opravicljivost"]; 
$id_otroka = $_POST["id_otroka"];

/* SQL poizvedba */
$sql = "INSERT INTO izostanki (datum_izostanka, razlog, opravicljivost, id_otroka)
        VALUES ('$datum_izostanka', '$razlog', '$opravicljivost', '$id_otroka')";

$rezultat_sql = mysqli_query($conn, $sql);

/* obdelava rezultata */
if ($rezultat_sql) {
    echo "Izostanek je bil uspešno vstavljen v bazo.";
} else {
    echo "Napaka: izostanek ni bil vstavljen.<br>";
    echo mysqli_error($conn);
}


/* zapiranje povezave */
mysqli_close($conn);
?>
