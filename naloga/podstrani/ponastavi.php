<?php
include "povezava.php";

if (!$conn) {
    die("Povezava z bazo ni uspela: " . mysqli_connect_error());
}

// SQL za brisanje vseh izostankov
$sql1 = "DELETE FROM izostanki";
mysqli_query($conn, $sql1);

// SQL za brisanje vseh razredov
$sql2 = "DELETE FROM razredi";
mysqli_query($conn, $sql2);

// SQL za brisanje vseh ocen
$sql3 = "DELETE FROM ocene";
mysqli_query($conn, $sql3);

// Zapri povezavo
mysqli_close($conn);

// Preusmeritev nazaj na izpis izostankov
echo "Vse je pripravljeno.";
exit();
?>
