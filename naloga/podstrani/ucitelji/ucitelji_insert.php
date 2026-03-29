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
$telefon = $_POST["telefon"];
$email = $_POST["email"];

/* SQL poizvedba */
$sql = "INSERT INTO ucitelji (ime, priimek, telefon, email)
        VALUES ('$ime', '$priimek', '$telefon', '$email')";

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
