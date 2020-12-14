<?php
// session
session_start();
// connection
require_once 'dbconnect.php';
// clear
require_once 'create.php';

if (isset($_POST['btn-edit'])):
    $name = clear($_POST['name']);
    $lastname = clear($_POST['lastname']);
    $email = clear($_POST['email']);
    $age = clear($_POST['age']);
    $id = clear($_POST['id']);

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