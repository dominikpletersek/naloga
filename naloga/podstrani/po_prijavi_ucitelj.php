<?php include "../seja.php"?>
<!DOCTYPE html>
<html lang="sl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Seznam otrok</title>

<link rel="stylesheet" href="css/vpisovanje.css">

</head>
<body>

<?php include "navigacija.php" ?>
<div class="container">
    <?php
if (!isset($_SESSION["ime"])) {
    header("Location: ../index.php");
    exit;
}
$ime=$_SESSION["ime"];
?>
<h1>Izberi razred in župnijo</h1>


<form class="filter-form" action="" method="post">

<select name="razred">
<option value="1">1. Razred</option>
<option value="2">2. Razred</option>
<option value="3">3. Razred</option>
<option value="4">4. Razred</option>
<option value="5">5. Razred</option>
<option value="6">6. Razred</option>
<option value="7">7. Razred</option>
<option value="8">8. Razred</option>
<option value="9">9. Razred</option>
</select>

<?php
$ime=$_SESSION["ime"];
include "povezava.php";

$sql = "SELECT id  FROM ucitelji WHERE uporabnisko_ime = '$ime'";
$rezultat = mysqli_query($conn,$sql);

while ($vrstica = mysqli_fetch_assoc($rezultat)){
$x=$vrstica["id"];
}
$_SESSION["id"]=$x;

$sql = "SELECT id, ime FROM zupnije";
$rezultat = mysqli_query($conn,$sql);

echo '<select name="zupnija">';

while ($vrstica = mysqli_fetch_assoc($rezultat)){

echo '<option value="'.$vrstica["id"].'">'.$vrstica["ime"].'</option>';

}

echo '</select>';

mysqli_close($conn);

?>

<button type="submit">Prikaži otroke</button>

</form>

<?php

if(isset($_POST["razred"]) && isset($_POST["zupnija"])){

$razred=$_POST["razred"];
$zupnija=$_POST["zupnija"];

include "povezava.php";

$conn = mysqli_connect($servername,$username,$password,$dbname);

$sql="SELECT * FROM otroci 
WHERE razred=".$razred." 
AND id_zupnije=".$zupnija;

$result=mysqli_query($conn,$sql);

echo '<div class="children-grid">';

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){

echo '<div class="child-card">';

echo '<h3>'.$row["ime"].' '.$row["priimek"].'</h3>';

echo '<div class="child-info">';
echo '<span>ID:</span> '.$row["id"];
echo '</div>';

echo '<div class="child-info">';
echo '<span>Datum rojstva:</span> '.$row["datum_rojstva"];
echo '</div>';

echo '<div class="child-info">';
echo '<span>Datum krsta:</span> '.$row["datum_krsta"];
echo '</div>';

echo '<div class="child-info">';
echo '<span>Razred:</span> '.$row["razred"];
echo '</div>';

echo '<a class="absence-button" href="izostanki/izostanki_insert_iz_vpisa.php?a='.$row['id'].'">
Vpiši izostanek
</a>';

echo '</div>';

}

}else{

echo "<p>Ni podatkov v tabeli otroci.</p>";

}

echo '</div>';

mysqli_close($conn);

}

?>

</div>

</body>
</html>