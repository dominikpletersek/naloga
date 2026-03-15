<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izostanki</title>
    <link rel="stylesheet" href="../css/izpis.css">
</head>
<body>

        <?php
        // povezava z bazo
        include "../povezava.php";

        if ($conn == null) {
            die("Povezava z bazo ni uspela!");
        }

        // SQL poizvedba
        $sql = "SELECT id, datum_izostanka, razlog, opravicljivost, id_otroka 
                FROM izostanki";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>ID</th>
                    <th>Datum izostanka</th>
                    <th>Razlog</th>
                    <th>Opravičljivost</th>
                    <th>ID otroka</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['datum_izostanka'] . "</td>";
                echo "<td>" . $row['razlog'] . "</td>";
                echo "<td>" . $row['opravicljivost']  . "</td>";
                echo "<td>" . $row['id_otroka'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Ni podatkov v tabeli izostanki.";
        }

        mysqli_close($conn);
        ?>


</body>
</html>
