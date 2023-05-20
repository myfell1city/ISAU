<?php
session_start();
$title = "Задание 3";
$header = "Запись на экзамен";
if (isset($_SESSION['login'])){
    $content = file_get_contents("form_content.php");
}
else 
{
    $content = "Страница доступна только после авторизации!";
}
include("../components/layout.php");
?>