<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="=width=device-width, initial-scale=1">
    <title>Accesso</title>
    <link rel="stylesheet" href="../css/Cerca_Lavoro.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <div id="overlay"></div>
    <div id="Nome_sito">
        <h3>Cerca Lavoro</h3>
    </div>
    <nav>
        <div id="menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div id="links">
            <a href="../html/Home.html">Home</a>
            <a href="../php/Subscribe.php">Subscribe</a>
            <a href="../php/Accesso.php">Login</a>
        </div>
    </nav>

</header>
<main id="form_">
    <h5 class="errore">E-mail o Password errati. Riprova.</h5>
    <form id= "nome_form" name="nome_form" method="post">
        <label>E-mail <input type='email' name='email'></label>
        <label>Password <input type='password' name='password'></label>
        <label>&nbsp;<input type='submit'></label>
    </form>
    
<b>
<h4> Se non sei registrato <a href='../php/Subscribe.php'> clicca qui </a> per iscriverti!</h4>
</b>
<img src="https://servizi.sardegnalavoro.it/sardinianjobday/images/sjd_cerca_offerte.png" />
</main>
<?php
session_start();
if (isset($_POST["email"]) && isset($_POST["password"]))
{
    require "funzioni/Confronto_Password.php";

    if(!isset($errore))
    {

        $_SESSION['email']=$_POST['email'];
        header("location: ../php/Cerca_Lavoro.php");
        exit;
    }
    else {
        echo "<p><font color=red>Email o Password non inseriti correttamente! Si prega di riprovare.</font></p>";
        $errore = true;
    }
}
?>
<footer>
    <h3 id="element1">Luca Rodolico O46001856</h3>
    <h3 id="element2">WebProgramming 2020/21</h3>
</footer>
</body>

</html>