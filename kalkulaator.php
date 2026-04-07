<?php include("includes/header.php"); ?>

<h2>Kalkulaator</h2>

<form method="post">
    Tunnid: <input type="number" name="tunnid" class="form-control"><br>

    Valik:
    <select name="valik" class="form-control">
        <option value="0">Digitaalne</option>
        <option value="20">Trükitud (+20€)</option>
    </select><br>

    <button class="btn btn-success">Arvuta</button>
</form>

<?php
if ($_POST) {
    $tunnid = $_POST['tunnid'];
    $valik = $_POST['valik'];

    $hind = $tunnid * 50 + $valik;

    echo "<h3>Kokku: $hind €</h3>";

    file_put_contents("andmed/orders.txt", $hind."\n", FILE_APPEND);
}
?>

<?php include("includes/footer.php"); ?>
