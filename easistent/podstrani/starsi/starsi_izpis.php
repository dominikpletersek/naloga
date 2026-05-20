<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/izpis.css">
    <title>Starši</title>
</head>
<body>

        <?php
        // povezava z bazo
        include "../povezava.php";

        if ($conn == null) {
            die("Povezava z bazo ni uspela!");
        }

        // SQL poizvedba
        $sql = "SELECT 
                    starsi.ime, 
                    starsi.priimek, 
                    `dekliski_priimek`, 
                    starsi.datum_rojstva, 
                    poklic, 
                    starsi.telefon, 
                    starsi.naslov,
                    otroci.ime as oime, 
                    otroci.priimek as opri 
                FROM starsi inner join otroci on starsi.id_otroka=otroci.id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Ime</th>
                    <th>Priimek</th>
                    <th>Dekliški priimek</th>
                    <th>Datum rojstva</th>
                    <th>Poklic</th>
                    <th>Telefon</th>
                    <th>Naslov</th>
                    <th>Otrok</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ime'] . "</td>";
                echo "<td>" . $row['priimek'] . "</td>";
                echo "<td>" . $row['dekliski_priimek'] . "</td>";
                echo "<td>" . $row['datum_rojstva'] . "</td>";
                echo "<td>" . $row['poklic'] . "</td>";
                echo "<td>" . $row['telefon'] . "</td>";
                echo "<td>" . $row['naslov'] . "</td>";
                echo "<td>" . $row['oime']." ".$row["opri"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Ni podatkov v tabeli starši.";
        }

        mysqli_close($conn);
        ?>

</body>
</html>
