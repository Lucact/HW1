<?php

$conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");


$password = mysqli_real_escape_string($conn, $_POST['password']);

$password = strtolower($password);

$email = mysqli_real_escape_string($conn, $_POST['email']);

$email = strtolower($email);

$query = "SELECT * FROM utenti WHERE Password ='" . $password . "'". "AND Email ='". $email . "'" ;

$res = mysqli_query($conn, $query) or die("Errore: " . mysqli_error($conn));
if (mysqli_num_rows($res) > 0) {
    echo 3;
}
else{
    $errore = true;
}