<h1>Kontakt</h1>

<form method="POST">
    <input type="text" name="nimi" placeholder="Sinu nimi">
    <button type="submit">Saada</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nimi = htmlspecialchars($_POST['nimi'] ?? '');
    echo "<p>Tere, $nimi!</p>";
}
?>
