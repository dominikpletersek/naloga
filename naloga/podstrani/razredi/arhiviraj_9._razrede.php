<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo ni uspela: " . mysqli_connect_error());
}

// SQL za brisanje vseh izostankov
$sql1 = 'UPDATE razredi SET ime_razreda ="Arhiv" WHERE ime_razreda LIKE "9%"';
mysqli_query($conn, $sql1);
header("location: ../upravljanje_zacetek.php?a=1");

?>
