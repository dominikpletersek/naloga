<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";
// Preveri povezavo
if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// SQL poizvedba za pridobivanje podatkov iz tabele otroci
$sql = "SELECT id, ime, priimek, datum_rojstva, datum_krsta, razred, id_zupnije, id_ucitelja FROM otroci";

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
            <th>Datum rojstva</th>
            <th>Datum krsta</th>
            <th>Razred</th>
            <th>ID župnije</th>
            <th>ID učitelja</th>
            <th>Akcija</th>
          </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['priimek'] . "</td>";
        echo "<td>" . $row['datum_rojstva'] . "</td>";
        echo "<td>" . $row['datum_krsta'] . "</td>";
        echo "<td>" . $row['razred'] . "</td>";
        echo "<td>" . $row['id_zupnije'] . "</td>";
        echo "<td>" . $row['id_ucitelja'] . "</td>";
        echo '<td><a href="brisi_otroci.php?id='.$row["id"].'">Briši</a></td>';
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Ni podatkov v tabeli otroci.";
}

// Zapri povezavo
mysqli_close($conn);
?>
