<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <title>Prijava</title>
    <link rel="stylesheet" href="podstrani/css/prijava.css">
</head>
<body>

    <h2>Prijava</h2>

    <form action="prijavljanje.php" method="post">
        <label for="username">Uporabniško ime:</label>
        <input type="text" id="username" name="ime" required>

        <label for="password">Geslo:</label>
        <input type="password" id="password" name="geslo" required>

        <button type="submit">Prijava</button>
    </form>

<a href="spremeni.php">Spremeni geslo</a>

</body>
</html>
