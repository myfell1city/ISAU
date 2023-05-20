<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body class="container">
  <nav>
  <ol>
        <li> <a href="http://localhost:80/SDO/index.php">Главная</a></li>
        <li> <a href="http://localhost:80/SDO/reg/reg.php">Регистрация</a></li>
        <li> <a href="http://localhost:80/SDO/login/login.php">Вход</a></li>
        <li> <a href="http://localhost:80/SDO/login/logout.php">Выход</a></li>
        <li> <a href="http://localhost:80/SDO/form_task3/form.php">Запись на экзамен</a></li>
    </ol>
  </nav>
  <main>
    <h1><?= $header ?></h1>
    <div>
        <?= $content ?>
    </div>
  </main>
  <footer>
    <h4>Скокова Ю.В.</h4>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>