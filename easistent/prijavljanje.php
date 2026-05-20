<?php include "seja.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="podstrani/css/prijavljanje.css">
</head>
<body>    
<?php
include "podstrani/povezava.php";
$ime= $_POST["ime"];
$geslo=$_POST["geslo"];
$_SESSION["ime"]=$ime;
$_SESSION["geslo"]=$geslo;

$conn = mysqli_connect($servername, $username, $password, $dbname);



/* SQL poizvedba */
$sql = "SELECT uporabnisko_ime, geslo FROM uporabniki";
$rezultat = mysqli_query($conn, $sql);


if ($rezultat) {

    while ($vrstica = mysqli_fetch_assoc($rezultat)) {
	  if($ime==$vrstica["uporabnisko_ime"] && $geslo==$vrstica["geslo"]) {
        if($ime[0]=="U" || $ime[0]=="u")
            {
                header("Location: podstrani/po_prijavi_ucitelj.php");
            }
            else if($ime[0]=="S" || $ime[0]=="s")
            {
                header("Location: podstrani/po_prijavi_stars.php");
            }
            else if($ime[0]=="O" || $ime[0]=="o")
            {
                header("Location: podstrani/po_prijavi_otrok.php");
            }
             else if($ime[0]=="A" || $ime[0]=="a")
            {
                header("Location: podstrani/po_prijavi_admin.php");
            }
      }

      
    }
}
?>
<div class="container">

<?php
echo '<div class="error">Napačno uporabniško ime ali geslo</div>';
?>
<?php
/* zapiranje povezave */
mysqli_close($conn);
?>
<a href="index.php">Nazaj</a>
</div>
</body>
</html>