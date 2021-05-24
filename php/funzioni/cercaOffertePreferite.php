<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");



$query = "SELECT * FROM offertaPreferita WHERE email_utente ='".$_SESSION['email']."'";

$res = mysqli_query($conn, $query) or die("Errore: ".mysqli_error($conn));
if(mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)){
        $offerte[] = $row;
    }

    echo json_encode($offerte);
}
else
    echo json_encode(-1);

?>