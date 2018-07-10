<?php
//require_once 'Connect.php';
$login=$_POST['login'];
$pass=$_POST['password'];

try {
    if(!empty($login)&!empty($pass)) {
        require_once('Connect.php');
        $stmt = $db->prepare("SELECT * FROM users WHERE `login`=:login ");
        $stmt->bindValue(':login', $login);
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        echo 'привет '.$rows['login'];
//        if (password_verify($pass,$rows['password'])) {
//            $_SESSION['login'] = $rows['login'];
//            exit('ок');
//            //redirect('library');
//        }else{
//            $_SESSION['error']='Неверный пароль или логин';
//            exit('ошибка');
//            //redirect('form_aut');
//        }
    }else{
        $_SESSION['error'] = "Заполните все поля!";
        redirect('form_aut');
    }
}
catch(PDOException $e)
{
    $_SESSION['error']="Ошибка выполнения запроса при авторизации";
    exit('нет соед');
    redirect('error');
}
