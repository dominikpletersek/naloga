<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// Poizvedba za tabelo molitve
$sql = "SELECT id, naslov_molitve FROM molitve";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>Naslov molitve</th>
            <th>Uredi</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['naslov_molitve'] . "</td>";
        echo '<td><a href="uredi_molitve_obrazec.php?id='.$row["id"].'&naslov='.$row["naslov_molitve"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli molitve.";
}

mysqli_close($conn);
?>