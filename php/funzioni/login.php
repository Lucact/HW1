<?php
 session_start();
if(isset($_SESSION["email"]))
{
    header("location: Cerca_Lavoro.php");
    exit;
}

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $conn = mysqli_connect("localhost", "root", "", "cerca_lavoro");

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    require "Confronto_Password.php";

}

