<!DOCTYPE html>
<?php
$login = false;
$errore = false;
session_start();
if(isset($_SESSION['E_mail'])){
    $login = true;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="=width=device-width, initial-scale=1">
    <title>Conferma</title>
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

<?php
//verifica l'accesso:
if(isset($_SESSION["E_mail"])){
    //vai alla home
    header("Location: ../html/Cerca_Lavoro.php");
    exit;
}
?>

<article>
    <h2> Registrazione avvenuta con successo! </h2>
    <h2> Si prega di effettuare il <a href='../php/Accesso.php'> login</a> per proseguire </h2>
</article>

<footer>
    <h3 id="element1">Luca Rodolico O46001856</h3>
    <h3 id="element2">WebProgramming 2020/21</h3>
</footer>
</body>

</html>
