<link rel="stylesheet" href="../css/izpis.css">
<?php
        // povezava z bazo
        include "../povezava.php";

        if ($conn == null) {
            die("Povezava z bazo ni uspela!");
        }

        // SQL poizvedba
        $sql = "SELECT 
                    otroci.id,
                    otroci.ime, 
                    otroci.priimek, 
                    otroci.datum_rojstva, 
                    datum_krsta, 
                    razred, 
                    ucitelji.ime as ucime, 
                    zupnije.ime as zuime,
                    ucitelji.priimek as upri
                FROM otroci inner join zupnije on otroci.id_zupnije=zupnije.id 
                inner join ucitelji on otroci.id_ucitelja=ucitelji.id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Ime</th>
                    <th>Priimek</th>
                    <th>Datum rojstva</th>
                    <th>Datum krsta</th>
                    <th>Razred</th>
                    <th>Župnija</th>
                    <th>Učitelj</th>
                    <th>Akcija</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                
                echo "<tr>";
                echo "<td>" . $row['ime'] . "</td>";
                echo "<td>" . $row['priimek'] . "</td>";
                echo "<td>" . $row['datum_rojstva'] . "</td>";
                echo "<td>" . $row['datum_krsta'] . "</td>";
                echo "<td>" . $row['razred'] . "</td>";
                echo "<td>" . $row['zuime'] . "</td>";
                echo "<td>" . $row['ucime']." ".$row["upri"] . "</td>";
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
