<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi molitev</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form-container">
        <h1>Uredi molitev</h1>

        <form action="molitve_uredi.php" method="get">
            <label>ID:</label> 
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>" readonly><br>

            <label>Naslov molitve:</label>
            <input type="text" name="naslov_molitve" value="<?php echo $_GET["naslov"]; ?>" maxlength="50" required><br>

            <input type="submit" value="Potrdi">
        </form>
    </div>
</body>
</html>