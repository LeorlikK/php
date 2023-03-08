<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Two</h1>
<?php
setcookie('email', $_POST['email'], time()+10);
setcookie('password', $_POST['password'], time()+10);
var_dump($_COOKIE);
header('Location: cookie_one.php');

//setcookie('email', '', time()-10);
//setcookie('password', '', time()-10);

?>
<h1>Two1</h1>
</body>
</html>