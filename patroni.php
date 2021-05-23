<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Patroni LSO</title>
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
            <div class="text-main">Patroni Ministrantów</div>
            <div class="content"> 
                <div class="artykul-tytul">
                    Św. Tarsycjusz
                </div>
                <div class="artykul-zaw">
                    <img src="img/tarsycjusz.jpg" alt="Tarsycjusz" title="Tarsycjusz">
                    Niewiele wiemy o św. Tarsycjuszu, ale wystarczająco, aby uznać go za męczennika Eucharystii. Był młodym Rzymianinem, akolitą, należącym do otoczenia papieża Stefana I, późniejszego męczennika. Posługa akolity była wtedy jednym ze święceń niższych, które dawało prawo klerykom usługiwania do Mszy św., a więc pełnienia tej zaszczytnej funkcji, którą obecnie sprawują ministranci. Za cesarza Decjusza (249-251) nastąpiły jedne z najkrwawszych prześladowań chrześcijan. Więzienia zapełniły się wyznawcami. Ograniczono też możliwości widywania się z uwięzionymi, wskutek czego umacnianie uwięzionych chrześcijan Komunią św. przed ich męczeńską śmiercią stało się prawie niemożliwe. Każdy odważny kapłan, diakon czy dorosły chrześcijanin, idący do więzienia z Komunią św., narażał się na rozpoznanie i areszt, nie osiągnąwszy nawet celu. W tej sytuacji Tarsycjusz, chłopiec prawdopodobnie około dziesięcioletni, okazał gotowość chodzenia do więzienia z Chrystusem Eucharystycznym, sądząc, że z powodu młodego wieku uda mu się niepostrzeżenie dotrzeć do braci i sióstr skazanych na śmierć męczeńską. Czynił tak zapewne wiele razy.
                        Pewnego dnia, gdy szedł z Najświętszym Sakramentem ukrytym na piersiach, pogańscy rówieśnicy zaczęli zachęcać go, aby przyłączył się do wspólnej zabawy. On jednak zaczął uciekać przed nimi. Kiedy spostrzegli, że coś przyciska do piersi, zaczęli go gonić, aby sprawdzić co to takiego. Powalili go na ziemię, kopali i obrzucali kamieniami. Wyrwał go z ich rąk przechodzący obok żołnierz rzymski Kwadratus, chrześcijanin, ale po zaniesieniu do domu chłopiec zmarł na skutek zadanych mu ran. Został męczennikiem Eucharystii. Wydarzenie to miało miejsce prawdopodobnie w 250 roku. Ciało Świętego zostało pogrzebane na cmentarzu św. Kaliksta obok szczątków papieża św. Stefana I, który kilka lat po nim poniósł śmierć męczeńską († 257). Papież Damazy I († 384) męczeństwo św. Tarsycjusza opisał wierszem.
                        Świętego Tarsycjusza czczono początkowo w taki sam sposób jak innych męczenników. Obchodzono rocznice jego narodzin dla nieba przy jego grobie, w katakumbach św. Kaliksta. Nie znalazł się wśród świętych, którzy cieszyli się wyjątkowym kultem. Przy wielkiej ilości męczenników w Rzymie nie każdy mógł być usytuowany w pierwszym szeregu. Jednak papież Damazy I porównywał go ze św. Szczepanem, należącym do świętych najbardziej popularnych. Najstarsze księgi liturgiczne, pochodzące z przełomu VII/VIII w., nie zawierały wzmianki o św. Tarsycjuszu. Pod datą 15 sierpnia umieścił go Adon z Vienne († 875) w opracowanym przez siebie martyrologium (odtąd w Martyrologium romanum figuruje on zawsze pod datą 15 sierpnia). W dniu tym obchodzona jest jednak przede wszystkim uroczystość Wniebowzięcia Najświętszej Maryi Panny. Św. Tarsycjusz musiał więc pozostać w cieniu. W księgach liturgicznych do dnia dzisiejszego nie ma on swojego formularza.
                        Relikwie św. Tarsycjusza w 1675 roku przeniesiono do Neapolu i umieszczono w osobnej kaplicy przy bazylice św. Dominika. Część jego relikwii w specjalnej trumience znajduje się w salezjańskim kolegium w Rzymie przy via Appia Antica. Szczególne nabożeństwo do św. Tarsycjusza żywił wybitny kardynał angielski Wiseman, który w 1855 roku ku jego czci ułożył specjalny utwór poetycki pod tytułem Fabiola. W 1939 roku ku czci św. Tarsycjusza architekt Rossi zbudował w Rzymie piękną świątynię.
                        W słynnym Luwrze znajduje się rzeźba dłuta A. Falguiere, przedstawiająca św. Tarsycjusza w pozycji leżącej – w chwili konania przyciska on Najświętszy Sakrament do serca. We Włoszech św. Tarsycjusz wciąż cieszy się szczególną czcią jako patron różnego rodzaju kółek eucharystycznych. Na początku XX w., za papieża św. Piusa X, obrano go za patrona Włoskiej Młodzieży Akcji Katolickiej. W ikonografii św. Tarsycjusz przedstawiany jest jako ten, który na swojej piersi niesie Najświętszy Sakrament, ochraniając Go swoimi rękami. Po reformie kalendarza liturgicznego wspomnienie św. Tarsycjusza przeniesiono na 21 listopada.
                        Święty Tarsycjuszu, Patronie i wzorze nasz,
                        Ty niosłeś Jezusa na sercu i w sercu jako największy swój skarb.
                        Cześć i miłość Jezusa promieniowały z Twojego oblicza
                        i dla Niego oddałeś radośnie swe młode życie.
                        I my chcemy nosić Jezusa w swym sercu.
                        Chcemy ze czcią i miłością chodzić wokół Jego ołtarza.
                        Chcemy nieść Jezusa do domu,
                        do szkoły i wszędzie przez dobry przykład.
                        Pomóż nam i spraw, abyśmy całym życiem
                        tylko Jemu służyli i do Niego należeli. Amen.
                </div>
                <div class="artykul-tytul">
                    Św. Stanisław Kostka
                </div>
                <div class="artykul-zaw">
                    <img src="img/skostka.jpg" alt="Stanis&#322;aw Kostka" title="Stanis&#322;aw Kostka">
                    Urodził się w grudniu 1550 r. w Rostkowie (dokładny dzień urodzenia nie jest znany). Rodzice jego – Jan Kostka, kasztelan zakroczymski i Małgorzata z Kryskich – byli bardzo religijni.
                    Stanisław do 14 roku życia uczył się w domu pod okiem wychowawcy Jana Bilińskiego. Wtedy to, jak to było wówczas w modzie, Stanisław wraz ze swoim starszym bratem Pawłem został wysłany na studia za granicę. Rodzice wybrali dla nich szkołę prowadzoną przez jezuitów we Wiedniu. Początkowo Stanisławowi nie szła nauka, ponieważ nie posiadał odpowiedniego przygotowania. Jednak pod koniec trzeciego roku należał już do najlepszych uczniów. Równolegle z nauką ćwiczył się w pobożności, umartwieniach i kontemplacji w myśl regulaminu gimnazjum: “Taką pobożnością, taką skromnością i takim poznaniem przedmiotów niech się uczniowie starają ozdobić swój umysł, aby się mogli podobać Bogu i ludziom pobożnym, a przyszłości ojczyźnie i sobie samym przynieść korzyść”. Prawdopodobnie już wtedy Stanisław uświadomił sobie, że pragnie wstąpić do Towarzystwa Jezusowego (Zakonu Jezuitów). Nie dbał o zabawy, towarzystwo, hałaśliwe spotkania studenckie. W pierwszej połowie grudnia 1565 roku Stanisław zapadł na poważną chorobę. Przyczyną były wyczerpujący tryb życia – nocne czuwania, posty i umartwienia, które osłabiły organizm chłopca. Po kilku dniach wysokiej gorączki przypuszczał, że jest bliski śmierci. Prosił o sprowadzenie księdza. Nikt jednak nie brał jego prośby na serio. Chory zaczął się modlić żarliwie do świętej Barbary, patronki dobrej śmierci. Doznał wówczas widzenia, w którym Święta przyniosła mu Komunię do jego pokoju. Również podczas choroby, kiedy prosił Matkę Bożą o pomoc, ujrzał Maryję z Dzieciątkiem, które złożyła mu na wyciągnięte ręce. W tym widzeniu otrzymał od Niej polecenie, aby wstąpił do Zakonu Jezuitów. Zamysł taki powziął Stanisław już wcześniej, jednak teraz umocnił się ostatecznie w swoim postanowieniu. Zaczął szybko wracać do zdrowia.
                    Jezuici przyjmowali kandydatów tylko za zgodą rodziców, a Stanisław na nią nie mógł liczyć, dlatego też postanowił uciec. Jeden z jezuitów pomógł Stanisławowi dając mu list polecający i każąc mu się skierować do Augsburga. Ucieczka rozpoczęła się 10 sierpnia 1567 roku. W drodze Stanisław zamienił się ubraniem z żebrakiem. Gdy dotarł do Augsburga nie zastał tam prowincjała. Dlatego udał się do Dylingi. Łącznie z Wiednia do Dylingi przebył około 650 km. 28 października tego samego roku wysłano Stanisława wraz z dwoma innymi kandydatami do Rzymu, gdzie przyjęto go do nowicjatu. Ojciec próbował go za wszelką cenę odzyskać, ale Stanisław był już dorosły i miał prawo decydować o sobie. W pierwszych miesiącach 1568 roku święty przyjął śluby zakonne. Stanisław Kostka spędził w rzymskim nowicjacie niespełna 10 miesięcy. Wróciły dolegliwości zdrowotne. Zmarł z wyczerpania w nocy z 14 na 15 sierpnia 1568 roku.
                    Relikwia głowy św. Stanisława znajduje się w nowicjacie jezuickim w Gorheim koło Sigmaringen. Ciało spoczywa w kościele św. Andrzeja w Rzymie.
                    W 1605 roku papież Paweł V zezwolił na umieszczenie jego obrazu w kościele zakonnym. Papież Klemens X w 1670 roku pozwolił jezuitom na odprawianie Mszy św. ku czci św. Stanisława, a w cztery lata później ogłosił go jednym z głównych patronów Polski i Litwy. Kanonizował Stanisława Kostkę papież Benedykt XIII w 1723 roku.

                    Modlitwa do św. Stanisława Kostki
                    O Święty Stanisławie Kostko, doskonały Naśladowco Jezusa Chrystusa, prawdziwy Czcicielu Matki naszej, Najświętszej Maryi Panny, i chwalebny nasz Obrońco! Chociaż nie jesteśmy godni Cię prosić, to jednak ufając Twej najgorętszej miłości, pragniemy Cię teraz i zawsze prosić, abyś przez zasługi i pośrednictwo Najświętszej Maryi Panny, wszystkich Aniołów i Świętych, a przede wszystkim przez nieskończone zasługi Pana naszego Jezusa Chrystusa, i przez skuteczne orędownictwo Twoje, wyjednał nam wszystkie dary i łaski, abyśmy się wszyscy stali świętymi i doskonałymi, jak Ojciec niebieski oraz abyśmy korzystali z niepojętego daru Najświętszej Eucharystii i nabożeństwa do naszej drogiej Matki, Maryi, jak tego chce Bóg, i przyjęci zostali do nieba, by na wieki wychwalać zmiłowanie Boże. Amen.
                </div>
                <div class="artykul-tytul">
                    Św. Alojzy Gonzaga
                </div>
                <div class="artykul-zaw">
                    <img src="img/gonzaga.jpg" alt="Alojzy Gonzaga" title="Alojzy Gonzaga">
                    Alojzy urodził się 9 marca 1568 roku koło Mantui jako najstarszy syn z ośmiu synów margrabiego Ferdynanda di Castiglione. Ojciec przywiązywał dużą wagę do jego narodzin. Alojzy urodził się jednak bardzo wątły, a matce groziła przy porodzie śmierć. Rodzice więc uczynili ślub, że udadzą się z pielgrzymką do Loreto, jeśli matka i syn wyzdrowieją. Tak się też stało.
                    Ojciec marzył o laurach rycerskich dla syna. W tym właśnie czasie flota chrześcijańska odniosła świetne zwycięstwo nad Turkami pod Lepanto (1571 r.). Ojciec Alojzego brał udział w wyprawie. Dumny ze zwycięstwa ubrał swojego trzyletniego syna w strój rycerza i paradował z nim w fortecy nad rzeką Pad ku radości żołnierzy. Kiedy ojciec podążył na wyprawę wojenną do Tunisu (1573 r.), pięcioletni Alojzy wrócił pod opiekę matki.
                    Kiedy Alojzy miał 7 lat, przeżył swoje „nawrócenie”, jak sam twierdził. Poczuł nicość ponęt tego świata i wielką tęsknotę za Panem Bogiem. Odtąd duch modlitwy, otrzymany od matki, wzrósł w nim jeszcze silniej. Codziennie z budującą pobożnością odmawiał na klęczkach oprócz normalnych pacierzy porannych i wieczornych siedem psalmów pokutnych i oficjum do Matki Bożej. Ojciec był z tego niezadowolony. Po swoim powrocie z wyprawy wysłał syna do Florencji na dwór wielkiego księcia Franciszka Medici, by tam nabył manier dworskich. Alojzy jednak najlepiej czuł się w słynnym sanktuarium, obsługiwanym we Florencji przez serwitów, w kościele Annuntiata. Tu przed ołtarzem Bożej Matki złożył ślub dozgonnej czystości. Jak głoszą jego żywoty, w nagrodę miał otrzymać przywilej nieodczuwania pokus przeciw anielskiej cnocie czystości.
                    W 1579 roku ojciec Alojzego został mianowany gubernatorem Monferrato w Piemoncie. Przenosząc się na tamtejszy zamek, zabrał też ze sobą Alojzego. W następnym roku, z polecenia papieża Grzegorza XIII, wizytację kanoniczną diecezji Brescia odbywał św. Karol Boromeusz. Z tej okazji udzielił Alojzemu Pierwszej Komunii św. Jesienią tegoż roku (Alojzy miał wówczas 12 lat) rodzice chłopca przenieśli się do Madrytu, gdzie na dworze królewskim spędzili wraz z Alojzym dwa lata. Alojzy nadal pogłębiał w sobie życie wewnętrzne przez odpowiednią lekturę. Rozczytywał się w dziełach św. Piotra Kanizego i w Ćwiczeniach duchownych św. Ignacego. Modlitwę swoją przedłużał do pięciu godzin dziennie. Równocześnie kontynuował swoje studia. Wreszcie Święty zdecydował się na wstąpienie do Towarzystwa Jezusowego. Kiedy ojcu wyjawił swoje postanowienie, ten wpadł w gniew, ale stanowczy Alojzy nie ustąpił. Na korzyść swego brata, Rudolfa, zrzekł się prawa do dziedzictwa i udał się do Rzymu. W drodze zatrzymał się kilka dni w Loreto. 25 listopada 1585 roku wstąpił do nowicjatu jezuitów w Rzymie. Jak sam wyznał, praktyki pokutne, które zastał w zakonie, były znacznie lżejsze od tych, jakie sam sobie nakładał. Cieszył się jednak bardzo, że miał okazję do ćwiczenia się w wielu innych cnotach, do jakich mu zakon dawał okazję.
                    Jesienią 1585 roku Alojzy uczestniczył w publicznej dyspucie filozoficznej w słynnym Kolegium Rzymskim, gdzie olśnił wszystkich subtelnością i siłą argumentacji. Zaraz potem otrzymał święcenia niższe i został skierowany przez przełożonych na studia teologiczne. Był na trzecim roku studiów, kiedy we wrześniu 1589 roku przybył do Kolegium Rzymskiego św. Robert Bellarmin. Wezwał on Alojzego, by powrócił do Castiglione i pojednał swojego brata Rudolfa z ojcem, który chciał wydziedziczyć syna tylko za to, że ten odważył się wejść w związek małżeński z osobą niższego stanu. Po załagodzeniu sporu Alojzy wrócił do Rzymu na czwarty rok studiów teologicznych, który miał zakończyć święceniami kapłańskimi (1590 r.).
                    Wyroki Boże były jednak inne. W latach 1590-1591 Rzym nawiedziła epidemia dżumy. Alojzy prosił przełożonych, by mu zezwolili posługiwać zarażonym. Wraz z innymi klerykami udał się na ochotnika do szpitala św. Sykstusa oraz do szpitala Matki Bożej Pocieszenia. Wyczerpany studiami i umartwieniami organizm kleryka uległ zarazie. Alojzy zmarł jako kleryk, bez święceń kapłańskich, 21 czerwca 1591 roku w wieku zaledwie 23 lat.
                    Sława św. Alojzego była tak wielka, że już w roku 1605 papież Paweł V ogłosił go błogosławionym. Kanonizacja jednak odbyła się dopiero w 1726 roku. Dokonał jej papież Benedykt XIII wraz z kanonizacją św. Stanisława Kostki. Tenże papież ogłosił w 1729 roku św. Alojzego patronem młodzieży, zwłaszcza studiującej. W 1926 roku papież Pius XI ogłosił św. Alojzego patronem młodzieży katolickiej. Jego relikwie spoczywają w kościele św. Ignacego w Rzymie. Szczególnym nabożeństwem do świętych Stanisława Kostki i Alojzego Gonzagi wyróżniał się św. Robert Bellarmin. Miał on ich wizerunki w swoim pokoju. Niemniej serdecznym nabożeństwem do św. Alojzego wyróżniał się św. Jan Bosco. Ku jego czci obchodził „nabożeństwo sześciu niedziel”, przygotowujących do uroczystości św. Alojzego, którą obchodził bardzo gorliwie. Drugie z kolei swoje oratorium w Turynie nazwał właśnie jego imieniem.  
                    W ikonografii św. Alojzy przedstawiany jest w sutannie jezuickiej, w białej komży z szerokimi rękawami. Jego atrybutami są: Dziecię Jezus w ramionach, mitra książęca u stóp, krzyż, lilia, czaszka. Wspomnienie Świętego obchodzone jest 21 czerwca.

                    Boże, Twórco i Pomnożycielu darów niebiańskich,
                    Ty zesłałeś Świętemu Alojzemu łaskę niewinności
                    i natchnąłeś go duchem pokuty.
                    Spraw przez jego zasługi,
                    abyśmy mogli naśladować jego pokorę. Amen.                
                </div>
                <div class="artykul-tytul">
                    Św. Jan Berchmans
                </div>
                <div class="artykul-zaw">
                    <img src="img/berchmans.jpg" alt="Berchmans" title="Berchmans">
                    Jan Berchmans urodził się 13 marca 1599 roku w Diest, miejscowości położonej na terenie dzisiejszej Belgii. Przyszedł na świat w rodzinie średnio zamożnej, jako najstarszy z pięciu synów. Jego ojciec był garbarzem i handlarzem skór, a także szewcem, matka zaś jego, Elżbieta, była córką burmistrza Hadriana van den Hove. „Najczęściej można było go widzieć w kościele, a najrzadziej na ulicy” – mówił o Janku jego nauczyciel. „Był tak czysty i solidny, że młodzieńcze wady nie miały do niego przystępu”. Z powodu jego niewinności i szczerej pobożności ludzie nazywali go aniołem.
                    Na usilne prośby chłopca rodzice zgodzili się zapłacić za jego naukę. Jednak na skutek choroby matki musiał przerwać studia. Dopiero dzięki finansowej dotacji miejscowego proboszcza Piotra van Emmericka mógł kontynuować rozpoczęte nauki. Od młodego wieku czuł powołanie do stanu du­chownego. Warunki materialne rodziny, a potem śmierć matki utrud­niały mu pójście drogą powołania. Dzięki opiece różnych kapłanów i własnej pracy zdobył potrzebne wykształcenie w Kolegium Jezuitów w Mechelen (1615 r.). W tym czasie jego owdowiały ojciec został wyświęcony na kapłana (1618 r.).
                    Jan wstąpił do nowicjatu jezuitów, a ze względu na jego duże zdolności w 1618 roku wysłano go na studia do Rzymu. O. Korneliusz Lapide († 1637), znany z komentarzy do ksiąg Pisma Świętego, tak podsumował swoje wrażenia z obserwacji Jana Barchmansa: „U Jana uderza mnie jego dziewiczy urok, jego towarzyskość i miłe usposobienie, które sprawiły, że drogim był dla wszystkich; oblicze jego było klarowne i proste, podobnie jak jego mowa. Do każdego odnosił się ze czcią, gotów zawsze do usług. Na jego obliczu gościł zawsze przyjazny uśmiech, którego nawet śmierć nie zdoła zgasić”. Przez swoje życie odznaczał się także szczególnym nabożeństwem do Najświętszego Sakramentu. W czasie studiów w Rzymie zapadł poważnie na zdro­wiu. Ciężko zachorował, a wycieńczony organizm nie był w stanie się obronić. Na śmiertelnym łożu brał różaniec w ręce, krzyż, reguły zakonne i mówił: „Z tym chętnie umrę”. Zmarł 13 sierpnia 1621 roku, mając 22 lata. Prawie doszedł do upragnionego kapłaństwa. Był wzorem w zachowaniu reguły za­konnej, a jego pragnieniem było odtworzyć wzór, jaki zostawił św. Alojzy Gonzaga, który zmarł wcześniej w opinii świętości.
                    Zasady według św. Jana Berchmansa:
                    
                    Serce moje jedynie bezpiecznym żyć może, gdy wytrwa w szczerej, dziecięcej miłości ku Matce Bożej.
                    Mało mówić, dużo czynić.
                    Wielce sobie ważyć drobne sprawy. Najdoskonalszą rzeczą jest zacząć od najmniejszych rzeczy.
                    Jeśli nie dojdę do świętości za młodu, nigdy nie będę świętym.
                    Myśl, żebyś Panu Bogu się podobał, a Pan Bóg o tobie myśleć będzie.
                    Sumiennie dopilnuję punktualnego rannego wstawania.
                    Kto nie docenia modlitwy, nie wytrwa w pobożności.
                    Wszystko, co czynisz, czyń z wielką starannością.
                    Cierpliwość koroną wszelkich cnót.
                    Nie czyń nigdy tego, co ci się w drugich nie podoba, ale to, co się w nich podoba.
                    Święty Jan Berchmans przedstawiany jest na obrazach w sutannie jezuickiej. W Kościele pamiątka św. Jana Berchmansa obchodzona jest 13 sierpnia.
                    
                    Święty Janie Berchmansie,
                    racz być moim opiekunem i przewodnikiem do nieba.
                    Wypraszaj mi światło i dar rady w wątpliwościach,
                    siłę i męstwo w pokusach i przeciwnościach.
                    Kieruj moimi krokami, ręce moje nakłaniaj ku dobrym uczynkom,
                    a serce i wolę zapalaj do miłości Boga i bliźniego.
                    Dopomóż mi, abym do końca wiernie służył Bogu,
                    jak Ty służyłeś. Amen.        
                </div>
                <div class="artykul-tytul">
                    Św. Dominik Savio
                </div>
                <div class="artykul-zaw">
                    <img src="img/savio.jpg" alt="Dominik Savio" title="Dominik Savio">
                    Dominik Savio urodził się 2 kwietnia 1842 roku we Włoszech w miejscowości Riva do Chieri, koło Turynu. Rodzicami jego byli Carlo Savio i Brygida Gaiato. Ochrzczono go już w dniu jego urodzin. Był drugim z dziesięciorga dzieci. Ojciec był kowalem, a mama krawcową. Kiedy Dominik kończył drugi rok życia, rodzina Savio ze względu na pracę przeniosła się do Morialdo, które leżało na przedmieściu Castelnuovo d’Asti. Dzieci były wychowywane w głębokiej religijności. Dominik miał dobry charakter i pobożne serce. Już od najwcześniejszego dzieciństwa, jak twierdzili jego rodzice, nie sprawiał trudności. Był posłuszny kademu poleceniu. Jego pobożność wzrastała szybciej niż u innych dzieci. Gdy miał zaledwie 4 lata, nie trzeba było przypominać mu o odmówieniu modlitw porannych i wieczornych, przed posiłkiem i po posiłku oraz o modlitwie Anioł Pański. Co więcej, sam zachęcał domowników, by odmawiali te modlitwy, gdy o nich zapominali. Mając 5 lat, nauczył się służyć do Mszy św. Przywiązywał do tego dużą wagę. Niemal codziennie przychodził do kościoła, nawet zimą biegł na spotkanie z Bogiem. Często był na miejscu jeszcze przed otwarciem kościoła, wówczas modlił się na klęczkach przed drzwiami. Gdy miał 7 lat, umiał już na pamięć cały katechizm. Choć w tamtych czasach dzieci dopuszczano do Pierwszej Komunii św. po ukończeniu 11 lub 12 lat, Dominik przyjął Chleb Aniołów wyjątkowo wcześniej, bo w 7 roku życia. Tego dnia zapisał w książeczce do nabożeństwa następu­jące postanowienia, świadczące o dojrzałym życiu religijnym:
                    <ol>
                    <li>Będę się często spowiadał, a do Komunii św. przystępował, ilekroć pozwoli mi na to spowiednik;</li>
                    <li>Moimi przyjaciółmi będą Jezus i Maryja;</li>
                    <li>Śmierć – tak, ale nie grzech.</li>
                    </ol>
                    Kiedy Dominik ukończył szkołę elementarną, wszyscy jego koledzy z radością odłożyli na bok pióra, wzięli do ręki rydel i motykę i poszli do pracy na roli. On jednak zapragnął dalej się uczyć. Pragnienie uczenia się wypowiedział w słowach: „Gdybym był ptaszkiem, chciałbym polecieć rano i wieczorem do szkoły w Castelnuovo i kontynuować moją naukę”. Z butami przewieszonymi przez ramię, bo trzeba było oszczędzać na pobyt w szkole, co ranka maszerował na bosaka do szkoły gminnej do Castelnuovo d’Asti, oddalonej od Murialdo o 5 km. Musiał więc przemierzyć codziennie 10 km tam i z powrotem. Szedł zakurzonymi, kamienistymi drogami polnymi. Często padał deszcz, wiał wiatr lub prażyło słońce. Po drodze powtarzał to, czego nauczył się w szkole, gdyż w domu nie pozostawało mu zbyt wiele czasu na naukę. Jego kolejny nauczyciel i katecheta, ks. Aleksander Allora, chwalił go za postępy w nauce. Kiedy rodzina Savio przeniosła się do Mondonio, Dominik zmienił szkołę. Uczył się wówczas w Mondonio, gdzie miał bardzo wymagającego nauczyciela, ks. Giuseppe Cugliero. Sam ks. Cugliero mówił, że w ciągu 20 lat pracy nauczycielskiej nigdy nie miał ucznia, który dorównałby Dominikowi w pobożności. Jego pilność i obowiązkowość szybko zjednały mu przyjaźń kolegów. Ks. Cugliero był serdecznym przyjacielem ks. Bosco. Ks. Bosco prowadził wówczas w Turynie oratorium dla ubogich chłopców, aby mogli się dalej kształcić. Wielu z nich było zwykłymi urwisami, ale niektórzy zostali później księżmi. Ks. Cugliero, pokładając wielkie nadzieje w Dominiku, oddał go do oratorium.
                    Dnia 25 października 1854 roku wyruszył do Turynu. Wziął ze sobą niewielką torbę, w którą zapakował swoje rzeczy i książki. Ciężkie było rozstanie z rodziną, pierwszy raz bowiem rozstawał się z nią na dłużej. Marzył jednak o tym, by jak najszybciej znaleźć się w oratorium. Dominik Savio miał 12 lat, gdy spotkał księdza Jana Bosco w Turynie.
                    W oratorium wszystko czynił, by pozyskać dusze dla Boga. Potrafił godzić kolegów ze sobą. W wolnym czasie był duszą zabawy. Przejął się do głębi kazaniem ks. Bosco na temat świętości. Z miłości do Maryi w maju 1856 roku założył Towarzystwo Niepokalanej. Mogli do niego należeć tylko najlepsi chłopcy. Mieli o nim wiedzieć tylko ks. Bosco i zapisani członkowie. Starali się najpierw o własną prawdziwie chrześcijańską postawę. Postanowili często przystępować do sakramentu pokuty i Eucharystii oraz żywić gorące nabożeństwo do Matki Bożej. W działalność Towarzystwa Niepokalanej Dominik włożył całą swoją miłość do Maryi i cały zapał apostolski. 8 czerwca 1856 roku skończył pisać regulamin, który wszyscy członkowie zaakceptowali w całości. Dominik gorąco pragnął zostać świętym.
                    Dominik potrafił żyć dobrze ze wszystkimi chłopcami. Był tak ugruntowany w cnocie, że zalecano mu przebywanie z niektórymi zepsutymi chłopakami, aby zdobyć ich dla Pana. Potrafił z rozrywek, z zabaw, a nawet obojętnych rozmów wyciągnąć korzyść duchową. Szczególną przyjaźnią darzył Camilla Gavio i Giovanniego Massaglię. Tych największych przyjaciół zabrał mu Bóg. Gavio zmarł w wieku 15 lat na chorobę serca, zaś Massaglia umarł w wieku 18 lat na przeziębienie. Przez 6 miesięcy był klerykiem. Dominik bardzo mocno przeżył śmierć swoich kolegów. Ta strata była dla niego tak bolesna, że znacznie nadwerężyła jego i tak już słabe zdrowie. Odtąd sam przygotowywał się do swojej śmierci, jakby przeczuwał blisko koniec życia. W trzecim roku pobytu w oratorium choroba dała się we znaki. Było to zapalenie płuc. Delikatny organizm, intensywna nauka i napięcia duchowe osłabiały jego siły życiowe. Uważał, że Towarzystwo Niepokalanej będzie skutecznym sposobem na to, aby w chwili śmierci zapewnić sobie opiekę Najświętszej Panny.
                    Dnia 1 marca 1857 roku opuścił Turyn i swoje ukochane oratorium, wiedział, że już tam nie wróci. 9 marca pożegnał się z wszystkimi najbliższymi, wypowiedział ostatnie słowa: „Co za piękne rzeczy widzę” – i oddał duszę Panu. Miesiąc po śmierci ukazał się swojemu ojcu i zapewnił go, że jest już w niebie. Gdy do oratorium dotarła wieść o śmierci Dominika, wielu jego kolegów uznało go za świętego.
                    Po dwudziestu latach od śmierci św. Dominik ukazał się ks. Janowi Bosco w chwale nieba wraz z innymi chłopcami, którzy przebywali kiedyś w oratorium.
                    Papież Pius XI nazwał go „małym, a raczej wielkim gigantem ducha”. W 1950 roku papież Pius XII ogłosił go błogosławionym, a 12 czerwca 1954 roku uroczyście kanonizował. Św. Dominik Savio jest jednym z najmłodszych wyznawców (15 lat), jakiego Kościół dotychczas wyniósł na ołtarze. Jest patronem młodzieży, zwłaszcza ministrantów i chórów chłopięcych. W ikonografii św. Dominik przedstawiany jest z lilią w dłoni, a towarzyszy mu anioł. Pamiątka św. Dominika Savio jest obchodzona w Kościele 9 marca.

                    Boże, źródło wszelkiego dobra, Ty w świętym Dominiku Savio
                    dałeś młodzieży przedziwny przykład miłości i czystości.
                    Dozwól również nam, swoim dzieciom,
                    wzrastać w radości i miłości,
                    aż do miary wielkości według pełni Chrystusa.
                    Przez naszego Pana, Jezusa Chrystusa, Twojego Syna,
                    który z Tobą żyje i króluje w jedności Ducha Świętego
                    Bóg, przez wszystkie wieki wieków.      
                </div>
            </div>
        </article>
    </div>
</body>
</html>