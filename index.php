<?php
// Inicijalizacija varijabli
$result = null;

// Provjera je li forma poslana
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = isset($_POST['a']) ? (float)$_POST['a'] : 0;
    $b = isset($_POST['b']) ? (float)$_POST['b'] : 0;

    // Izračun formule: c = (3a - b) / 2
    $result = (3 * $a - $b) / 2;
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Kalkulator za izračunavanje varijable c prema formuli c = (3a - b) / 2.">
    <meta name="keywords" content="kalkulator, php, formula, varijable">
    <title>Kalkulator varijable c</title>
</head>
<body>
    <h1>Kalkulator za izračunavanje varijable c</h1>
    <form method="post" action="">
        <label for="a">Vrijednost a:</label><br>
        <input type="number" step="0.01" id="a" name="a" required><br><br>

        <label for="b">Vrijednost b:</label><br>
        <input type="number" step="0.01" id="b" name="b" required><br><br>

        <button type="submit">Pošalji</button>
    </form>

    <?php if ($result !== null): ?>
        <h2>Rezultat:</h2>
        <p>Vrijednost c je: <strong><?php echo $result; ?></strong></p>
    <?php endif; ?>
</body>
<!-- Dokument: php-formula-kalkulator.php -->
</html>

