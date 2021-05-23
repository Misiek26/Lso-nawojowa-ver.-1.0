<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Punkty</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale=1.0">
        <script src='https://kit.fontawesome.com/e5a12dc02e.js'></script>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Oswald:wght@500&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styl.css">
        <link rel="icon" href="lso.jpg">
    </head>
    <body id="white">
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
            <article onclick="document.getElementById('spisik').style.display='none'"id="punkty">
                <div class="central-panel"  >
                    <div class="text-main">Punkty</div>
                        <div class="content"> 
                            <table>
                                <tr>
                                    <th>Miesiąc</th>
                                    <th>I</th>
                                    <th>II</th>
                                    <th>III</th>
                                    <th>IV</th>
                                    <th>V</th>
                                    <th>VI</th>
                                    <th>VII</th>
                                    <th>VIII</th>
                                    <th>IX</th>
                                    <th>X</th>
                                    <th>XI</th>
                                    <th>XII</th>
                                    <th>Razem</th>
                                </tr>
                                <tr>
                                    <td>Punkty</td>
                                    <?php
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['jeden2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['dwa2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['trzy2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['cztery2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['piec2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['szesc2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['siedem2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['osiem2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['dziewiec2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['dziesiec2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['jedenascie2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['dwanascie2']."</td>";
                                        echo "<td style='font-family:Times New Roman'>".$_SESSION['suma2']."</td>";
                                    ?>
                                </tr>
                                <tr>
                                    <td>Ujemne</td>
                                    <?php
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['cos']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['dwa1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['trzy1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['cztery1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['piec1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['szesc1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['siedem1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['osiem1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['dziewiec1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['dziesiec1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['jedenascie1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['dwanascie1']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['suma1']."</td>";
                                    ?>
                                </tr>
                                <tr>
                                    <td>Suma</td>
                                    <?php
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['jeden']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['dwa']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['trzy']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['cztery']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['piec']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['szesc']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['siedem']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['osiem']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['dziewiec']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['dziesiec']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['jedenascie']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['dwanascie']."</td>";
                                    echo "<td style='font-family:Times New Roman'>".$_SESSION['suma']."</td>";
                                    ?>
                                </tr>
                            </table>
                    </div>
                    <br>
                    <div style="border:1px solid black; text-align:center;">
                        <h3 style="font-weight:bolder;">Najlepsi ministranci w kwietniu</h3>
                        <p text-align:center;>I. Mateusz Frączek - 265</p>
                        <p class="Best">II. Szymon Sędzimir - 255</p>
                        <p class="Best">III. Maciej Sędzimir, Kacper Bugara - 240</p>
                    </div>
                    <?php
                        echo "<h3 style='color:rgb(44, 108, 188);'>Suma punktów(2020r.): ".$_SESSION['punkty2020']."</h3>";
                    ?>
                </div>
            </article>
        </div>
    </body>
</html>