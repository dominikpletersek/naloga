<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// Poizvedba za tabelo razredi
$sql = "SELECT id, id_otroka, id_zupnije FROM razredi";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>ID otroka</th>
            <th>ID župnije</th>
            <th>Uredi</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['id_otroka'] . "</td>";
        echo "<td>" . $row['id_zupnije'] . "</td>";
        echo '<td><a href="uredi_razredi_obrazec.php?id='.$row["id"].'&id_otroka='.$row["id_otroka"].'&id_zupnije='.$row["id_zupnije"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli razredi.";
}

mysqli_close($conn);
?>