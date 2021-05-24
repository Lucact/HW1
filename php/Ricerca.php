<?php
session_start();

if(!isset($_SESSION['email']))
{
    header("location: Accesso.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="=width=device-width, initial-scale=1">
    <title>Work</title>
    <link rel="stylesheet" href="../css/Cerca_Lavoro.css">
    <script src="../js/Ricerca.js" defer></script>
    <link href="../fontawesome-free-5.15.3-web/css/fontawesome.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/solid.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/brands.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>

<body>
<div id="overlay_commenti"></div>
<div id="modale_commenti">      
        
        <p id="avviso_commenti">Non ci sono commenti</p>  
        <div id="commenti">
        </div>
        <form name="inviaCommento" id="formCommento">
            <label>
                <input name="commento" type="text" id="testo_commento"/>
                <input type="submit" id="invia_commento"/>
            </label>
        </form>
</div>
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
                <a href="../php/Cerca_Lavoro.php">Home</a>
                <a href="Preferiti.php">Preferiti</a>
                <a href="Ricerca.php">Ricerca</a>
                <a href="logout.php">Logout</a>
            </div>
        </nav>
    </header>
    <div id="container">
        
        <div class="separatore"> <h1>OFFERTE DI LAVORO</h1>
        </div>
        <div id="search">
                <label>
                    <span>Cerca parola chiave: </span>
                    <form id="formRicerca">
                    <input id="ricerca"  name="testo" type="text"></input>
                    <input type="submit" ></input>
                    </form>
                </label>
            </div>
        <div id="main">
            <p id="avviso">Non ci sono altre offerte.</p>
        </div>
    </div>
    <article id="offerte-view">

    </article>
    <!-- <footer>
        <h3 id="element1">Luca Rodolico O46001856</h3>
         <h3 id="luogo">
             <label>
                Catania
                <i class="fas fa-map-marker-alt"></i></label>
             <label>
                 <span id="temperatura"></span>
                 <i class="fas fa-thermometer-half"></i>
             </label>
         </h3>
        <h3 id="element2">WebProgramming 2020/21</h3>
    </footer> -->
    
</body>

</html>