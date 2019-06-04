<?php
    require './DB_ce-app/User.php';



    $email =  $_POST['user_id'];
$sql ="SELECT User_id FROM user WHERE User_id = '$email'";
$query = mysql_query($sql); 
$num_rows = mysql_num_rows($query);
 
if( !$num_rows == 0 ) {
     
    while ($result = mysql_fetch_array($query)) {
        echo $result['User_id'];
    }
}
    ?>
