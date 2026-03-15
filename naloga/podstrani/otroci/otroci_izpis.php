<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otroci</title>
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
        $sql = "SELECT 
                    id, 
                    ime, 
                    priimek, 
                    datum_rojstva, 
                    datum_krsta, 
                    razred, 
                    id_zupnije, 
                    id_ucitelja 
                FROM otroci";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Priimek</th>
                    <th>Datum rojstva</th>
                    <th>Datum krsta</th>
                    <th>Razred</th>
                    <th>ID župnije</th>
                    <th>ID učitelja</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ime'] . "</td>";
                echo "<td>" . $row['priimek'] . "</td>";
                echo "<td>" . $row['datum_rojstva'] . "</td>";
                echo "<td>" . $row['datum_krsta'] . "</td>";
                echo "<td>" . $row['razred'] . "</td>";
                echo "<td>" . $row['id_zupnije'] . "</td>";
                echo "<td>" . $row['id_ucitelja'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Ni podatkov v tabeli otroci.";
        }

        mysqli_close($conn);
        ?>

</body>
</html>
