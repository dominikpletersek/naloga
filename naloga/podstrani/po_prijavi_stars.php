<?php include "../seja.php" ?>
<!DOCTYPE html>
<html lang="sl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal starša</title>
<link rel="stylesheet" href="css/po_prijavi.css">
</head>

<body>

<header>
<h1>Pozdravljeni, starš</h1>
<a href="../odjava.php" class="odjava">odjava</a>
</header>

<div class="container">

<?php
include "povezava.php";
if (!isset($_SESSION["ime"])) {
    header("Location: ../index.php");
    exit;
}
$ime=$_SESSION["ime"];


$sql5 = "SELECT id, ime, priimek, dekliski_priimek, datum_rojstva, poklic, telefon, naslov, id_otroka
FROM starsi WHERE uporabnisko_ime='".$ime."'";

$result5 = mysqli_query($conn, $sql5);

if (mysqli_num_rows($result5) > 0) {

$row5 = mysqli_fetch_assoc($result5);

echo "<div class='card'>";
echo "<h2>Vaši osebni podatki</h2>";

echo "<div class='item'><span class='label'>Ime:</span> ".$row5['ime']."</div>";
echo "<div class='item'><span class='label'>Priimek:</span> ".$row5['priimek']."</div>";
echo "<div class='item'><span class='label'>Dekliški priimek:</span> ".$row5['dekliski_priimek']."</div>";
echo "<div class='item'><span class='label'>Datum rojstva:</span> ".$row5['datum_rojstva']."</div>";
echo "<div class='item'><span class='label'>Poklic:</span> ".$row5['poklic']."</div>";
echo "<div class='item'><span class='label'>Telefon:</span> ".$row5['telefon']."</div>";
echo "<div class='item'><span class='label'>Naslov:</span> ".$row5['naslov']."</div>";

echo "</div>";

$id = $row5['id_otroka'];

} else {
echo "<div class='card'>Ni podatkov v tabeli starši.</div>";
}



$sql = "SELECT * FROM otroci WHERE id='".$id."'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {

$row = mysqli_fetch_assoc($result);

echo "<div class='card'>";
echo "<h2>Osebni podatki vašega otroka</h2>";

echo "<div class='item'><span class='label'>Ime:</span> ".$row['ime']."</div>";
echo "<div class='item'><span class='label'>Priimek:</span> ".$row['priimek']."</div>";
echo "<div class='item'><span class='label'>Datum rojstva:</span> ".$row['datum_rojstva']."</div>";
echo "<div class='item'><span class='label'>Datum krsta:</span> ".$row['datum_krsta']."</div>";
echo "<div class='item'><span class='label'>Razred:</span> ".$row['razred']."</div>";

echo "</div>";

}



$sql2 = "SELECT ocena, snov FROM ocene
inner join otroci on otroci.id=ocene.id_otroka
where otroci.id='".$id."'";

$result2 = mysqli_query($conn,$sql2);

echo "<div class='card'>";
echo "<h2>Ocene vašega otroka</h2>";

while($row2 = mysqli_fetch_assoc($result2)){

echo "<div class='item'>";
echo "<span>".$row2['snov']."</span>";
echo "<span><b>".$row2['ocena']."</b></span>";
echo "</div>";

}

echo "</div>";



$sql3 = "SELECT datum_izostanka, razlog, opravicljivost
FROM izostanki
inner join otroci on otroci.id=izostanki.id_otroka
where otroci.id='".$id."'
ORDER BY datum_izostanka DESC";

$result3 = mysqli_query($conn,$sql3);

echo "<div class='card'>";
echo "<h2>Izostanki vašega otroka</h2>";

while($row3 = mysqli_fetch_assoc($result3)){

echo "<div class='item'>";
echo "<span>".$row3['datum_izostanka']."</span>";
echo "<span>".$row3['razlog']."</span>";
echo "<span>".$row3['opravicljivost']."</span>";
echo "</div>";

}

echo "</div>";



$sql4 = "SELECT ucitelji.ime, ucitelji.priimek, telefon, email
FROM ucitelji
inner join otroci on otroci.id_ucitelja=ucitelji.id
where otroci.id='".$id."'";

$result4 = mysqli_query($conn,$sql4);

if (mysqli_num_rows($result4) > 0) {

$row4 = mysqli_fetch_assoc($result4);

echo "<div class='card'>";
echo "<h2>Podatki učitelja</h2>";

echo "<div class='item'><span class='label'>Ime:</span> ".$row4['ime']."</div>";
echo "<div class='item'><span class='label'>Priimek:</span> ".$row4['priimek']."</div>";
echo "<div class='item'><span class='label'>Telefon:</span> ".$row4['telefon']."</div>";
echo "<div class='item'><span class='label'>Email:</span> ".$row4['email']."</div>";

echo "</div>";

}

mysqli_close($conn);
?>

</div>

</body>
</html>