<link rel="stylesheet" href="../css/izpis.css">
<?php
        // povezava z bazo
        include "../povezava.php";

        if ($conn == null) {
            die("Povezava z bazo ni uspela!");
        }

        // SQL poizvedba
        $sql = "SELECT ocene.id, ocena, snov, id_otroka, ime, priimek FROM ocene inner join otroci ON ocene.id_otroka=otroci.id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Ocena</th>
                    <th>Snov</th>
                    <th>Otrok</th>
                    <th>Akcija</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ocena'] . "</td>";
                echo "<td>" . $row['snov'] . "</td>";
                echo "<td>" . $row['ime'] ." ".$row["priimek"]. "</td>";
        echo '<td><a href="uredi_ocene_obrazec.php?id='.$row["id"].'&ocena='.$row["ocena"].'&snov='.$row["snov"].'&id_otroka='.$row["id_otroka"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli ocene.";
}

mysqli_close($conn);
?>