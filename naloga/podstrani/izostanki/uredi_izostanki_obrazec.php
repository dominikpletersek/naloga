<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uredi izostanek</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="form-container">
        <h1>Uredi izostanek</h1>

        <form action="izostanki_uredi.php" method="get">
            <label>ID:</label> 
            <input type="text" name="id" value="<?php echo $_GET["id"]; ?>" readonly><br>

            <label>Datum izostanka:</label>
            <input type="date" name="datum_izostanka" value="<?php echo $_GET["datum"]; ?>" required><br>

            <label>Razlog:</label>
            <input type="text" name="razlog" value="<?php echo $_GET["razlog"]; ?>" maxlength="50" required><br>

            <label>Opravičljivost:</label>
            <select name="opravicljivost" required>
                <option value="1" <?php if($_GET["opravicljivost"] == 1) echo "selected"; ?>>Da</option>
                <option value="0" <?php if($_GET["opravicljivost"] == 0) echo "selected"; ?>>Ne</option>
            </select><br>

            <label>ID otroka:</label>
            <input type="text" name="id_otroka" value="<?php echo $_GET["id_otroka"]; ?>" required><br>

            <input type="submit" value="Potrdi">
        </form>
    </div>
</body>
</html>