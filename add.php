<?php
// header
include_once "includes/header.php";
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">New Client</h3>
        <form action="phpaction/create.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="name" id="name">
                <label for="name">Name</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="lastname" id="lastname">
                <label for="lastname">Last name</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="input-field col s12">
                <input type="text" name="age" id="age">
                <label for="age">Age</label>
            </div>

            <button type="submit" name="btn-register" class="btn"> Register </button>
            <a href="index.php" class="btn green"> Client List </a>
        </form>
    </div>
</div>


<?php
//footer
include_once "includes/footer.php";
?>