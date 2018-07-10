<?php

$host='localhost';
 $db='tasks';
 $user='root';
 $password=null;
try {
    $db = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec("set names utf8");
}
catch(PDOException $e) {
    $output = 'Невозможно подключиться к серверу. Ошибка: ' . $e->getMessage();
}
//
//$host='localhost';
//$db='t';
//$user='root';
//$password=null;
//
//try
//{
//    $pdo=new PDO("mysql:host=$host; dbname=$db; charset=utf8", $user, $password);
//}
//catch(PDOException $e)
//{
//    $_SESSION['error']="Невозможно подключиться к серверу БД";
//    redirect('error');
//}