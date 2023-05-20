<?php
if ($_POST) {
    require_once('../boot.php');
    $mysqli = get_mysqli();
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $time = $_POST['time'];
    $control = $_POST['control'];
    $lesson = $_POST['lesson'];
    $comment =$_POST['comment'];
    $login = $_SESSION['login'];
    $sql = "INSERT INTO records SET user_id = '$login', surname = '$surname', name = '$name', time = '$time', control = '$control', subject = '$lesson', comment = '$comment' ";
    $stmt = $mysqli->query($sql);
    header("Location: form.php");
}
?>

