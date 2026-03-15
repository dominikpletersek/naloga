<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi otroka</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
<div class ="form-container">
    
            <h1>Vstavi novega otroka</h1>
    
            <form action="otroci_insert.php" method="post">
    
                <label>Ime:</label>
                <input type="text" name="ime" maxlength="20" required>
    
                <label>Priimek:</label>
                <input type="text" name="priimek" maxlength="20" required>
    
                <label>Datum rojstva:</label>
                <input type="date" name="datum_rojstva" required>
    
                <label>Datum krsta:</label>
                <input type="date" name="datum_krsta" required>
    
                <label>Razred:</label>
                <input type="text" name="razred" maxlength="20" required>
    
                <label>ID župnije:</label>
                <input type="number" name="id_zupnije">
    
                <label>ID učitelja:</label>
                <input type="number" name="id_ucitelja">
    
                <input type="submit" value="Potrdi" id="potrdi">
    
            </form>
    
</div>

</body>
</html>
