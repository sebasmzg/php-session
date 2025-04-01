<?php
print "Hola";
session_start();
if (!file_exists('data.php')) {
    die("Error: No se puede encontrar data.php");
}
require_once 'data.php';
//echo '<pre>';
//var_dump($users);
//echo '<pre>';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if($user['email'] === $email && password_verify($password, $user['password'])) {
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email']
            ];
            header('Location: home.php');
            exit;
        }
    }
    header('Location: index.php?error=Invalid credentials');
    exit;
}