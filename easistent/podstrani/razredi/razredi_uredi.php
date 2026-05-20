<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi razred</title>
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
$id_otroka = $_GET["id_otroka"];
$id_zupnije = $_GET["id_zupnije"];

// SQL UPDATE
$sql = "UPDATE razredi 
        SET id_otroka='$id_otroka',
            id_zupnije='$id_zupnije'
        WHERE id='$id'";

mysqli_query($conn, $sql);

// preusmeritev na izpis
header("Location: razredi_izpis.php");

?>

</body>
</html>