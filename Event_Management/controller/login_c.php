<?php
session_start();
require_once '../model/login_m.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userModel = new UserModel();
    $user = $userModel->validateUser($email, $password);

    if ($user) {
        // User found, redirect to dashboard or home page
        header('Location: ../view/dashboard_v.php');
        exit;
    }else {
        $error = "Invalid email or password";
        include '../view/login_v.php'; // Show error message on the login page
        exit;
    }
}
?>
