<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi razred</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>

      <div class="form-container">
            <h1>Vstavi novi razred</h1>
    
            <form action="razredi_insert.php" method="post">
                <label>Ime razreda</label>
                <input type="text" name="ime_razreda" required>
                <label>ID otroka:</label>
                <input type="number" name="id_otroka" required>
    
                <label>ID župnije:</label>
                <input type="number" name="id_zupnije" required>
    
                <input type="submit" value="Potrdi" id="potrdi">
            </form>
      </div>

</body>
</html>
