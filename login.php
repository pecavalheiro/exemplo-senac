<?php
session_start();
include('inc/common.php');

$con = newDbConnection();

$sql = $con->prepare('SELECT id, name, email, password FROM user WHERE email LIKE ?');

$email = $_POST['email'];
$password = sha1($_POST['password']);

$sql->bind_param('s', $email);
$sql->execute();
$users = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
if (count($users)) {
    if ($users[0]['password'] == $password) {
        $_SESSION['user'] = [
            'id' => $users[0]['id'],
            'name' => $users[0]['name'],
            'email' => $users[0]['email'],
        ];
    }
}
header('location:index.php?p=user-welcome');