<?php
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:../Login.php");
    exit();
  }
require './../../../DB_ce-app/User.php';
$palm = 0;
if(isset($_GET['id'])){
    $palm = $_GET['id']; // user id
}
// เลือก id_com ล่าสุด
$pp = "SELECT com.ID_com FROM com WHERE com.User_id=$palm ORDER BY id DESC LIMIT 1";
           $result2 = mysqli_query($connect,$pp); 
           
           $row1 = mysqli_fetch_array($result2);
      
       $RR = $row1['ID_com'];
//เอา id_com มาใช้
$p = "SELECT update_com.Status_com,update_com.Detail_com,update_com.Note_com,update_com.Time_update,com.User_id,Price_com
    FROM `com`,`update_com` 
    WHERE com.User_id = $palm AND com.ID_com = '$RR' AND com.ID_com=update_com.ID_com ";
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
</head>
<body>
    <br>
<div class="container">
        <table class="table table-dark" id="user_data">
            <tr style="text-align:center">
                <th>Time</th>
                <th>Status</th>
                <th>Detail</th>
                <th>Note</th>
                <th>Price</th>
                <th>View</th>

            </tr>
            <?php   
                    
                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    ?>
            <tr style="text-align:center" class="pa">
                <td><?php echo $row['Time_update']?></td>
                <td><?php echo $row['Status_com']?></td>
                <td><?php echo $row['Detail_com']?></td>
                <td><?php echo $row['Note_com']?></td>
                <td><?php echo $row['Price_com']?></td>
                <td><a href="Edit/form_edit_view.php?edit=<?php echo $row['Time_update']?>&id=<?php echo $palm ?>" class="btn btn-warning" >Edit</a></td>

            </tr>
            <?php }?>
        </table>
    </div>

</body>
</html>