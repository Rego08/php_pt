<h1>Kalkulaator</h1>

<form method="POST">
    <input type="number" name="a">
    <input type="number" name="b">
    <button type="submit">Arvuta</button>
</form>

<?php
if ($_POST) {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];

    echo "<p>Tulemus: " . ($a + $b) . "</p>";
}
?>
