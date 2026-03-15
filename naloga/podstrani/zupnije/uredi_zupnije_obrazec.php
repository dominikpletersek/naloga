<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi župnijo</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form-container">
        <h1>Uredi župnijo</h1>

        <form action="zupnije_uredi.php" method="get">
            <label>ID:</label> 
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>" readonly><br>

            <label>Ime:</label>
            <input type="text" name="ime" value="<?php echo $_GET["ime"]; ?>" maxlength="20" required><br>

            <label>Naslov:</label>
            <input type="text" name="naslov" value="<?php echo $_GET["naslov"]; ?>" maxlength="50" required><br>

            <label>Kraj:</label>
            <input type="text" name="kraj" value="<?php echo $_GET["kraj"]; ?>" maxlength="30" required><br>

            <input type="submit" value="Potrdi">
        </form>
    </div>
</body>
</html>