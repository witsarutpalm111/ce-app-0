<!DOCTYPE html>
<html lang="en">
    <?php
    require './../DB_ce-app/User.php';
     $palm = 0;
     if(isset($_GET['AAA'])){
         $palm = $_GET['AAA'];
     }
     $pal = 0;
     if(isset($_GET['AAA'])){
         $pal = $_GET['AAA'];
     }

    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My list</title>

    <style>/*style ของ Background*/
        body {
            background-color: darkslategray;
        }
    </style>
</head>
<body>
    <?php 
    
        $p = "SELECT * FROM update_com WHERE update_com.ID_com='$palm'";
        $p1 = "SELECT user.User_id,user.fname,user.lname FROM user,com WHERE user.User_id=com.User_id and com.ID_com='$palm'";
        // ติดปัญหา
        $result = mysqli_query($connect,$p1);  
        $result1 = mysqli_query($connect,$p); 
        $row1 = mysqli_fetch_array($result);
    ?>
    <h1> ผลการค้นหา </h1>
    
    <label>User Name : </label>
    <?php echo $row1['User_id']?>
     <br>
    <label>ชื่อ : </label>
    <?php echo $row1['fname']?>

    <label>นามสกุล : </label>
    <?php echo $row1['lname']?>
    
    <table border="5" width = "100%">
        <br><br>
        <tr>
            <th>Time stamp</th>
            <th>ผลการซ่อม</th>
            <th>รายละเอียดการซ่อม</th>
            <th>ราคา</th>
            <th>หมายเหตุ</th>
        </tr>
        <?php   
        
            while($row2 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
        ?>
        <tr>
                <td> <?php echo $row2['Time_update']?></td>
                <td> <?php echo $row2['Status_com']?></td>
                <td><?php echo $row2['Detail_com']?></td>
                <td><?php echo $row2['Price_com']?></td>
                <td><?php echo $row2['Note_com']?></td>

        </tr>
        

            <?php }?>
            
             
    </table>
    <a href="user_page.php"><button type="button">Back</button></a>
</body>
</html>