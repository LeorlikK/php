<?php
session_start()
?>
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
session_start();
setcookie('name', 'value', time() + 60*60*24*30, '/');

echo '<pre>';
//var_dump($_GET);
//var_dump($_POST);
//var_dump($_REQUEST);
//var_dump($_FILES);
//var_dump($_SESSION);
//var_dump($_COOKIE);
//var_dump($_SERVER);
//var_dump($_ENV);
//var_dump($GLOBALS);
echo '</pre>';

//require_once 'DB_PDO/connect.php';
//$email = "{$_POST['email']}";
////    $email = "leorlik@yandex.ru";
//if (isset($conn)) {
//    //    $query = $conn->query("SELECT * FROM `users`");
//    $query = $conn->query("SELECT * FROM `users` WHERE `email` LIKE '$email'");
//    var_dump($query->rowCount());
//    if ($query->rowCount()) {
//        $res = $query->fetchAll();
//        $_SESSION['user'] = [
//            'id' => $res[0]['id'],
//            'email' => $res[0]['email'],
//            'password' => $res[0]['password']
//        ];
//        if ($res[0]['password'] == $_POST['password']) {
//            echo 'YES';
//            header('Location: my_page.php');
//        } else {
//            $_SESSION['error'] = 'Password dont matches';
//            header('Location: session_one.php');
//        }
//    } else {
//        $_SESSION['error'] = 'Email dont found: ' . $email;
//        echo 'NOO';
//        header('Location: session_one.php');
//    }
//}
?>
<h1>Two1</h1>
</body>
</html>