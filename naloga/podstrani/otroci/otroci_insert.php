<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ime = $_POST["ime"];
$priimek = $_POST["priimek"];
$datum_rojstva = $_POST["datum_rojstva"];
$datum_krsta = $_POST["datum_krsta"];
$razred = $_POST["razred"];
$id_zupnije = $_POST["id_zupnije"];
$id_ucitelja = $_POST["id_ucitelja"];

/* SQL poizvedba */
$sql = "INSERT INTO otroci (ime, priimek, datum_rojstva, datum_krsta, razred, id_zupnije, id_ucitelja)
        VALUES ('$ime', '$priimek', '$datum_rojstva', '$datum_krsta', '$razred', '$id_zupnije', '$id_ucitelja')";

$rezultat_sql = mysqli_query($conn, $sql);

/* obdelava rezultata */
if ($rezultat_sql) {
    echo "Otrok je bil uspešno vstavljen v bazo.";
} else {
    echo "Napaka: otrok ni bil vstavljen.<br>";
    echo mysqli_error($conn);
}


/* zapiranje povezave */
mysqli_close($conn);
?>
