<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="podstrani/css/prijava.css">
</head>
<body>
    <h2>Sprememba gesla</h2>
    <form action="sprememba.php" method="post">
        <label for="username">Uporabniško ime:</label>
        <input type="text" id="username" name="ime" required>
        <label for="staro">Staro Geslo:</label>
        <input type="password" id="staro" name="staro" required>
        <label for="novo">Novo Geslo:</label>
        <input type="password" id="novo" name="novo" required>
        <label for="novo2"> Potrdi Novo Geslo:</label>
        <input type="password" id="novo2" name="novo2" required>
        <button type="submit">Potrdi</button>

    </form>
</body>
</html>