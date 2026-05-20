<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi otroka</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
<div class ="form-container">
    
            <h1>Vstavi novega otroka</h1>
    
            <form action="otroci_insert.php" method="post">
    
                <label>Ime:</label>
                <input type="text" name="ime" maxlength="20" required>
    
                <label>Priimek:</label>
                <input type="text" name="priimek" maxlength="20" required>
    
                <label>Datum rojstva:</label>
                <input type="date" name="datum_rojstva" required>
    
                <label>Datum krsta:</label>
                <input type="date" name="datum_krsta" required>
    
                <label>Razred:</label>
                <input type="text" name="razred" maxlength="20" required>
    
                <label>Župnije</label> <?php
                include "../povezava.php";
        $sql = "SELECT id, ime
                FROM zupnije";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        }
            while ($row = mysqli_fetch_assoc($result)) {
                $ime=$row["ime"];
                $id=$row["id"];
      echo'<div><input type="radio" name="id_zupnije" value="'.$id.'">'.$ime.'</div>';
            }
            ?>
    
                <label>Učitelji</label> <?php
        $sql = "SELECT id, ime, priimek
                FROM ucitelji";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
        }
            while ($row = mysqli_fetch_assoc($result)) {
                $ime=$row["ime"];
                $priimek=$row["priimek"];
                $id=$row["id"];
      echo'<div><input type="radio" name="id_ucitelja" value="'.$id.'">'.$ime.' '.$priimek.'</div>';
            }
            ?>
    
                <input type="submit" value="Potrdi" id="potrdi">
    
            </form>
    
</div>

</body>
</html>
