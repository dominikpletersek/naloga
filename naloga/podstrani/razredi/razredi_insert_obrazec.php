<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi razred</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>

      <div class="form-container">
            <h1>Vstavi novi razred</h1>
    
            <form action="razredi_insert.php" method="post">
                <label>Ime razreda</label>
                <input type="text" name="ime_razreda" required>
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
      </select>
                <label>Župnije</label> <?php
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
    
                <input type="submit" value="Potrdi" id="potrdi">
            </form>
      </div>

</body>
</html>
