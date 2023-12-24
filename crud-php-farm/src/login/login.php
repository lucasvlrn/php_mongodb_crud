<?php
require '../../config/conexao.php';

$user_login = $_POST['user'];
$password_login = $_POST['password'];
$usercollection = $database->users;

$query = $usercollection->findOne([
    'name' => $user_login,
]);

$verify = password_verify($password_login, $query['password']);

if ($query && $verify) {
    session_start();
    $_SESSION['login'] = $user_login;
    header("Location: ../crud/crud.php");
    exit();
} else {
    header("Location: erro.php");
    exit();
}

?>