<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ABC Ministranta</title>
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
            <div class="text-main">ABC Ministranta</div>
            <div class="content">
            <div class="artykul-zaw">
                <b>MINISTRANT</b> - cz&#322;onek ludu Bo&#380;ego, kt&#243;ry w czasie sprawowania liturgicznych obrz&#281;d&#243;w spe&#322;nia pos&#322;ug&#281; pomocnicz&#261; w spos&#243;b okre&#347;lony przepisami Ko&#347;cio&#322;a.
                S&#322;owo "ministrant" pochodzi z j&#281;zyka &#322;aci&#324;skiego "ministrare" i oznacza "s&#322;u&#380;y&#263;, pomaga&#263;". Ministrant s&#322;u&#380;y kap&#322;anowi         i ludowi Bo&#380;emu, a przez to s&#322;u&#380;y samemu Bogu. Chocia&#380; ch&#322;opcom bardziej odpowiadaj&#261; mundury ni&#380; suknie, to ministranci ch&#281;tnie wk&#322;adaj&#261; na siebie bielutkie kom&#380;e, by na oczach zgromadzonych w ko&#347;ciele wiernych dostojnie spe&#322;nia&#263; swoje funkcje. Ministrant powinien by&#263; wzorem dla swojego otoczenia, kt&#243;rym jest jego klasa, podw&#243;rko, a co najwa&#380;niejsze jego najbli&#380;sza rodzina. Musi po&#347;wi&#281;ci&#263; sw&#243;j czas na to, aby s&#322;u&#380;y&#263; Panu Bogu. Zanim jednak zostanie dopuszczony do s&#322;u&#380;by przy o&#322;tarzu, musi by&#263; odpowiednio przygotowany do tego wielkiego wydarzenia.
            </div>
            <div class="artykul-zaw">
            <h3>Zasady ministranta</h3>
                1. Ministrant kocha Boga i dla Jego chwały wzorowo spełnia swoje obowiązki.<br>
                2. Ministrant służy Chrystusowi w ludziach.<br>
                3. Ministrant zwalcza swoje wady i pracuje nad swoim charakterem.<br>
                4. Ministrant rozwija w sobie życie Boże.<br>
                5. Ministrant poznaje liturgię i żyje nią.<br>
                6. Ministrant wznosi wszędzie prawdziwą radość.<br>
                7. Ministrant przeżywa Boga w przyrodzie.<br>
                8. Ministrant zdobywa kolegów w pracy i zabawie dla Chrystusa.<br>
                9. Ministrant jest pilny i sumienny w nauce i pracy zawodowej.<br>
                10. Ministrant modli się za Ojczyznę i służy jej rzetelną pracą.<br>
            </div>
            <br><br><br>
            </div>
        </article>
    </div>
</body>
</html>