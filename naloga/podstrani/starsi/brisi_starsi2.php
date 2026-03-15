<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";
// Preveri povezavo
if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// SQL poizvedba za pridobivanje podatkov iz tabele starši
$sql = "SELECT id, ime, priimek, `dekliski_priimek`, datum_rojstva, poklic, telefon, naslov, id_otroka FROM starsi";

// Izvedi poizvedbo
$result = mysqli_query($conn, $sql);

// Preveri, če so podatki vrnjeni
if (mysqli_num_rows($result) > 0) {
    // Izpiši podatke v tabeli
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Priimek</th>
            <th>Dekliški priimek</th>
            <th>Datum rojstva</th>
            <th>Poklic</th>
            <th>Telefon</th>
            <th>Naslov</th>
            <th>ID otroka</th>
            <th>Akcija</th>
          </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['priimek'] . "</td>";
        echo "<td>" . $row['dekliski_priimek'] . "</td>";
        echo "<td>" . $row['datum_rojstva'] . "</td>";
        echo "<td>" . $row['poklic'] . "</td>";
        echo "<td>" . $row['telefon'] . "</td>";
        echo "<td>" . $row['naslov'] . "</td>";
        echo "<td>" . $row['id_otroka'] . "</td>";
        echo '<td><a href="brisi_starsi.php?id='.$row["id"].'">Briši</a></td>';
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Ni podatkov v tabeli starši.";
}

// Zapri povezavo
mysqli_close($conn);
?>
