<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi župnijo</title>
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
$ime = $_GET["ime"];
$naslov = $_GET["naslov"];
$kraj = $_GET["kraj"];

// SQL UPDATE
$sql = "UPDATE zupnije
        SET ime='$ime',
            naslov='$naslov',
            kraj='$kraj'
        WHERE id='$id'";

mysqli_query($conn, $sql);

// preusmeritev na izpis
header("Location: zupnije_izpis.php");

?>

</body>
</html>