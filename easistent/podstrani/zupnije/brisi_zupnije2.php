<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";
// Preveri povezavo
if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// SQL poizvedba za pridobivanje podatkov iz tabele župnije
$sql = "SELECT id, ime, naslov, kraj FROM zupnije";

// Izvedi poizvedbo
$result = mysqli_query($conn, $sql);

// Preveri, če so podatki vrnjeni
if (mysqli_num_rows($result) > 0) {
    // Izpiši podatke v tabeli
    echo "<table border='1'>";
    echo "<tr>
            <th>Ime</th>
            <th>Naslov</th>
            <th>Kraj</th>
            <th>Akcija</th>
          </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['naslov'] . "</td>";
        echo "<td>" . $row['kraj'] . "</td>";
        echo '<td><a href="brisi_zupnije.php?id='.$row["id"].'">Briši</a></td>';
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Ni podatkov v tabeli župnije.";
}

// Zapri povezavo
mysqli_close($conn);
?>
