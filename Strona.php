<?php
session_start();

if(!isset($_SESSION['zalogowany']))
{
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Aktualno&#347;ci</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale=1.0">
        <meta name="keywords" content="Lso Nawojowa, Parafia Nawojowa, Nawojowa, Lso, Lso Tarn�w">
        <meta name="description" content="Strona przeznaczona dla Liturgicznej Sluzby Oltarza z prafii Nawojowa">
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
            <div class="text-main">Aktualności</div>
            <div class="content"> 
                <div style="text-align:center;">
                <a id="czytania" href="https://liturgia.opoka.org.pl/">S&#322;owo Bo&#380;e na dzi&#347;!</a>
                </div>
                <div class="artykul-zaw">
                </div>
                <div class="artykul-tytul" style="color:red;">
                    Uwaga!!!
                </div>
                <div class="artykul-zaw">
                    Do waszych punkt&#243;w za służenie w kwietniu zostały dodane punkty za czuwanie przy ciemnicy i grobie. Jeśli ktoś zapomniał odbić się na punktualniku, a był obecny podczas swojego dyżuru, proszę o kontakt na messengerze lub na adres e-mail lso.nawojowa@gmail.com.    
                </div>
                <div class="artykul-tytul">
                    Punkty za kwiecień
                </div>
                <div class="artykul-zaw">
                    Zosta&#322;y przyznane punkty za s&#322;u&#380;enie w kwietniu. W najbliższym czasie uzupełnimy również punktacje za waszą służbę w kaplicy we Frycowej od początku roku. Proszę o cierpliwość. Sprawd&#378;cie, czy wszystko si&#281; zgadza. W razie pyta&#324; prosz&#281; pisa&#263; na messengerze lub na adres e-mail <b>lso.nawojowa@gmail.com</b>.
                </div>
                <div class="artykul-tytul">
                    Zbi&#243;rka dla LSO
                </div>
                <div class="artykul-zaw">
                    W czwartek(29.04.2021r) o godzinie 17:00 odbędzie się spotkanie dla Liturgicznej Służby Ołtarza. 
                </div>
                <div class="artykul-tytul">
                    Zbi&#243;rka dla aspirant&#243;w
                </div>
                <div class="artykul-zaw">
                    Dzisiaj nie będzie zbi&#243;rki dla aspirant&#243;w.
                </div>
                <div class="artykul-tytul">
                    VII Nawojowski Wiecz&#243;r Uwielbienia
                </div>
                <div class="artykul-zaw">
                    Zapraszam wszystkich dzisiaj(tj.piątek) na godz. 19:00 do naszego kościoła na VII Wiecz&#243;r Uwielbienia <i>#UBRANIWCUDA</i>. Służenie będzie nagrodzone 30 punktami.
                </div>
                <div class="artykul-tytul" style="color:red">
                    PUNKTY ZA MARZEC!
                </div>
                <div class="artykul-zaw">
                    Zosta&#322;y przyznane punkty za s&#322;u&#380;enie w marcu. Sprawd&#378;cie, czy wszystko si&#281; zgadza. W razie pyta&#324; prosz&#281; pisa&#263; na messengerze lub na adres e-mail <b>lso.nawojowa@gmail.com</b>.
                </div>
                <div class="artykul-tytul">
                    Wielkanoc to czas nadziei...
                </div>
                <div class="artykul-zaw">
                    Wielkanoc to czas nadziei,
                    czas odnawiania się wiary w Miłosierdzie Boże i dobro drugiego człowieka.
                    Pragniemy życzyć, by nadchodzące dni przyniosły mnogość łask i pokoju. 
                    Niech radość ze Zmartwychwstania Chrystusa wypełni nasze serca i dusze,
                    by w kolejną wiosnę wkroczyć z miłością i siłą.
                    Niech utwierdza naszą wiarę w zwycięstwo dobra nad złem, życia nad śmiercią, miłości nad nienawiścią.
                    Niech oświeca drogi codziennego życia,
                    obdarza błogosławieństwem
                    i pomaga życie czynić szczęśliwym.
                    Wesołych i ciepłych świąt Wielkanocnych!
                </div>
                <div class="artykul-tytul" style="color:red;">
                    Triduum Paschalne
                </div>
                <div class="artykul-zaw">
                    Drodzy ministranci i lektorzy 🙂 
                    W załącznikach przesyłam rozpiskę asyst liturgicznych na zbliżające się obchody Triduum Paschalnego. 
                    Bardzo proszę o obecność na pr&#243;bach. Pamiętajcie o tym by przychodząc do Kościoła założyć maseczkę i zdezynfekować ręce. 
                    W razie pytań, wątpliwości proszę pisać na messengerze lub na adres email lso.nawojowa@gmail.com. Pozdrawiam 🙂<br><br>
                    <b>Załączniki:</b><br>
                    Asysta Triduum Paschalne-><a href="Asysty liturgiczne w Nawojowej Lso.docx">Link tutaj</a><br>
                    Dyżury czuwania Lso-><a href="Dyzury czuwania LSO.docx">Link tutaj</a>
                </div>
                <div class="artykul-tytul">
                    Zbi&#243;rka dla aspirant&#243;w
                </div>
                <div class="artykul-zaw">
                    Kr&#243;luj nam Chryste!<br>
                    Dzisiaj nie będzie zbi&#243;rki dla aspirant&#243;w
                </div>
                <div class="artykul-tytul">
                    Prezentacja - księgi liturgiczne  
                </div>
                <div class="artykul-zaw">
                    Poniżej zamieszczam prezentację na temat ksiąg liturgicznych, o których rozmawialiśmy wczoraj na kursie. Proszę o zapoznanie się z tematem <a href="lekcjonarz.ppsx" target="_blank">pobierz prezentację</a> 
                </div>
                <div class="artykul-tytul">
                    Kurs Lektorski
                </div>
                <div class="artykul-zaw">
                    Kandydaci na lektor&#243;w!!! Poniedziałek 15.03.2021 r. Kurs lektorski godz. 17:45 🙂 
                </div>
                <div class="artykul-tytul">
                    Zbiórka dla LSO
                </div>
                <div class="artykul-zaw">
                    Jutro o godz. 16:00 odbędzie się zbi&#243;rka dla aspirant&#243;w, a na godz 17:00 zapraszamy na spotkanie modlitewne LSO. 
                </div>
                <div class="artykul-tytul" style="color:red">
                    PUNKTY ZA LUTY!
                </div>
                <div class="artykul-zaw">
                    Zosta&#322;y przyznane punkty za s&#322;u&#380;enie w lutym. Sprawd&#378;cie, czy wszystko si&#281; zgadza. W razie pyta&#324; prosz&#281; pisa&#263; na messengerze lub na adres e-mail <b>lso.nawojowa@gmail.com</b>.
                </div>
                 <div class="artykul-tytul">
                    Kurs lektorski
                </div>
                <div class="artykul-zaw">
                    Moi drodzy serdecznie zapraszam na kurs lektorski, ministrant&#243;w z klasy VI, VII. Pierwsze spotkanie odbędzie się online we wtorek 02.03.2021 r. o godz. 14:00. Podaję link do spotkania na Skype <a href="https://join.skype.com/dAiNFRUtPYWi" target="_blank">https://join.skype.com/dAiNFRUtPYWi</a>. Pozdrawiam 🙂
                </div>
                <div class="artykul-tytul">
                    Zbiórka dla Liturgicznej Służby Ołtarza
                </div>
                <div class="artykul-zaw">
                    W czwartek w zakrystii odbędzie się spotkanie dla aspirant&#243;w o godz 16:00, a dla reszty służby liturgicznej o 17:00.
                </div>
                <div class="artykul-tytul">
                    Zbiórka dla aspirant&#243;w 
                </div>
                <div class="artykul-zaw">
                    Dzisiaj o godzinie 16:00 w salce na plebanii odbędzie się zbi&#243;rka dla aspirant&#243;w. 
                </div>
                <div class="artykul-tytul">
                    Punkty za stycze&#324; 
                </div>
                <div class="artykul-zaw">
                    Zosta&#322;y przypisane punkty za kolejny miesi&#261;c s&#322;u&#380;enia. Prosz&#281; sprawdzi&#263; czy wszystko si&#281; zgadza.
                </div>
                 <div class="artykul-tytul" style="color:red;">
                    Wa&#380;ne og&#322;oszenia
                </div>
                <div class="artykul-zaw">
                    Kr&#243;luj nam Chryste!<br>
                    Mam dla was kilka informacji na najbli&#380;sze dni.<br>
                    1.) Jutro nie b&#281;dzie zbi&#243;rki w ko&#347;ciele.<br>
                    2.) Pod koniec tygodnia zostan&#261; przypisane punkty za s&#322;u&#380;enie w styczniu.<br> 
                    3.) W pi&#261;tek o godz 19:00 odb&#281;dzie si&#281; V Wiecz&#243;r Uwielbienia. Zach&#281;cam wszystkich do s&#322;u&#380;enia.
                </div>
                <div class="artykul-tytul">
                    Punkty za s&#322;u&#380;enie na Frycowej
                </div>
                <div class="artykul-zaw">
                    Zosta&#322;y dodane punkty z ostatnich 3 miesi&#281;cy dla ministrant&#243;w za s&#322;u&#380;enie w kaplicy na Frycowej. Prosz&#281; o sprawdzenie czy wszystko si&#281; zgadza.  
                </div>
                <div class="artykul-tytul">
                    Zbi&#243;rka dla aspirant&#243;w
                </div>
                <div class="artykul-zaw">
                Kr&#243;luj nam Chryste!<br>
                    Zapraszam wszystkich aspirant&#243;w w najbli&#380;szy czwartek na zbi&#243;rk&#281; do zakrystii o godz 16:00.  
                </div>
            </div>
        </article>
        <script src="http://skryptcookies.pl/cookie.js"></script>
    </div>
</body>
</html>