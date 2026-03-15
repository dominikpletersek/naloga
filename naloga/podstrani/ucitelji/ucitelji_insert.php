<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava z bazo ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ime = $_POST["ime"];
$priimek = $_POST["priimek"];
$telefon = $_POST["telefon"];
$email = $_POST["email"];

/* SQL poizvedba */
$sql = "INSERT INTO ucitelji (ime, priimek, telefon, email)
        VALUES ('$ime', '$priimek', '$telefon', '$email')";

$rezultat_sql = mysqli_query($conn, $sql);

/* izpis rezultata */
if ($rezultat_sql) {
    echo "Učitelj je bil uspešno vstavljen v bazo.";
} else {
    echo "Napaka: učitelj ni bil vstavljen.<br>";
    echo mysqli_error($conn);
}

/* zapiranje povezave */
mysqli_close($conn);
?>
