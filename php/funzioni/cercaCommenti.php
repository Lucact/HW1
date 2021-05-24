<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");



$id = $_GET['id'];


$query = "SELECT U.nome AS nome, U.email as email, C.contenuto as contenuto, C.data_commento as data_commento FROM commento AS C JOIN utenti AS U ON C.email_utente=U.email WHERE id_offerta ='".$id."'";

$res = mysqli_query($conn, $query) or die("Errore: ".mysqli_error($conn));
if(mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)){
        $commenti[] = $row;
    }

    echo json_encode($commenti);
}
else
    echo json_encode(-1);

?>