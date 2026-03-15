<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi starša</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form-container">
        <h1>Uredi starša</h1>

        <form action="starsi_uredi.php" method="get">
            <label>ID:</label> 
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>" readonly><br>

            <label>Ime:</label>
            <input type="text" name="ime" value="<?php echo $_GET["ime"]; ?>" maxlength="20" required><br>

            <label>Priimek:</label>
            <input type="text" name="priimek" value="<?php echo $_GET["priimek"]; ?>" maxlength="20" required><br>

            <label>Dekliški priimek:</label>
            <input type="text" name="dekliski_priimek" value="<?php echo $_GET["dekliski_priimek"]; ?>" maxlength="20" required><br>

            <label>Datum rojstva:</label>
            <input type="date" name="datum_rojstva" value="<?php echo $_GET["datum_rojstva"]; ?>" required><br>

            <label>Poklic:</label>
            <input type="text" name="poklic" value="<?php echo $_GET["poklic"]; ?>" maxlength="30" required><br>

            <label>Telefon:</label>
            <input type="text" name="telefon" value="<?php echo $_GET["telefon"]; ?>" maxlength="15" required><br>

            <label>Naslov:</label>
            <input type="text" name="naslov" value="<?php echo $_GET["naslov"]; ?>" maxlength="50" required><br>

            <label>ID otroka:</label>
            <input type="text" name="id_otroka" value="<?php echo $_GET["id_otroka"]; ?>" required><br>

            <input type="submit" value="Potrdi">
        </form>
    </div>
</body>
</html>