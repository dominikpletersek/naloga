<link rel="stylesheet" href="../css/insert.css">
<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava z bazo ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ime = $_POST["ime"];
$priimek = $_POST["priimek"];
$dekliski_priimek = $_POST["dekliski_priimek"];
$datum_rojstva = $_POST["datum_rojstva"];
$poklic = $_POST["poklic"];
$telefon = $_POST["telefon"];
$naslov = $_POST["naslov"];
$id_otroka = $_POST["id_otroka"];

/* SQL poizvedba */
$sql = "INSERT INTO starsi 
(ime, priimek, `dekliški_priimek`, datum_rojstva, poklic, telefon, naslov, id_otroka)
VALUES 
('$ime', '$priimek', '$dekliski_priimek', '$datum_rojstva', '$poklic', '$telefon', '$naslov', '$id_otroka')";

$rezultat_sql = mysqli_query($conn, $sql);

?>
<div class="container">
    <?php
if($rezultat_sql) {
echo '<div class="error">Podatek je vstavljen v bazo</div>';
}
else {
    echo '<div class="error">Podatek ni vstavljen v bazo</div>';
}
/* zapiranje povezave */
mysqli_close($conn);
?>
<a href="../po_prijavi_admin.php">Nazaj</a>