<?php
//connection
include_once 'phpaction/dbconnect.php';
// header
include_once "includes/header.php";
// select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM client WHERE id = '$id'";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_array($result);
endif;
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Edit Client</h3>
        <form action="phpaction/update.php" method="POST">
            <INPUT type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div class="input-field col s12">
                <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>">
                <label for="name">Name</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="lastname" id="lastname" value="<?php echo $data['lastname']; ?>">
                <label for="lastname">Last name</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email" value="<?php echo $data['email']; ?>">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="age" id="age" value="<?php echo $data['age']; ?>">
                <label for="age">Age</label>
            </div>

            <button type="submit" name="btn-edit" class="btn"> Update </button>
            <a href="index.php" class="btn green"> Client List </a>
        </form>
    </div>
</div>


<?php
//footer
include_once "includes/footer.php";
?>