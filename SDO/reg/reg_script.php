<?php
require_once('../boot.php');
if (isset($_POST['login']) && isset($_POST['password1']))
{
    $login = $_POST['login'];
    $password = $_POST['password1'];
    $sql = "INSERT INTO users( login, password) VALUES ('$login','$password')";
    $stmt = get_mysqli()->query($sql);
    header("Location: ../login/login.php");
}
?>