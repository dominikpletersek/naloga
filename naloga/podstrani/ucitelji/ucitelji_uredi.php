<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi učitelja</title>
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
$priimek = $_GET["priimek"];
$telefon = $_GET["telefon"];
$email = $_GET["email"];

// SQL UPDATE
$sql = "UPDATE ucitelji 
        SET ime='$ime',
            priimek='$priimek',
            telefon='$telefon',
            email='$email'
        WHERE id='$id'";

mysqli_query($conn, $sql);

// preusmeritev na izpis
header("Location: ucitelji_izpis.php");

?>

</body>
</html>