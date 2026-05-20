<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi starša</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>

      <div class="form-container">
            <h1>Vstavi novega starša</h1>
    
            <form action="starsi_insert.php" method="post">
    
                <label>Ime:</label>
                <input type="text" name="ime" maxlength="20" required>
    
                <label>Priimek:</label>
                <input type="text" name="priimek" maxlength="20" required>
    
                <label>Dekliški priimek:</label>
                <input type="text" name="dekliski_priimek" maxlength="20" required>
    
                <label>Datum rojstva:</label>
                <input type="date" name="datum_rojstva" required>
    
                <label>Poklic:</label>
                <input type="text" name="poklic" maxlength="20" required>
    
                <label>Telefon:</label>
                <input type="number" name="telefon" required>
    
                <label>Naslov:</label>
                <input type="text" name="naslov" maxlength="20" required>
                <label>Otrok:</label>
                <?php include "../povezava.php";
        $sql = "SELECT id, ime, priimek 
                FROM otroci";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo'<select name="id_otroka">';
        }
            while ($row = mysqli_fetch_assoc($result)) {
                $ime=$row["ime"];
                $priimek=$row["priimek"];
                $id=$row["id"];
      echo'<option value="'.$id.'">'.$ime.' '.$priimek.'</option>';
            }
            ?>
               
    
                <input type="submit" value="Potrdi" id="potrdi">
    
            </form>
      </div>
 
</body>
</html>
