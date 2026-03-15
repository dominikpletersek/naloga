<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/izpis.css">
    <title>Učitelji</title>
</head>
<body>

        <?php
        // povezava z bazo
        include "../povezava.php";

        if ($conn == null) {
            die("Povezava z bazo ni uspela!");
        }

        // SQL poizvedba
        $sql = "SELECT id, ime, priimek, telefon, email FROM ucitelji";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Priimek</th>
                    <th>Telefon</th>
                    <th>Email</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ime'] . "</td>";
                echo "<td>" . $row['priimek'] . "</td>";
                echo "<td>" . $row['telefon'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Ni podatkov v tabeli učitelji.";
        }

        mysqli_close($conn);
        ?>

</body>
</html>
