<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi učitelja</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form-container">
        <h1>Uredi učitelja</h1>

        <form action="ucitelji_uredi.php" method="get">
            <label>ID:</label> 
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>" readonly><br>

            <label>Ime:</label>
            <input type="text" name="ime" value="<?php echo $_GET["ime"]; ?>" maxlength="20" required><br>

            <label>Priimek:</label>
            <input type="text" name="priimek" value="<?php echo $_GET["priimek"]; ?>" maxlength="20" required><br>

            <label>Telefon:</label>
            <input type="text" name="telefon" value="<?php echo $_GET["telefon"]; ?>" maxlength="15" required><br>

            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $_GET["email"]; ?>" maxlength="40" required><br>

            <input type="submit" value="Potrdi">
        </form>
    </div>
</body>
</html>