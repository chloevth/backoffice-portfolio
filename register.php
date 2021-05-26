<?php
require_once('db-connect.php');

// récupération des données form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmation = $_POST['confirmation'];

if ($password === $confirmation) {
    echo $username.'<br>'.$email.'<br>'.$password.'<br>'.$confirmation;
} else {
    echo 'les mots de passe ne correspondent pas';
}



