<link rel="stylesheet" href="../css/insert.css">
<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ime_razreda=$_POST["ime_razreda"];
$id_otroka = $_POST["id_otroka"];
$id_zupnije = $_POST["id_zupnije"];

/* SQL poizvedba */
$sql = "INSERT INTO razredi (ime_razreda, id_otroka, id_zupnije)
        VALUES ('$ime_razreda','$id_otroka', '$id_zupnije')";

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
