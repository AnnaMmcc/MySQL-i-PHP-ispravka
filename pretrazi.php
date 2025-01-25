<?php

require_once "functions/functions.php";

if(!isset($_GET['proizvod']) || empty($_GET['proizvod']))
{
    die("Nije unet proizvod");
}

$brojProizvoda = searchProduct();

if($brojProizvoda == 0)
{
    die("Nije pronadjen rezultat pretrage");
}


else
{
    echo"Uspesno ste pronasli ".$brojProizvoda ." proizvod/a";
}

