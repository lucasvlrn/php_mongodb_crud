<?php
require '../../config/conexao.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_user = rand(0, 10000);
    $user = $_POST['user'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    $today = date("d-m-Y");

    $usercollection = $database->users;

    $query = $usercollection->findOne(
        ['name' => $user]
    );

    if (!$query) {

        $insert = $usercollection->insertOne(
            ['_id' => $id_user,
                'name' => $user,
                'password' => $password_hash,
                'registration time' => $today]
        );

        header("Location: ../login/login.html");
        die();
    } else {
        header("Location: erro.php");
        die();
    }
}
?>