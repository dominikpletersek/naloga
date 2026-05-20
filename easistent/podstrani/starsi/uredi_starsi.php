<link rel="stylesheet" href="../css/izpis.css">
<?php
        // povezava z bazo
        include "../povezava.php";

        if ($conn == null) {
            die("Povezava z bazo ni uspela!");
        }

        // SQL poizvedba
        $sql = "SELECT 
                    starsi.id,
                    starsi.id_otroka,
                    starsi.ime, 
                    starsi.priimek, 
                    `dekliski_priimek`, 
                    starsi.datum_rojstva, 
                    poklic, 
                    starsi.telefon, 
                    starsi.naslov,
                    otroci.ime as oime, 
                    otroci.priimek as opri 
                FROM starsi inner join otroci on starsi.id_otroka=otroci.id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "<table border='1'>";
            echo "<tr>
                    <th>Ime</th>
                    <th>Priimek</th>
                    <th>Dekliški priimek</th>
                    <th>Datum rojstva</th>
                    <th>Poklic</th>
                    <th>Telefon</th>
                    <th>Naslov</th>
                    <th>Otrok</th>
                    <th>Akcija</th>
                  </tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['ime'] . "</td>";
                echo "<td>" . $row['priimek'] . "</td>";
                echo "<td>" . $row['dekliski_priimek'] . "</td>";
                echo "<td>" . $row['datum_rojstva'] . "</td>";
                echo "<td>" . $row['poklic'] . "</td>";
                echo "<td>" . $row['telefon'] . "</td>";
                echo "<td>" . $row['naslov'] . "</td>";
                echo "<td>" . $row['oime']." ".$row["opri"] . "</td>";
        echo '<td><a href="uredi_starsi_obrazec.php?id='.$row["id"].'&ime='.$row["ime"].'&priimek='.$row["priimek"].'&dekliski_priimek='.$row["dekliski_priimek"].'&datum_rojstva='.$row["datum_rojstva"].'&poklic='.$row["poklic"].'&telefon='.$row["telefon"].'&naslov='.$row["naslov"].'&id_otroka='.$row["id_otroka"].'">Uredi</a></td>';
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ni podatkov v tabeli starši.";
}

mysqli_close($conn);
?>