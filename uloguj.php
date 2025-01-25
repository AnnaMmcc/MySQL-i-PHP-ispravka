<?php

if(!isset($_POST['email']) || empty($_POST['email']))
{
    die("Niste uneli vas email");
}
if(!isset($_POST['sifra']) || empty($_POST['sifra']))
{
    die("Niste uneli vasu lozinku!");
}

require_once "functions/functions.php";

logIn();