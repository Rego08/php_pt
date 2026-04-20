<h1>Ostukorv</h1>

<form method="POST">
    <input type="text" name="toode" placeholder="Toote nimi">
    <button type="submit" name="lisa">Lisa</button>
</form>

<?php
if (isset($_POST['lisa'])) {
    $toode = htmlspecialchars($_POST['toode']);
    $_SESSION['cart'][] = $toode;
}

if (!empty($_SESSION['cart'])) {
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Ostukorv on tühi</p>";
}
?>
