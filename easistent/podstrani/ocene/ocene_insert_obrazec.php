<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi oceno</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
<div class ="form-container">
    
            <h1>Vstavi novo oceno</h1>
    
            <form action="ocene_insert.php" method="post">
    
                <label>Ocena:</label>
                <input type="text" name="ocena" maxlength="20" required>
    
                <label>Snov:</label>
                <input type="text" name="snov" maxlength="20" required>
    
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
