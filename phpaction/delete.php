<?php
// session
session_start();
// connection
require_once 'dbconnect.php';

if (isset($_POST['btn-delete'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM client WHERE id = '$id'";

    if (mysqli_query($connect, $sql)):
        $_SESSION['msg'] = "Deleted successfully";
        header('Location: ../index.php');
    else: 
        $_SESSION['msg'] = "Error in deleting";
        header('Location: ../index.php');
    endif;

endif;

?>