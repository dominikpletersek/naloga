<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstavi izostanek</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>

<div class="form-container">

<h1>Vstavi novi izostanek</h1>

<form action="izostanki_insert.php" method="post">

<label>Datum izostanka:</label>
<input type="date" name="datum_izostanka" required>

<label>Razlog:</label>
<input type="text" name="razlog" maxlength="20" required>

<label>Opravičljiv:</label>
<select name="opravicljivost" required>
<option value="Opravičeno">Da</option>
<option value="Neopravičeno">Ne</option>
<option value="Neurejeno">Neurejeno</option>
</select>

<label>ID otroka:</label>
<input type="number" name="id_otroka" required>

<input type="submit" value="Potrdi" id="potrdi">

</form>

</div>

</body>
</html>
