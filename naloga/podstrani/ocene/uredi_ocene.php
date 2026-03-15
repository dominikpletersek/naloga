<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// Poizvedba za tabelo ocene
$sql = "SELECT id, ocena, snov, id_otroka FROM ocene";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Ocena</th>
            <th>Snov</th>
            <th>ID otroka</th>
            <th>Uredi</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['ocena'] . "</td>";
        echo "<td>" . $row['snov'] . "</td>";
        echo "<td>" . $row['id_otroka'] . "</td>";
        echo '<td><a href="uredi_ocene_obrazec.php?id='.$row["id"].'&ocena='.$row["ocena"].'&snov='.$row["snov"].'&id_otroka='.$row["id_otroka"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli ocene.";
}

mysqli_close($conn);
?>