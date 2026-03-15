<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi učitelja</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
<div class="form-container">
    
            <h1>Vstavi novega učitelja</h1>
    
            <form action="ucitelji_insert.php" method="post">
    
                <label>Ime:</label>
                <input type="text" name="ime" maxlength="20" required>
    
                <label>Priimek:</label>
                <input type="text" name="priimek" maxlength="20" required>
    
                <label>Telefon:</label>
                <input type="number" name="telefon" maxlength="9">
    
                <label>Email:</label>
                <input type="email" name="email" maxlength="40">
    
                <input type="submit" value="Potrdi" id="potrdi">
    
            </form>
</div>

</body>
</html>
