<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// Poizvedba za tabelo izostanki
$sql = "SELECT id, datum_izostanka, razlog, opravicljivost, id_otroka FROM izostanki";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Datum izostanka</th>
            <th>Razlog</th>
            <th>Opravičljivost</th>
            <th>ID otroka</th>
            <th>Uredi</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['datum_izostanka'] . "</td>";
        echo "<td>" . $row['razlog'] . "</td>";
        echo "<td>" . ($row['opravicljivost'] ? "Da" : "Ne") . "</td>";
        echo "<td>" . $row['id_otroka'] . "</td>";
        echo '<td><a href="uredi_izostanki_obrazec.php?id='.$row["id"].'&datum='.$row["datum_izostanka"].'&razlog='.$row["razlog"].'&opravicljivost='.$row["opravicljivost"].'&id_otroka='.$row["id_otroka"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli izostanki.";
}

mysqli_close($conn);
?>