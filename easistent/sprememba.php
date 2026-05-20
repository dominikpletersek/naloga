<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$ime   = $_POST["ime"];
$staro = $_POST["staro"];
$novo  = $_POST["novo"];
$novo2 = $_POST["novo2"];

include "podstrani/povezava.php";

if ($novo !== $novo2) {
    die("Novi gesli se ne ujemata.");
}

$sql = "SELECT geslo FROM uporabniki WHERE uporabnisko_ime = '$ime'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    if ($staro === $row["geslo"]) {
        $sql2 = "UPDATE uporabniki SET geslo='$novo' WHERE uporabnisko_ime='$ime'";
        mysqli_query($conn, $sql2);
        header("Location: index.php");
    } else {
        echo "Napačno staro geslo.";
    }
} else {
    echo "Uporabnik ne obstaja.";
}

mysqli_close($conn);
?>

</body>
</html>