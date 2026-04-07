<?php include("includes/header.php"); ?>

<h2>Kontakt</h2>

<iframe 
src="https://maps.google.com/maps?q=Tallinn&t=&z=13&ie=UTF8&iwloc=&output=embed"
width="100%" height="300"></iframe>

<form method="post">
    Nimi: <input type="text" name="nimi" class="form-control"><br>
    Email: <input type="email" name="email" class="form-control"><br>
    Sõnum: <textarea name="sonum" class="form-control"></textarea><br>
    <button class="btn btn-primary">Saada</button>
</form>

<?php include("includes/footer.php"); ?>
