<?php
    session_start();

    if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
    {
        header('Location: index.php');
        exit();
    }

    require_once "connect.php";

    $conn = @new mysqli($host, $db_user, $db_password, $db_name);

    if($conn->connect_errno!=0)
    {
        echo "Error".$conn->connect_errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        $haslo_hash = password_hash($haslo,PASSWORD_DEFAULT);
        
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");

        if($result = @$conn->query(sprintf("SELECT ministranci.*, punkty.* FROM ministranci INNER JOIN punkty ON ministranci.id = punkty.id_ministranta WHERE login='%s'",
        mysqli_real_escape_string($conn, $login))))
        {
            $users = $result->num_rows;
            if($users>0)
            {
                $row = $result->fetch_assoc();
                 if(password_verify($haslo, $row['haslo']))
                {
                $_SESSION['zalogowany'] = true;
                
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['imie'];
                $_SESSION['surname'] = $row['nazwisko'];
                $_SESSION['stopien'] = $row['stopien'];
                $_SESSION['suma'] = $row['Suma'];
                $_SESSION['dzien1'] = $row['dzien1'];
                $_SESSION['dzien2'] = $row['dzien2'];
                $_SESSION['jeden'] = $row['Styczen'];
                $_SESSION['dwa'] = $row['Luty'];
                $_SESSION['trzy'] = $row['Marzec'];
                $_SESSION['cztery'] = $row['Kwiecien'];
                $_SESSION['piec'] = $row['Maj'];
                $_SESSION['szesc'] = $row['Czerwiec'];
                $_SESSION['siedem'] = $row['Lipiec'];
                $_SESSION['osiem'] = $row['Sierpien'];
                $_SESSION['dziewiec'] = $row['Wrzesien'];
                $_SESSION['dziesiec'] = $row['Pazdziernik'];
                $_SESSION['jedenascie'] = $row['Listopad'];
                $_SESSION['dwanascie'] = $row['Grudzien'];
                $_SESSION['cos'] = $row['Styczen_ujemne'];
                $_SESSION['dwa1'] = $row['Luty_ujemne'];
                $_SESSION['trzy1'] = $row['Marzec_ujemne'];
                $_SESSION['cztery1'] = $row['Kwiecien_ujemne'];
                $_SESSION['piec1'] = $row['Maj_ujemne'];
                $_SESSION['szesc1'] = $row['Czerwiec_ujemne'];
                $_SESSION['siedem1'] = $row['Lipiec_ujemne'];
                $_SESSION['osiem1'] = $row['Sierpien_ujemne'];
                $_SESSION['dziewiec1'] = $row['Wrzesien_ujemne'];
                $_SESSION['dziesiec1'] = $row['Pazdziernik_ujemne'];
                $_SESSION['jedenascie1'] = $row['Listopad_ujemne'];
                $_SESSION['dwanascie1'] = $row['Grudzien_ujemne'];
                $_SESSION['suma1'] = $row['Suma_ujemne'];
                $_SESSION['jeden2'] = $row['Styczen_dod'];
                $_SESSION['dwa2'] = $row['Luty_dod'];
                $_SESSION['trzy2'] = $row['Marzec_dod'];
                $_SESSION['cztery2'] = $row['Kwiecien_dod'];
                $_SESSION['piec2'] = $row['Maj_dod'];
                $_SESSION['szesc2'] = $row['Czerwiec_dod'];
                $_SESSION['siedem2'] = $row['Lipiec_dod'];
                $_SESSION['osiem2'] = $row['Sierpien_dod'];
                $_SESSION['dziewiec2'] = $row['Wrzesien_dod'];
                $_SESSION['dziesiec2'] = $row['Pazdziernik_dod'];
                $_SESSION['jedenascie2'] = $row['Listopad_dod'];
                $_SESSION['dwanascie2'] = $row['Grudzien_dod'];
                $_SESSION['suma2'] = $row['Suma_dod'];
                $_SESSION['punkty2020'] = $row['Suma2020'];

                unset($_SESSION['blad']);
                $result->close();
                header('Location: kontakt.php');
                header('Location: kalendarz.php');
                header('Location: punkty.php');
                header('Location: zbiorki.php');
                header('Location: patroni.php');
                header('Location: abc.php');
                header('Location: Strona.php');
                }else{
                    $_SESSION['blad'] =  "<span style='color:red'>Nieprawidłowy login lub hasło!</span>";
                    header('Location: index.php');
                }
            }
            else
            {
                $_SESSION['blad'] = "<span style='color:red'>Nieprawidłowy login lub hasło!</span>";
                header('Location: index.php');
            }
        }
        $conn->close();
    }

    

?>