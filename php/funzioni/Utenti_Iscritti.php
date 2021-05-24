<?php
    if(isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["email"])
       && isset($_POST["telefono"]) && isset($_POST["password"])){

        $conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");

        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $telefono = mysqli_real_escape_string($conn, $_POST['telefono']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        require "Confronto_Email.php";

        $query = "INSERT INTO utenti VALUES ('', '".$nome."', '".$cognome."', '".$email."', '".$telefono."', '".$password."')";
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
    }
?>