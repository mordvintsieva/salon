<?php
require_once "database.php";
$users=mysqli_query ($connect, "select * from users");
$users=mysqli_fetch_all($users);
$logpass=array();
foreach($users as $user)
{
    $email=$user[4];
    $password=$user[3];
    $logpass[$email]=$password;
}
if (isset($_POST["email"])&&isset($_POST["password"]))
{
    if (isset($logpass[$_POST["email"]]))
    {
      if  ($logpass[$_POST["email"]]==$_POST["password"])
      {
        session_start();
        $_SESSION["email"]=$_POST["email"];
        header('Location: /salon.ru/lichniykabinet.php');
        exit();
      }
    }
    header('Location: /salon.ru/error.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="main.css">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">SalonStyle</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">ГЛАВНАЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index222.html">ПРАЙС И УСЛУГИ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index3.html">КОНТАКТЫ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">
    <form class="form-signin" method="post" action="avtoizatsiya.php">
        <h1 class="h3 mb-3 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пожалуйста войдите</font></font></h1>
        <label for="inputEmail" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адрес электронной почты</font></font></label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Адрес электронной почты" required="" autofocus="">
        <label for="inputPassword" class="sr-only"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">пароль</font></font></label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Запомнить меня
                    </font></font></label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">войти в систему</font></font></button>
        <p class="mt-5 mb-3 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2017-2020</font></font></p>
    </form>
</div>
<!-- JavaScript and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>