<link rel="stylesheet" href="../css/izpis.css">
<?php
        // povezava z bazo
        include "../povezava.php";

        if ($conn == null) {
            die("Povezava z bazo ni uspela!");
        }

        // SQL poizvedba
        $sql = "SELECT razredi.id, ime_razreda, zupnije.ime as zime, otroci.ime as oime, otroci.priimek
         FROM razredi
        inner join otroci on razredi.id_otroka=otroci.id 
        inner join zupnije on zupnije.id=razredi.id_zupnije";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Ime razreda</th>
                    <th>Otrok</th>
                    <th>Župnija</th>
                    <th>Akcija</th>

                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ime_razreda'] . "</td>";
                echo "<td>" . $row['oime']." ".$row["priimek"] . "</td>";
                echo "<td>" . $row['zime'] . "</td>";
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
