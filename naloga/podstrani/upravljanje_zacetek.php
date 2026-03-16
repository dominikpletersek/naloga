
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/meni.css">
</head>
<body>
   
    <div class="container">
        <h1>Izberite, kaj želite narediti</h1>
    <ul>
        <li><a href="otroci/uredi_otroci.php">Uredi otroke</a></li>
        <li><a href="starsi/uredi_starsi.php">Uredi starše</a></li>
        <li><a href="ucitelji/uredi_ucitelji.php">Uredi učitelja</a></li>
        <li><a href="razredi/arhiviraj_9._razrede.php">Arhiviraj vse 9. razrede</a></li>
        <li><a href="po_prijavi_ucitelj.php">Domov</a></li>
    </ul>
    
    <?php 

    $a=0;
    if(isset($_GET["a"])) {
    $a=$_GET["a"];
}
if($a==1) {
    echo "Uspešno arhivirano.";
}
?>
</div>
</body>
</html>
