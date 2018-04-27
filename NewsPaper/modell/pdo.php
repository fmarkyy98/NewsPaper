<?php
$conf = require_once "config.php";



$pdo = new PDO("mysql:host=" . $conf['host'] . ";dbname=" . $conf['database'] . ";charset=" . $conf['db_encoding'], $conf['db_user'] , $conf['db_password'] );

$statement = $pdo->prepare("SELECT * FROM `users` WHERE user_id = :id");

$statement->execute([
    ":id" => 5,
]);

$user = $statement->fetch();

echo $user['first_name'];
echo $user[2];

var_dump($user);

//$id = $pdo->lastInsertId();

