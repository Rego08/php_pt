<?php include("includes/header.php"); ?>

<h1>Tere tulemast fotostuudiosse!</h1>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">

<?php
$pildid = glob("reklaam/*");

shuffle($pildid);

$active = "active";

foreach ($pildid as $pilt) {
    echo '<div class="carousel-item '.$active.'">';
    echo '<img src="'.$pilt.'" class="d-block w-100">';
    echo '</div>';
    $active = "";
}
?>

    </div>
</div>

<?php include("includes/footer.php"); ?>
