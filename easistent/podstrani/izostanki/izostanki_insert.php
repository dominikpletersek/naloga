<link rel="stylesheet" href="../css/insert.css">
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
?>
<div class="container">
    <?php
if($rezultat_sql) {
echo '<div class="error">Podatek je vstavljen v bazo</div>';
}
else {
    echo '<div class="error">Podatek ni vstavljen v bazo</div>';
}
/* zapiranje povezave */
mysqli_close($conn);
?>
<a href="../po_prijavi_admin.php">Nazaj</a>

