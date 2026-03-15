<?php include "../seja.php";?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<?php if (!isset($_SESSION["ime"])) {
    header("Location: ../index.php");
    exit;
}
$ime=$_SESSION["ime"]; ?>
<h1>Pozdravljen Admin</h1>

<ul>

    <!-- ŽUPNIJE -->
    <li>
        <h2>Župnije</h2>
        <ul>
            <li><a href="zupnije/zupnije_insert_obrazec.php">Vstavljanje</a></li>
            <li><a href="zupnije/zupnije_izpis.php">Izpis</a></li>
            <li><a href="zupnije/brisi_zupnije2.php">Brisanje</a></li>
            <li><a href="zupnije/uredi_zupnije.php">Urejanje</a></li>
        </ul>
    </li>

    <!-- RAZREDI -->
    <li>
        <h2>Razredi</h2>
        <ul>
            <li><a href="razredi/razredi_insert_obrazec.php">Vstavljanje</a></li>
            <li><a href="razredi/razredi_izpis.php">Izpis</a></li>
            <li><a href="razredi/brisi_razredi2.php">Brisanje</a></li>
            <li><a href="razredi/uredi_razredi.php">Urejanje</a></li>
        </ul>
    </li>

    <!-- OTROCI -->
    <li>
        <h2>Otroci</h2>
        <ul>
            <li><a href="otroci/otroci_insert_obrazec.php">Vstavljanje</a></li>
            <li><a href="otroci/otroci_izpis.php">Izpis</a></li>
            <li><a href="otroci/brisi_otroci2.php">Brisanje</a></li>
            <li><a href="otroci/uredi_otroci.php">Urejanje</a></li>
        </ul>
    </li>

    <!-- STARŠI -->
    <li>
        <h2>Starši</h2>
        <ul>
            <li><a href="starsi/starsi_insert_obrazec.php">Vstavljanje</a></li>
            <li><a href="starsi/starsi_izpis.php">Izpis</a></li>
            <li><a href="starsi/brisi_starsi2.php">Brisanje</a></li>
            <li><a href="starsi/uredi_starsi.php">Urejanje</a></li>
        </ul>
    </li>

    <!-- MOLITVE -->
    <li>
        <h2>Molitve</h2>
        <ul>
            <li><a href="molitve/molitve_insert_obrazec.php">Vstavljanje</a></li>
            <li><a href="molitve/molitve_izpis.php">Izpis</a></li>
            <li><a href="molitve/brisi_molitve2.php">Brisanje</a></li>
            <li><a href="molitve/uredi_molitve.php">Urejanje</a></li>
        </ul>
    </li>

    <!-- OCENE -->
    <li>
        <h2>Ocene</h2>
        <ul>
            <li><a href="ocene/ocene_insert_obrazec.php">Vstavljanje</a></li>
            <li><a href="ocene/ocene_izpis.php">Izpis</a></li>
            <li><a href="ocene/brisi_ocene2.php">Brisanje</a></li>
            <li><a href="ocene/uredi_ocene.php">Urejanje</a></li>
        </ul>
    </li>

    <!-- IZOSTANKI -->
    <li>
        <h2>Izostanki</h2>
        <ul>
            <li><a href="izostanki/izostanki_insert_obrazec.php">Vstavljanje</a></li>
            <li><a href="izostanki/izostanki_izpis.php">Izpis</a></li>
            <li><a href="izostanki/brisi_izostanki2.php">Brisanje</a></li>
            <li><a href="izostanki/uredi_izostanki.php">Urejanje</a></li>
        </ul>
    </li>

    <!-- UČITELJI -->
    <li>
        <h2>Učitelji</h2>
        <ul>
            <li><a href="ucitelji/ucitelji_insert_obrazec.php">Vstavljanje</a></li>
            <li><a href="ucitelji/ucitelji_izpis.php">Izpis</a></li>
            <li><a href="ucitelji/brisi_ucitelji2.php">Brisanje</a></li>
            <li><a href="ucitelji/uredi_ucitelji.php">Urejanje</a></li>
        </ul>
    </li>
    
    <li>
        <h2>Drugo</h2>
    <a href="ponastavi.php">Ponastavi za novo leto</a>
    <a href="../odjava.php">Odjava</a>
    </li>

</ul>

</body>
</html>
