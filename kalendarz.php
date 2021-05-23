<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kalendarz Mszy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale=1.0">
        <script src='https://kit.fontawesome.com/e5a12dc02e.js'></script>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Oswald:wght@500&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styl.css">
        <link rel="icon" href="lso.jpg">
        
    </head>
    <body>
        <div class="main">
            <ul>
                <li><a href="Strona.php">Aktualności</a></li>
                <li id="usun4"><a href="kalendarz.php">Kalendarz Mszy</a></li>
                <li id="usun3"><a href="punkty.php">Punkty</a></li>
                <li id="usun2"><a href="zbiorki.php">Zbiórki</a></li>
                <li id="usun"><a href="patroni.php" >Patroni</a></li>
                <li id="usun1"><a href="abc.php" >ABC Ministranta</a></li>
                <li onclick="document.getElementById('spisik').style.display='block'" ><a>Menu<i class="fas fa-angle-down"></i></a>
                    <ul id="spisik">
                        <li><a href="Strona.php" >Aktualności</a></li> 
                        <li><a href="kalendarz.php">Kalendarz Mszy</a></li>
                        <li><a href="punkty.php">Punkty</a></li>
                        <li><a href="zbiorki.php">Zbiórki</a></li>
                        <li><a href="patroni.php">Patroni</a></li>
                        <li><a href="abc.php">ABC Ministranta</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                        <li><a href='logout.php' id="wyloguj">Wyloguj si&#281;</a></li>
                    </ul>
                </li>
            </ul>  
                        
        <section>
            <div class="panel-left">
                <div class="main-text">Panel ministranta</div>
                <?php
                echo"<div class='info'>Imię: <span style='font-weight:300; margin-left:10px; '>".$_SESSION['name']."</span></div>"; 
                echo"<div class='info'>Nazwisko: <span style='font-weight:300; margin-left:10px; '>".$_SESSION['surname']."</span></div>";
                echo"<div class='info'>Stopień: <span style='font-weight:300; margin-left:10px; '>".$_SESSION['stopien']."</span></div>";
                echo"<div class='info'>Punkty: <span style='font-weight:300; margin-left:10px; font-family:Times New Roman'>".$_SESSION['suma']."</span></div>"; 
                echo"<div class='info'>Służenie: <span style='font-weight:300; margin-left:10px; '>".$_SESSION['dzien1']." , ".$_SESSION['dzien2']."</span></div>"; 
                echo"<div class='info'>Punkty(2020r.): <span style='font-weight:300; margin-left:10px; font-family:Times New Roman'>".$_SESSION['punkty2020']."</span></div>";
                echo "<a style='font-size:1.5vw; margin-left:3vw; text-decoration:underline;' href='logout.php'>Wyloguj się</a>";
                ?>
            </div>
        </section>
        <span id="1"></span>
        <article onclick="document.getElementById('spisik').style.display='none'">
            <div class="central-panel">
            <div class="text-main">Kalendarz Mszy</div>
            <div class="content"> 
                <div class="kalendarz"><b>Przypisane Msze &#346;wi&#281;te:</b></div>
                <?php
                    echo "<div style='font-weight:300; text-align:center; '>".$_SESSION['dzien1']." , ".$_SESSION['dzien2']."</div>"
                ?>
                <div class="kalendarz"><b>Msze Święte w ko&#347;ciele:</b> </div>
                <div class="kalendarz"><b>Niedziela: </b>  7.00, 9.00, 10.30, 12.00, 17.00</div>
                <div class="kalendarz"><b>W tygodniu: </b>  6.00, 6.30, 17.00</div>
                 <div class="kalendarz"><b>Roraty: </b>  6.00 (od poniedzia&#322;ku do soboty)</div>
                <br><br>
                <br><br><br>
            </div>
        </article>
    </div>
    
</body>
</html>