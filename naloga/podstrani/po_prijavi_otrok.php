<?php include "../seja.php" ?>
<!DOCTYPE html>
<html lang="sl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Portal učenca</title>
<link rel="stylesheet" type="text/css" href="css/po_prijavi.css" />
</head>
<body>

<header>
<h1>Pozdravljen, učenec</h1>
<a href="../odjava.php" class="odjava">odjava</a>
</header>

<div class="container">

<?php
if (!isset($_SESSION["ime"])) {
    header("Location: ../index.php");
    exit;
}
$ime=$_SESSION["ime"];


include "povezava.php";



if (!$conn) {
    die("Napaka povezave: " . mysqli_connect_error());
}

$sql = "SELECT * FROM otroci WHERE uporabnisko_ime='".$ime."'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_assoc($result);

echo "<div class='card'>";
echo "<h2>Osebni podatki</h2>";

echo "<div class='item'><span class='label'>Ime:</span> ".$row['ime']."</div>";
echo "<div class='item'><span class='label'>Priimek:</span> ".$row['priimek']."</div>";
echo "<div class='item'><span class='label'>Datum rojstva:</span> ".$row['datum_rojstva']."</div>";
echo "<div class='item'><span class='label'>Datum krsta:</span> ".$row['datum_krsta']."</div>";
echo "<div class='item'><span class='label'>Razred:</span> ".$row['razred']."</div>";

echo "</div>";

}

$sql2="SELECT ocena,snov FROM ocene 
inner join otroci on otroci.id=ocene.id_otroka 
where uporabnisko_ime='".$ime."'";

$result2=mysqli_query($conn,$sql2);

echo "<div class='card'>";
echo "<h2>Ocene</h2>";

while($row2=mysqli_fetch_assoc($result2)){

echo "<div class='item'>";
echo "<span>".$row2['snov']."</span>";
echo "<span><b>".$row2['ocena']."</b></span>";
echo "</div>";

}

echo "</div>";

$sql3="SELECT datum_izostanka, razlog, opravicljivost
FROM izostanki
inner join otroci on otroci.id=izostanki.id_otroka
where uporabnisko_ime='".$ime."'
ORDER BY datum_izostanka DESC";

$result3=mysqli_query($conn,$sql3);

echo "<div class='card'>";
echo "<h2>Izostanki</h2>";

while($row3=mysqli_fetch_assoc($result3)){

echo "<div class='item'>";
echo "<span>".$row3['datum_izostanka']."</span>";
echo "<span>".$row3['razlog']."</span>";
echo "<span>".$row3['opravicljivost']."</span>";
echo "</div>";

}

echo "</div>";

$sql4="SELECT ucitelji.ime, ucitelji.priimek, telefon, email
FROM ucitelji
inner join otroci on otroci.id_ucitelja=ucitelji.id
where otroci.uporabnisko_ime='".$ime."'";

$result4=mysqli_query($conn,$sql4);

if($row4=mysqli_fetch_assoc($result4)){

echo "<div class='card'>";
echo "<h2>Učitelj</h2>";

echo "<div class='item'><span class='label'>Ime:</span>".$row4['ime']."</div>";
echo "<div class='item'><span class='label'>Priimek:</span>".$row4['priimek']."</div>";
echo "<div class='item'><span class='label'>Telefon:</span>".$row4['telefon']."</div>";
echo "<div class='item'><span class='label'>Email:</span>".$row4['email']."</div>";

echo "</div>";

}

mysqli_close($conn);

?>

</div>

</body>
</html>