<?php include "../../seja.php"; ?>
<!DOCTYPE html>
<html lang="sl">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Moji učenci</title>
<link rel="stylesheet" href="../css/uredi_upravljaj.css">

</head>

<body>

<?php 

$x=$_SESSION["id"];

include "../povezava.php";

if (!$conn) {
die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

$sql = "SELECT otroci.id, otroci.ime, otroci.priimek, otroci.datum_rojstva, datum_krsta, razred, otroci.id_zupnije, id_ucitelja 
FROM otroci
inner join ucitelji on otroci.id_ucitelja=ucitelji.id
where ucitelji.id='$x'";

$result = mysqli_query($conn, $sql);

echo '<div class="container">';
echo '<h1>Moji učenci</h1>';
echo '<div class="cards-grid">';

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {

echo '<div class="card">';

echo '<h2>'.$row['ime'].' '.$row['priimek'].'</h2>';

echo '<div class="info"><span>ID:</span> '.$row['id'].'</div>';
echo '<div class="info"><span>Datum rojstva:</span> '.$row['datum_rojstva'].'</div>';
echo '<div class="info"><span>Datum krsta:</span> '.$row['datum_krsta'].'</div>';
echo '<div class="info"><span>Razred:</span> '.$row['razred'].'</div>';
echo '<div class="info"><span>ID župnije:</span> '.$row['id_zupnije'].'</div>';
echo '<div class="info"><span>ID učitelja:</span> '.$row['id_ucitelja'].'</div>';

echo '<a class="uredi" href="uredi_otroci_obrazec.php?id='.$row["id"].'&ime='.$row["ime"].'&priimek='.$row["priimek"].'&datum_rojstva='.$row["datum_rojstva"].'&datum_krsta='.$row["datum_krsta"].'&razred='.$row["razred"].'&id_zupnije='.$row["id_zupnije"].'&id_ucitelja='.$row["id_ucitelja"].'">
Uredi
</a>';

echo '</div>';

}

} else {

echo "<p>Ni podatkov v tabeli otroci.</p>";

}

echo '</div>';

echo '<a class="domov" href="../upravljanje_zacetek.php">Domov</a>';

echo '</div>';

?>

</body>
</html>