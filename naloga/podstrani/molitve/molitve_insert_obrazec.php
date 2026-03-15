<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi molitev</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
<div class="form-container">
    
            <h1>Vstavi novo molitev</h1>
    
            <form action="molitve_insert.php" method="post">
    
                <label>Naslov molitve:</label>
                <input type="text" name="naslov_molitve" maxlength="20">
    
                <input type="submit" value="Potrdi" id="potrdi">
    
            </form>
</div>


</body>
</html>
