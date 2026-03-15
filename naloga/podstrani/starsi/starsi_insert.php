<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava z bazo ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ime = $_POST["ime"];
$priimek = $_POST["priimek"];
$dekliski_priimek = $_POST["dekliski_priimek"];
$datum_rojstva = $_POST["datum_rojstva"];
$poklic = $_POST["poklic"];
$telefon = $_POST["telefon"];
$naslov = $_POST["naslov"];
$id_otroka = $_POST["id_otroka"];

/* SQL poizvedba */
$sql = "INSERT INTO starsi 
(ime, priimek, `dekliški_priimek`, datum_rojstva, poklic, telefon, naslov, id_otroka)
VALUES 
('$ime', '$priimek', '$dekliski_priimek', '$datum_rojstva', '$poklic', '$telefon', '$naslov', '$id_otroka')";

$rezultat_sql = mysqli_query($conn, $sql);

/* izpis rezultata */
if ($rezultat_sql) {
    echo "Starš je bil uspešno vstavljen v bazo.";
} else {
    echo "Napaka: starš ni bil vstavljen.<br>";
    echo mysqli_error($conn);
}

/* zapiranje povezave */
mysqli_close($conn);
?>
