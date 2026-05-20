<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi izostanek</title>
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
$datum_izostanka = $_GET["datum_izostanka"];
$razlog = $_GET["razlog"];
$opravicljivost = $_GET["opravicljivost"];
$id_otroka = $_GET["id_otroka"];

// SQL UPDATE
$sql = "UPDATE izostanki 
        SET datum_izostanka='$datum_izostanka',
            razlog='$razlog',
            opravicljivost='$opravicljivost',
            id_otroka='$id_otroka'
        WHERE id='$id'";

mysqli_query($conn, $sql);

// preusmeritev na izpis
header("Location: izostanki_izpis.php");

?>

</body>
</html>