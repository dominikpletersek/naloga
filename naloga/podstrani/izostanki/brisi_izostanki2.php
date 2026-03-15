<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";
// Preveri povezavo
if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// SQL poizvedba za pridobivanje podatkov iz tabele izostanki
$sql = "SELECT id, datum_izostanka, razlog, opravicljivost, id_otroka FROM izostanki";

// Izvedi poizvedbo
$result = mysqli_query($conn, $sql);

// Preveri, če so podatki vrnjeni
if (mysqli_num_rows($result) > 0) {
    // Izpiši podatke v tabeli
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Datum izostanka</th>
            <th>Razlog</th>
            <th>Opravičljivost</th>
            <th>ID otroka</th>
            <th>Akcija</th>
          </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['datum_izostanka'] . "</td>";
        echo "<td>" . $row['razlog'] . "</td>";
        echo "<td>" . $row['opravicljivost']. "</td>";
        echo "<td>" . $row['id_otroka'] . "</td>";
        echo '<td><a href="brisi_izostanki.php?id='.$row["id"].'">Briši</a></td>';
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Ni podatkov v tabeli izostanki.";
}

// Zapri povezavo
mysqli_close($conn);
?>
