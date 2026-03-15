<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi otroka</title>
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
$datum_rojstva = $_GET["datum_rojstva"];
$datum_krsta = $_GET["datum_krsta"];
$razred = $_GET["razred"];
$id_zupnije = $_GET["id_zupnije"];
$id_ucitelja = $_GET["id_ucitelja"];

// SQL UPDATE
$sql = "UPDATE otroci 
        SET ime='$ime',
            priimek='$priimek',
            datum_rojstva='$datum_rojstva',
            datum_krsta='$datum_krsta',
            razred='$razred',
            id_zupnije='$id_zupnije',
            id_ucitelja='$id_ucitelja'
        WHERE id='$id'";

mysqli_query($conn, $sql);

// preusmeritev na izpis
header("Location: otroci_izpis.php");

?>

</body>
</html>