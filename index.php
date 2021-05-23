<?php
session_start();

if(isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany']==true))
{
    header('Location: Strona.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LSO Nawojowa, ministranci Nawojowa, strona LSO </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Lso Nawojowa, Parafia Nawojowa, Nawojowa, Lso, ministranci, ministranci Nawojowa">
        <meta name="description" content="Strona przeznaczona dla Liturgicznej Sluzby Oltarza z prafii Nawojowa">
        <link rel="stylesheet" href="styl1.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="icon" href="lso.jpg">
    </head>
    <body>
    <header>
    <i class="fas fa-church"></i><span>LSO Nawojowa</span>
    <!--Lso Nawojowa, Prafia Nawojowa, Lso Tarn�w-->
    </header>
    <article>
        <div class="login">Logowanie <div>
            <form action="zaloguj.php" method="POST">
                <span >Login:</span> <input type="text" name="login" placeholder="Wpisz swój login..."><br>
                <span >Hasło:</span> <input type="password" name="haslo" placeholder="Wprowadź swoje haslo..."><br>
            <span class="haslo"><a href="przywroc.php">Zmień hasło</a> lub </span> 
            <span class="haslo"><a href="skontaktuj.php">Skontaktuj się z nami</a></span><br>
            <?php 
                if(isset($_SESSION['blad'])) echo $_SESSION['blad']."<br>";
            ?>
            <input class="wyslij" type="submit" value="Zaloguj->">
            </form>
    </article>
    <script type="text/javascript" src="http://cookie.webton.pl/utf/100/FFF/000/1/666"></script>
    </body>
</html>