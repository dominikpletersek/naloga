<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi izostanek</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>

<div class="form-container">

<h1>Vstavi novi izostanek</h1>

<form action="izostanki_insert.php" method="post">

<label>Datum izostanka:</label>
<input type="date" name="datum_izostanka" required>

<label>Razlog:</label>
<input type="text" name="razlog" maxlength="20" required>

<label>Opravičljiv:</label>
<select name="opravicljivost" required>
<option value="Opravičeno">Da</option>
<option value="Neopravičeno">Ne</option>
<option value="Neurejeno">Neurejeno</option>
</select>

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
