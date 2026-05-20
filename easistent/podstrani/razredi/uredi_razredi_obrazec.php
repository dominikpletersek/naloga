<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi razred</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form-container">
        <h1>Uredi razred</h1>

        <form action="razredi_uredi.php" method="get">
            <label>ID:</label> 
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>" readonly><br>

            <label>ID otroka:</label>
            <input type="text" name="id_otroka" value="<?php echo $_GET["id_otroka"]; ?>" required><br>

            <label>ID župnije:</label>
            <input type="text" name="id_zupnije" value="<?php echo $_GET["id_zupnije"]; ?>" required><br>

            <input type="submit" value="Potrdi">
        </form>
    </div>
</body>
</html>