<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ime_razreda=$_POST["ime_razreda"];
$id_otroka = $_POST["id_otroka"];
$id_zupnije = $_POST["id_zupnije"];

/* SQL poizvedba */
$sql = "INSERT INTO razredi (id_otroka, id_zupnije)
        VALUES ('$ime_razreda','$id_otroka', '$id_zupnije')";

$rezultat_sql = mysqli_query($conn, $sql);

/* obdelava rezultata */
if ($rezultat_sql) {
    echo "Razred je bil uspešno vstavljen v bazo.";
} else {
    echo "Napaka: razred ni bil vstavljen.<br>";
    echo mysqli_error($conn);
}


/* zapiranje povezave */
mysqli_close($conn);
?>
