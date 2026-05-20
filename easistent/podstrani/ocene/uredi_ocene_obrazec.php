<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi oceno</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form-container">
        <h1>Uredi oceno</h1>

        <form action="ocene_uredi.php" method="get">
            <label>ID:</label> 
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>" readonly><br>

            <label>Ocena:</label>
            <input type="text" name="ocena" value="<?php echo $_GET["ocena"]; ?>" maxlength="5" required><br>

            <label>Snov:</label>
            <input type="text" name="snov" value="<?php echo $_GET["snov"]; ?>" maxlength="50" required><br>

            <label>ID otroka:</label>
            <input type="text" name="id_otroka" value="<?php echo $_GET["id_otroka"]; ?>" required><br>

            <input type="submit" value="Potrdi">
        </form>
    </div>
</body>
</html>