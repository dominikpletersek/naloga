<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";
// Preveri povezavo
if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// SQL poizvedba za pridobivanje podatkov iz tabele učitelji
$sql = "SELECT id, ime, priimek, telefon, email FROM ucitelji";

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
            <th>Telefon</th>
            <th>Email</th>
            <th>Akcija</th>
          </tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['priimek'] . "</td>";
        echo "<td>" . $row['telefon'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo '<td><a href="brisi_ucitelji.php?id='.$row["id"].'">Briši</a></td>';
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Ni podatkov v tabeli učitelji.";
}

// Zapri povezavo
mysqli_close($conn);
?>
