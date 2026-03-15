<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi starša</title>
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
$dekliski_priimek = $_GET["dekliski_priimek"];
$datum_rojstva = $_GET["datum_rojstva"];
$poklic = $_GET["poklic"];
$telefon = $_GET["telefon"];
$naslov = $_GET["naslov"];
$id_otroka = $_GET["id_otroka"];

// SQL UPDATE
$sql = "UPDATE starsi 
        SET ime='$ime',
            priimek='$priimek',
            dekliski_priimek='$dekliski_priimek',
            datum_rojstva='$datum_rojstva',
            poklic='$poklic',
            telefon='$telefon',
            naslov='$naslov',
            id_otroka='$id_otroka'
        WHERE id='$id'";

mysqli_query($conn, $sql);

// preusmeritev na izpis
header("Location: starsi_izpis.php");

?>

</body>
</html>