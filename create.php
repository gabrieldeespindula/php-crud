<?php
require_once 'dbconnect.php';

if (isset($_POST['btn-register'])):
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);

    $sql = "INSERT INTO client (name, lastname, email, age) VALUES ('$name', '$lastname', '$email', '$age')";

    if (mysqli_query($connect, $sql)):
        header('Location: index.php?success');
    else: 
        header('Location: index.php?error');
    endif;

endif;



?>