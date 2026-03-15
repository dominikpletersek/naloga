<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";
// Preveri povezavo
if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// SQL poizvedba za pridobivanje podatkov iz tabele razredi
$sql = "SELECT id, id_otroka, id_zupnije FROM razredi";

// Izvedi poizvedbo
$result = mysqli_query($conn, $sql);

// Preveri, če so podatki vrnjeni
if (mysqli_num_rows($result) > 0) {
    // Izpiši podatke v tabeli
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>ID otroka</th>
            <th>ID župnije</th>
            <th>Akcija</th>
          </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['id_otroka'] . "</td>";
        echo "<td>" . $row['id_zupnije'] . "</td>";
        echo '<td><a href="brisi_razredi.php?id='.$row["id"].'">Briši</a></td>';
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Ni podatkov v tabeli razredi.";
}

// Zapri povezavo
mysqli_close($conn);
?>
