<link rel="stylesheet" href="../css/insert.css">
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
?>
<div class="container">
    <?php
if($rezultat_sql) {
echo '<div class="error">Izostanek vnešen</div>';
}
else {
    echo '<div class="error">Izostanek ni vnešen</div>';
}
/* zapiranje povezave */
mysqli_close($conn);
?>
<a href="../po_prijavi_ucitelj.php">Nazaj</a>
