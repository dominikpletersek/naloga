<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// Poizvedba za tabelo učitelji
$sql = "SELECT id, ime, priimek, telefon, email FROM ucitelji";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Priimek</th>
            <th>Telefon</th>
            <th>Email</th>
            <th>Uredi</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['priimek'] . "</td>";
        echo "<td>" . $row['telefon'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo '<td><a href="uredi_ucitelji_obrazec.php?id='.$row["id"].'&ime='.$row["ime"].'&priimek='.$row["priimek"].'&telefon='.$row["telefon"].'&email='.$row["email"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli učitelji.";
}

mysqli_close($conn);
?>