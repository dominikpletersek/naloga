<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/izpis.css">
    <title>Razredi</title>
</head>
<body>

        <?php
        // povezava z bazo
        include "../povezava.php";

        if ($conn == null) {
            die("Povezava z bazo ni uspela!");
        }

        // SQL poizvedba
        $sql = "SELECT ime_razreda, zupnije.ime as zime, otroci.ime as oime, otroci.priimek
         FROM razredi
        inner join otroci on razredi.id_otroka=otroci.id 
        inner join zupnije on zupnije.id=razredi.id_zupnije";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Ime razreda</th>
                    <th>Otrok</th>
                    <th>Župnija</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ime_razreda'] . "</td>";
                echo "<td>" . $row['oime']." ".$row["priimek"] . "</td>";
                echo "<td>" . $row['zime'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Ni podatkov v tabeli razredi.";
        }

        mysqli_close($conn);
        ?>

</body>
</html>
