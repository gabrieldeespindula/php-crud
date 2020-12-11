<?php
// connection
include_once 'phpaction/dbconnect.php';
// header
include_once "includes/header.php";
// message
include_once 'includes/message.php';
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
                <?php
                $sql = "SELECT * FROM client";
                $result = mysqli_query($connect, $sql);
                
                while ($data = mysqli_fetch_array($result)):
                ?>
                <tr>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['lastname'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['age'] ?></td>
                    <td><a href="edit.php?id=<?php echo $data['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                </tr>
                <?php
                endwhile;
                ?>
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