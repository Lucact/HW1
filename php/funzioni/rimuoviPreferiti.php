<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");

$titolo = mysqli_real_escape_string($conn, $_POST['titolo']);

$query="DELETE FROM offertaPreferita WHERE titolo='".$titolo."' AND email_utente='".$_SESSION['email']."'";

$res = mysqli_query($conn, $query);

if($res === true){
    $result = 1;
    echo json_encode($result);
}
else if($res === false){
    echo 2;
}
else {
    echo 55;
}
?>
