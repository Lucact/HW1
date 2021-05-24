<!DOCTYPE html>
<?php
$login = false;
$errore =false;
$successo = false;
session_start();
if(isset($_SESSION['E_mail'])){
    header("location: ../HW1/php/Cerca_Lavoro.php");
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="=width=device-width, initial-scale=1">
    <title>Subscribe</title>
    <link rel="stylesheet" href="../css/Cerca_Lavoro.css">
    <script src="../js/Subscribe.js" defer></script>
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
<h2>Registrati per scoprire tante offerte di lavoro!</h2>
<main>
    <form name="nome_form" method="post" id="form_">
        <?php
        if($successo == true){
            echo "<h3 class='errore'>";
            echo "Registrazione Avvenuta con successo. Ora puoi effettuare il login.</h3>";
        }
        ?>
        <label>Nome <input type='text' name='nome'></label>
        <label>Cognome <input type='text' name='cognome'></label>
        <label>E-mail <input type='email' name='email'></label>
        <p id="errore_email"><font color="red">Email già in uso! Prova ad registrarti con un'altra Email</font></p>
        <label>Telefono <input type='tel' name='telefono'></label>
        <label>Password <input type='password' name='password'></label>
        <label>&nbsp;<input type='submit'></label>
    </form>
</main>
<p id="errore_pass3"><font color="red">Non hai inserito neanche un carettere speciale nella Password.</font></p>
<p id="errore_pass1"><font color="red">Password troppo corta! Inserirne una con almento sei caratteri.</font></p>
<p id="errore_pass2"><font color="red">Password troppo lunga! Inserirne una con massimo dodici caratteri.</font></p>
<p id="errore_campo"><font color="red">Compila tutti i campi per completare la registrazione!</font></p>
<b>
<h4>La password deve contenere almeno un carattere speciale (Es: ! ? $ % ^ & # _ @). *</h4>
<h4 align="center">Se sei già registrato <a href='../php/Accesso.php'> clicca qui </a> per effettuare l'accesso!</h4>
</b>
<footer>
    <h3 id="element1">Luca Rodolico O46001856</h3>
    <h3 id="element2">WebProgramming 2020/21</h3>
</footer>
</body>

</html>