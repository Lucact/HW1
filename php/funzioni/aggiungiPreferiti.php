<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");

$link = mysqli_real_escape_string($conn, $_POST['link']);
$descrizione = mysqli_real_escape_string($conn, $_POST['descrizione']);
$titolo = mysqli_real_escape_string($conn, $_POST['titolo']);
$id = mysqli_real_escape_string($conn, $_POST['id']);

$query="INSERT INTO offertaPreferita VALUES (".$id.",'".$titolo."','".$descrizione."','".$link."','".$_SESSION['email']."')";

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
