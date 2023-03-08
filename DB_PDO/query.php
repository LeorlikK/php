<?php
echo "Test_1";
$local = "localhost";
$user = "root";
$pass = "root";
$db_name = "registration";

$connect = new PDO("mysql:host=$local; dbname=$db_name", $user, $pass); // array(PDO::ATTR_PERSISTENT => true) // постоянное подключение

$query = $connect->prepare("SELECT * FROM USERS where id = ?");
try {
    $res = $query->execute([1]);
    var_dump($res);
} catch (PDOException $exception) {
    echo $exception;
}

//POST
try {
    $connect->beginTransaction();

    $connect->query("INSERT INTO `users` (email, password, public) VALUES ('orland69@yandex.ru', '456', '1')");

//    $connect->exec("INSERT INTO `users` (id, email, password, public) VALUES (2, 'orland69@yandex.ru', '456', '1')");

//    $query = $connect->prepare("INSERT INTO USERS(id, email, password, public) VALUES (:id, :email, :password, :public)");
//    $id = 2; $email = "orland69@yandex.ru"; $password = '456'; $public = 1;
//    $query->execute(['id' => $id, 'email' => $email, 'password' => $password, 'public' => $public]);
//    $id = 3; $email = "elena72@yandex.ru"; $password = '789';
//    $query->execute(['id' => $id, 'email' => $email, 'password' => $password, 'public' => $public]);

    $connect->commit();
} catch (PDOException $exception) {
    $connect->rollBack();
}