<?php 
session_start();
require './../../../DB_ce-app/User.php';
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
}

$p ="SELECT User_id,fname,lname,phone_num,Role,Email FROM user WHERE Role != 'Admin'";
$result = mysqli_query($connect,$p);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    <style>
        /*style ของ Background*/
        body {
            background-color: darkslategray;
        }
    </style>
</head>
<body>
    <br>
<div class="container">

        <table class="table table-dark" id="user_data">
            <tr style="text-align:center">
                <th>User id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Phone</th>
                <th>Role</th>
                <th>E-mail</th>
                <th>Delete</th>


            </tr>
            <?php   
                    
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
            <tr style="text-align:center" class="pa">
                <td><?php echo $row['User_id']?></td>
                <td><?php echo $row['fname']?></td>
                <td><?php echo $row['lname']?></td>
                <td><?php echo $row['phone_num']?></td>
                <td><?php echo $row['Role']?></td>
                <td><?php echo $row['Email']?></td>
                <td><a href="../delete/delete_user.php?delete=<?php echo $row['User_id']?>" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลที่เลือก?')">Delete</a></td>


            </tr>
            <?php }?>
        </table>
        <a href="../../admin_page.php" class="btn btn-success">กลับ</a>
    </div>

</body>
</html>