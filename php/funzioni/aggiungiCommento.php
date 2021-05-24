<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");


$commento = mysqli_real_escape_string($conn, $_POST['commento']);
$id_offerta = mysqli_real_escape_string($conn, $_POST['id']);

$query="INSERT INTO commento VALUES ('',".$id_offerta.",'".$commento."','".$_SESSION['email']."', CURDATE() )";

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
