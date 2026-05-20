<link rel="stylesheet" href="../css/insert.css">
<?php
include "../povezava.php";

/* preverjanje povezave */
if ($conn == null) {
    die("Povezava ni uspešna!");
}

/* prevzem podatkov iz obrazca (POST) */
$ime = $_POST["ime"];
$priimek = $_POST["priimek"];
$datum_rojstva = $_POST["datum_rojstva"];
$datum_krsta = $_POST["datum_krsta"];
$razred = $_POST["razred"];
$id_zupnije = $_POST["id_zupnije"];
$id_ucitelja = $_POST["id_ucitelja"];

/* SQL poizvedba */
$sql = "INSERT INTO otroci (ime, priimek, datum_rojstva, datum_krsta, razred, id_zupnije, id_ucitelja)
        VALUES ('$ime', '$priimek', '$datum_rojstva', '$datum_krsta', '$razred', '$id_zupnije', '$id_ucitelja')";

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