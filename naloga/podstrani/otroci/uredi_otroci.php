<link rel="stylesheet" href="../css/izpis.css">
<?php
include "../povezava.php";

if (!$conn) {
    die("Povezava z bazo je neuspešna: " . mysqli_connect_error());
}

// Poizvedba za tabelo otroci
$sql = "SELECT id, ime, priimek, datum_rojstva, datum_krsta, razred, id_zupnije, id_ucitelja FROM otroci";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
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
            <th>Uredi</th>
          </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['priimek'] . "</td>";
        echo "<td>" . $row['datum_rojstva'] . "</td>";
        echo "<td>" . $row['datum_krsta'] . "</td>";
        echo "<td>" . $row['razred'] . "</td>";
        echo "<td>" . $row['id_zupnije'] . "</td>";
        echo "<td>" . $row['id_ucitelja'] . "</td>";
        echo '<td><a href="uredi_otroci_obrazec.php?id='.$row["id"].'&ime='.$row["ime"].'&priimek='.$row["priimek"].'&datum_rojstva='.$row["datum_rojstva"].'&datum_krsta='.$row["datum_krsta"].'&razred='.$row["razred"].'&id_zupnije='.$row["id_zupnije"].'&id_ucitelja='.$row["id_ucitelja"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli otroci.";
}

mysqli_close($conn);
?>