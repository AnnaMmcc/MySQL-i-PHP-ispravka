<?php


function getAllProducts() 
{
require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM proizvodi");

return $rezultat->fetch_all(MYSQLI_ASSOC);
}

function getProductByID($id) 
{
    require_once "baza.php";

    $idBroj = $_GET['id'];

    $rezultat = $baza->query("SELECT * FROM proizvodi WHERE id = '$idBroj' ");

    return $rezultat->fetch_assoc();
}


function searchProduct()
{
require_once "baza.php";

$pretragaProizvoda = $_GET['proizvod'];

$produkt = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$pretragaProizvoda%'");

return $produkt->num_rows;

}

function createProduct()
{
   require_once "baza.php";

   $ime = $_GET['ime'];
   $opis = $_GET['opis'];
   $cena = $_GET['cena'];
   $slika = $_GET['slika'];
   $kolicina = $_GET['kolicina'];

    $rezultat = $baza->query("INSERT INTO proizvodi (ime,opis,cena,slika,kolicina) VALUES ('$ime','$opis',$cena,'$slika',$kolicina)");

}

function register()
{
    require_once "baza.php";

    $email = $_POST['email'];
    $sifra = password_hash($_POST['sifra'], PASSWORD_BCRYPT);



$rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

if($rezultat->num_rows >= 1)
{
    die("Vec postoji korisnik sa ovom email adresom!");
}

else 
{
    echo"Uspesno ste se registrovali, dobrodosli!";
    $baza->query("INSERT INTO korisnici (email, sifra) VALUES ('$email','$sifra')");
}
}

function logIn()
{
    $email = $_POST['email'];
$sifra = $_POST['sifra'];

require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$email'");

if($rezultat->num_rows >= 1)
{
    $korisnik = $rezultat->fetch_assoc();
    $proveraSifre = password_verify($sifra, $korisnik['sifra']);
    
    if($proveraSifre == true)
    {
        echo"Dobrodosli!";
    }
    else
    {
        echo"Pogresna sifra!";
    }
}

else
{
    echo"Nepostoji korisnik sa ovom email adresom.";
}
}