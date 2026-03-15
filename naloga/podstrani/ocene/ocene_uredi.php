<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi oceno</title>
</head>
<body>

<?php
include "../povezava.php";

if ($conn != null) {
    echo "Povezava uspesna";
} else {
    echo "Povezava ni uspesna!";
}

// podatki iz obrazca
$id = $_GET["id"];
$ocena = $_GET["ocena"];
$snov = $_GET["snov"];
$id_otroka = $_GET["id_otroka"];

// SQL UPDATE
$sql = "UPDATE ocene 
        SET ocena='$ocena',
            snov='$snov',
            id_otroka='$id_otroka'
        WHERE id='$id'";

mysqli_query($conn, $sql);

// preusmeritev na izpis
header("Location: ocene_izpis.php");

?>

</body>
</html>