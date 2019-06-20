<?PHP
include_once('../../../Rundiz-thai-date-db65595/Rundiz/Thaidate/Thaidate.php');
include_once('../../../Rundiz-thai-date-db65595/Rundiz/Thaidate/thaidate-functions.php');
require './../../../DB_ce-app/User.php';
session_start();
if (!isset($_SESSION["User_id"])){ 
 
    Header("Location:../../../Login.php");
    exit();
  }else{
    $user_id = $_SESSION["User_id"];
  }
  $price = $_POST['price'];
  $Date = thaidate('วันlที่ j F พ.ศ.Y เวลา H:i:s');
  
  $psert ="SELECT id_order FROM order_user ORDER BY id_order DESC";
  $result = mysqli_query($connect,$psert);
  $row = mysqli_fetch_array($result);
  $num = $row['id_order'];
  if($num){
    $num += 1;
  }else{
    $num = 190001;
  }
  $id_order = $num;

  $p = "INSERT INTO `order_user`(`date_order`, `id_order`, `order_price`) VALUE('$Date','$id_order','$price')";
  $pp ="UPDATE `order` SET id_order ='$num' WHERE order.User_id = '$user_id' AND order.id_order='' ";
if($insert = mysqli_query($connect,$p)){
  $inserorder = mysqli_query($connect,$pp);
echo"GIUP[IHVPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPPP";
}

?>