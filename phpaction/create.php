<?php
// session
session_start();
// connection
require_once 'dbconnect.php';

if (isset($_POST['btn-register'])):
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);

    $sql = "INSERT INTO client (name, lastname, email, age) VALUES ('$name', '$lastname', '$email', '$age')";

    if (mysqli_query($connect, $sql)):
        $_SESSION['msg'] = "Registered successfully";
        header('Location: ../index.php');
    else: 
        $_SESSION['msg'] = "Registration error";
        header('Location: ../index.php');
    endif;

endif;



?>