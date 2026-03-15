<?php

include "../povezava.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);
/* preverjanje povezave */
if ($conn == null) {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$id_otroka = $_GET["a"];
$date=date("Y/m/d");

/* SQL poizvedba */
$sql = "INSERT INTO izostanki (datum_izostanka, razlog, opravicljivost, id_otroka)
        VALUES ('$date', '', 'Neurejeno', '$id_otroka')";

$rezultat_sql = mysqli_query($conn, $sql);

/* obdelava rezultata */
if ($rezultat_sql) {
    echo "izostanek vnešen";
    exit();
} else {
    echo "napaka pri vnosu izostanka";
    exit();
}

/* zapiranje povezave */
mysqli_close($conn);
?>
