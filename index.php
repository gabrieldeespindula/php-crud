<?php
// header
include_once "includes/header.php";
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Clients</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Name:</th>
                    <th>Last Name:</th>
                    <th>Email:</th>
                    <th>Age:</th>
                </tr>
            </thead>
            <tbody>
                <td>Cristiano</td>
                <td>Ronaldo</td>
                <td>cr7goat@clearmen.com</td>
                <td>35</td>
                <td><a href="" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
            </tbody>
        </table>
        <br>
        <a href="add.php" class="btn">Add client</a>
    </div>
</div>


<?php
//footer
include_once "includes/footer.php";
?>