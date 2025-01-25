<?php

if(!isset($_GET['ime']) || empty($_GET['ime']))
{
    die("Unesite ime proizvoda!");
}
if(!isset($_GET['opis']) || empty($_GET['opis']))
{
    die("Unesite opis proizvoda!");
}
if(!isset($_GET['cena']) || empty($_GET['cena']))
{
    die("Unesite cenu proizvoda!");
}
if(!isset($_GET['slika']) || empty($_GET['slika']))
{
    die("Unesite sliku proizvoda!");
}
if(!isset($_GET['kolicina']) || empty($_GET['kolicina']))
{
    die("Unesite kolicinu proizvoda!");
}
require_once "functions/functions.php";

createProduct();

echo"Uspesno ste kreirali proizvod!";