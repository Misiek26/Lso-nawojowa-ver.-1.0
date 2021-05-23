<?php
session_start();
if((!isset($_POST['login'])) || (!isset($_POST['haslo'])) || (!isset($_POST['nowehaslo'])) || (!isset($_POST['powtorzhaslo'])))
    {
        $_SESSION['blad'] = "<span style='color:red'>Wprowadzone warto&#347;ci si&#281; nie zgadzaj&#261;!</span>";
        header('Location: przywroc.php');
        exit();
    }
if($_POST['nowehaslo']!=$_POST['powtorzhaslo'])
{
    
    header('Location: zmien.php');
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
        $nowehaslo = $_POST['nowehaslo'];
        $powtorzhaslo = $_POST['powtorzhaslo'];

        $haslo_hash = password_hash($haslo,PASSWORD_DEFAULT);
        $nowe_haslo = password_hash($nowehaslo, PASSWORD_DEFAULT);

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");

        if($result = @$conn->query(sprintf("SELECT * FROM ministranci WHERE login='%s'",
        mysqli_real_escape_string($conn, $login))))
        {
            $users = $result->num_rows;
            if($users>0)
            {
                $row = $result->fetch_assoc();
                if(password_verify($haslo, $row['haslo']))
                {
                $sql = "UPDATE ministranci SET haslo = '$nowe_haslo' WHERE login ='$login'";

                $zmien = $conn->query($sql);
                unset($_SESSION['blad']);
                $result->close();
                header('Location: sukces.php');
                }else
                {
                    $_SESSION['blad'] = "<span style='color:red'>Wprowadzone warto&#347;ci si&#281; nie zgadzaj&#261;!</span>";
                    header('Location: przywroc.php');
                }
            }
            else
            {
                $_SESSION['blad'] = "<span style='color:red'>Wprowadzone warto&#347;ci si&#281; nie zgadzaj&#261;!</span>";
                header('Location: przywroc.php');
            }
        }
        $conn->close();
    }
            ?>