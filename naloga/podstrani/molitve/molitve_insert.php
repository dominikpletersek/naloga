<link rel="stylesheet" href="../css/insert.css">
<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$naslov_molitve = $_POST["naslov_molitve"];

/* SQL poizvedba */
$sql = "INSERT INTO molitve (naslov_molitve)
        VALUES ('$naslov_molitve')";

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