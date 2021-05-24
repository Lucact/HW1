<?php
$conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");


$email = mysqli_real_escape_string($conn, $_POST['email']);

$email = strtolower($email);

$query = "SELECT * FROM utenti WHERE Email ='".$email."'";

$res = mysqli_query($conn, $query) or die("Errore: ".mysqli_error($conn));
if(mysqli_num_rows($res) > 0){
    echo 3;
}
?>