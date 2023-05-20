<?php
    require_once('../boot.php');
    if (isset($_POST['login']) && isset($_POST['password1']))
    {   
        $login = $_POST['login'];
        $password = $_POST['password1'];
        $sql = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
        $stmt = get_mysqli()->query($sql);
        if ($stmt->fetch_row())
        {
             $_SESSION['login']= $login;
             header("Location: ../form_task3/form.php");          
        }
        else
        {
            header("Location: login.php");
        }
    }
?>