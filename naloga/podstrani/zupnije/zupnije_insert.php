<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn != null) {
    // echo "Povezava uspešna";
} else {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ime = $_POST["ime"];
$naslov = $_POST["naslov"];
$kraj = $_POST["kraj"];

/* SQL poizvedba */
$sql = "INSERT INTO zupnije (ime, naslov, kraj)
        VALUES ('$ime', '$naslov', '$kraj')";

$rezultat_sql = mysqli_query($conn, $sql);

/* obdelava rezultata */
if ($rezultat_sql) {
    echo "Župnija je bila uspešno vstavljena v bazo.";
} else {
    echo "Napaka: župnija ni bila vstavljena.<br>";
    echo mysqli_error($conn);
}


/* zapiranje povezave */
mysqli_close($conn);
?>
