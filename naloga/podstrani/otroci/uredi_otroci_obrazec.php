<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi otroka</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form-container">
        <h1>Uredi otroka</h1>

        <form action="otroci_uredi.php" method="get">
            <label>ID:</label> 
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>" readonly><br>

            <label>Ime:</label>
            <input type="text" name="ime" value="<?php echo $_GET["ime"]; ?>" maxlength="20" required><br>

            <label>Priimek:</label>
            <input type="text" name="priimek" value="<?php echo $_GET["priimek"]; ?>" maxlength="20" required><br>

            <label>Datum rojstva:</label>
            <input type="date" name="datum_rojstva" value="<?php echo $_GET["datum_rojstva"]; ?>" required><br>

            <label>Datum krsta:</label>
            <input type="date" name="datum_krsta" value="<?php echo $_GET["datum_krsta"]; ?>" required><br>

            <label>Razred:</label>
            <input type="text" name="razred" value="<?php echo $_GET["razred"]; ?>" maxlength="20" required><br>

            <label>ID župnije:</label>
            <input type="text" name="id_zupnije" value="<?php echo $_GET["id_zupnije"]; ?>" required><br>

            <label>ID učitelja:</label>
            <input type="text" name="id_ucitelja" value="<?php echo $_GET["id_ucitelja"]; ?>" required><br>

            <input type="submit" value="Potrdi">
        </form>
    </div>
</body>
</html>