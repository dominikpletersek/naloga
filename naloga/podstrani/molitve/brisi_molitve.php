<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo ni uspela: " . mysqli_connect_error());
}

// Preveri, ali je id poslan
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // SQL za brisanje molitve
    $sql = "DELETE FROM molitve WHERE id='$id'";
    mysqli_query($conn, $sql);
}

// Zapri povezavo
mysqli_close($conn);

// Preusmeritev nazaj na izpis molitev
header("Location: molitve_izpis.php");
exit();
?>
