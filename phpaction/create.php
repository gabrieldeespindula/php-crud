<?php
// session
session_start();
// connection
require_once 'dbconnect.php';
// clear
function clear($input){
    global $connect;
    // sql
    $var = mysqli_escape_string($connect, $input);
    // xss
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['btn-register'])):
    $name = clear($_POST['name']);
    $lastname = clear($_POST['lastname']);
    $email = clear($_POST['email']);
    $age = clear($_POST['age']);

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