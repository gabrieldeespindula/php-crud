<?php
// session
session_start();
// connection
require_once 'dbconnect.php';

if (isset($_POST['btn-edit'])):
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE client SET name ='$name', lastname = '$lastname', email = '$email', age = '$age' WHERE id = '$id' ";

    if (mysqli_query($connect, $sql)):
        $_SESSION['msg'] = "Updated successfully";
        header('Location: ../index.php');
    else: 
        $_SESSION['msg'] = "Update error";
        header('Location: ../index.php');
    endif;

endif;



?>