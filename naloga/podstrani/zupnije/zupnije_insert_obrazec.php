<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi župnijo</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
<div class= "form-container">
    
            <h1>Vstavi novo župnijo</h1>
    
            <form action="zupnije_insert.php" method="post">
                <label>Ime župnije:</label>
                <input type="text" name="ime" maxlength="20" required>
    
                <label>Naslov:</label>
                <input type="text" name="naslov" maxlength="20" required>
    
                <label>Kraj:</label>
                <input type="text" name="kraj" maxlength="20" required>
    
                <input type="submit" value="Potrdi" id="potrdi">
            </form>
</div>
  

</body>
</html>
