<?php
require_once "functions/functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROIZVODI</title>
</head>
<body>
   <?php foreach(getAllProducts() as $proizvod) : ?>
   <h1><?= $proizvod['ime']; ?></h1>
   <p?><?= $proizvod['opis']; ?> </p>
   <p?>Cena proizvoda: <?= $proizvod['cena']; ?> </p>
   <p?>Kolicina: <?= $proizvod['kolicina']; ?> </p>

    <?php if($proizvod['kolicina'] == 0): ?>
    <p>Nema na stanju</p>
    <?php else : ?>
        <p>Ima na stanju</p>
    <?php endif; ?>
    <a href="pogledajproizvod.php?id=<?=$proizvod['id']?>">Pogledaj proizvod</a>

   <?php endforeach; ?> 
</body>
</html>