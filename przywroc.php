<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>LSO Nawojowa - Rejestracja</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styl1.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="icon" href="lso.jpg">
    </head>
    <body>
    <header>
    <i class="fas fa-church"></i><span>LSO Nawojowa</span>
    </header>

    <article>
        <div class="login">Zmiana hasła <div>
            <form action="zmien.php" method="POST">
                <span >Login:</span> <input type="text" name="login" placeholder="Wpisz swój login..."><br>
                <span >Hasło:</span> <input type="password" name="haslo" placeholder="Wprowadź swoje haslo..."><br>
                <span >Nowe hasło:</span> <input style="margin-right:50px;" type="password" name="nowehaslo" placeholder="Wprowadź nowe haslo..."><br>
                <span >Powt hasło:</span> <input style="margin-right:55px;" type="password" name="powtorzhaslo" placeholder="Wprowadź nowe haslo..."><br>
                <span style='color:orange'>Has&#322;o powinno sk&#322;ada&#263; si&#281; z przynajmniej 8 znakow(w tym znaki specjalne i liczby)</span><br>
            
            <span class="haslo"><a href="skontaktuj.php">Skontaktuj się z nami</a></span><br>
            <?php 
                if(isset($_SESSION['blad'])) echo $_SESSION['blad']."<br>";
            ?>
            <input class="wyslij" type="submit" value="Zmień->">
            </form>
    </article>
    </body>
</html>