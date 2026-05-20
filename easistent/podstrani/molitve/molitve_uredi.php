<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi molitev</title>
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
$naslov_molitve = $_GET["naslov_molitve"];

// SQL UPDATE
$sql = "UPDATE molitve 
        SET naslov_molitve='$naslov_molitve'
        WHERE id='$id'";

mysqli_query($conn, $sql);

// preusmeritev na izpis
header("Location: molitve_izpis.php");
?>

</body>
</html>