<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// Poizvedba za tabelo župnije
$sql = "SELECT id, ime, naslov, kraj FROM zupnije";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>Ime</th>
            <th>Naslov</th>
            <th>Kraj</th>
            <th>Uredi</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['naslov'] . "</td>";
        echo "<td>" . $row['kraj'] . "</td>";
        echo '<td><a href="uredi_zupnije_obrazec.php?id='.$row["id"].'&ime='.$row["ime"].'&naslov='.$row["naslov"].'&kraj='.$row["kraj"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli župnije.";
}

mysqli_close($conn);
?>