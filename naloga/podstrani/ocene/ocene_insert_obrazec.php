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
    
                <label>ID otroka:</label>
                <input type="number" name="id_otroka" required>
    
                <input type="submit" value="Potrdi" id="potrdi">
    
            </form>
</div>

</body>
</html>
