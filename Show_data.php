<!DOCTYPE html>
<html>
<?php
session_start();
if (!isset($_SESSION["User_id"])){
 
    Header("Location:Login.php");
    exit();
  }
    require './User.php';
    $palm = 0;
    if(isset($_GET['alert'])){
        $palm = $_GET['alert'];
    }
    
//     $em_Search = "";
//     if(isset($_POST['em_Search'])){
//         $em_Search = $_POST['em_Search'];
//     }
//    // $em_Search = $_POST['em_Search'];
//    // $pa = $_SESSION['user_id'];
//    if($em_Search == ""){
    $p = "SELECT * FROM user,com WHERE user.User_id=com.User_id and com.ID_com='$palm'";
  // }else{
   // $p = "SELECT * FROM User,file_user WHERE User.user_id=file_user.user_id AND (file_user.user_id = '$em_Search' or User.Name = '$em_Search') ";
   //}


    $result = mysqli_query($connect,$p);    
?>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src ="./qr/qrcode.min.js" ></script>

<meta charset="UTF-8">
    <style>
    label{
        color:#FFFF66;
    }
        body{
        background-color:#800000;
        text-align: right;
        }
        h1{
            color:#66FF99;
            text-align: center;
        }
        tr{
            color:#FFFF66;
            text-align: center;
        }
        div{
            
            text-align: center;
        }
        
    </style>
  
</head>
<body>
    <h1> แสดงข้อมูล </h1>
    <!-- <form action = "ShowdataAdmin.php" id ="FormSearch" method = "post">
        
            <label>Search Data : </label>
            <input type="search"   id="em_Search" required name="em_Search" >
            <input type="submit" name="submit" value="Serach"/>

    </form> -->
    <table border="5" width = "100%">
        <tr>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>User Name</th>
            <th>ID_com</th>
            <th>Recieve</th>
                 
            
            
            
            
        </tr>
        <?php   
        
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        ?>
        <tr>
                <td><?php echo $row['fname']?></td>
                <td><?php echo $row['lname']?></td>
                <td><?php echo $row['User_id']?></td>
                <td> <a href="check_qr.php?AAA=<?php echo $row['ID_com']?>"><div id ="<?php echo $row['ID_com']?>"></div></a></td>
                <td><div id ="<?php echo $row['Recieve_ID']?>"></td>
                
                
                
        </tr>
        <script type="text/javascript">

            new QRCode(document.getElementById("<?php echo $row['ID_com']?>"), "<?php echo $row['ID_com']?>");
            new QRCode(document.getElementById("<?php echo $row['Recieve_ID']?>"), "<?php echo $row['Recieve_ID']?>");

        </script>

            <?php }?>
            
             
    </table>
    <br><br>
    <a href="admin_page.php"><button type="button">back</button></a>
    <a href="Login.php"><button type="button">Log out</button></a>
    <!-- <img style="display: block;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAXrklEQVR4Xu2d0XobOwiEm/d/6Jxvk1M3rneF+MVg2Z3eLkgwDLNIdtyPX79+ff564X+fn/Xhf3x8XCJC9hutN4J+tFf3mt2xdFKS1pvWoDO3aK+D6fUdFO1a+Jw0ZLQ9JcTVupQo3U1H81bkF9Wo8nl33pWxr65lAThBkBLCApCjo0K8cxF8W9N6U+EjMap8LAAWgBsC3Y1gAVC19fy6FgALgAUA3vl4ApgXGpml4i1C34Q+AuTKrKhdLgIfAS4ngF2Ks3JGI2RQ+NA3xbtfAhKsKSYKPle/KAgeMz6jOC0AMwgu2lgAFgH84W4ByGNpAchjVuphAaiD0wKQx9ICkMes1MMCUAenBSCPpQUgj1mphwWgDk4LQB5LC0Aes1IPC0AdnBaAPJYWgDxmpR4WgDo4LQB5LMsFgBJ6FHp3YWkO5OOk7o+LaG55an17EEwOP4IL8Yn26ualoj60f9DHgDsloCAfJcSVHyUtbUhFfaoxiZryqq4US4oJbSzqR2tO97MAJBEngkNJmwztZk7JTvcjmFgAKNrnfhaAJJ60SQjZLQDnxSG4EJ9IbOh00x2LIk5PAEnhsAA8AkYwiZrSR4AcMT0B5PAaXkBRpfUdQK4I5A1KfCKxofXujkURpyeAHGfRjTclSjI03wEMfh5OceSjdaWxWABOEFCMn7TxrvxojKM4KPmqc1tZj+RAfDwBXP/GpSeAFQZP+loAfAn4EwFPAMk3OVV9+gad7OtpMwuABcACELQLvcWkzaVQYR8BpjXxy5AIO/GJ9lKcrSmfcwj+sab7+QhAEU/4UZGiE4xiv0S606akmYmPBcB3AA+k9AQw3acyQ9LMxMcCYAGwAMjamC9Mmpn4WAD+UQGgb3k6QpP96NmtM0be4uO/FCR4dZ/XFcew6ryPGCmP3voOgALd2Vy0cJ0xWgDqPsVYmUYU4mcBOEG1s7ksACvycu+7E5Y0FooG3c8CYAGgnJvyo8ScWvwvI7qXQvBpLCRvHwEuUPMR4BEYikk3Mcl+tOksAMm3oIJEiuLROBWEuCK0Im96cUWaLvKh+UXrnj2neynqTWMheXsC8AQwzRsqitMbFI3lZD/adBaA5ARAirPiQz/7pXtWNwklGI1fMQF053BVA0WTU35RP0Vdac3RJeBOCSiIaQF4rLACZ0JaC0C++0Z8tgCc4GkBsAD8RkAhOPkWXvOwACTxswBYACwAg59XSvbTsnn3WcsCYAGwAFgAloVrhkRlm0wuRMXNdwCPAHe/mCZL/GDmI0ASOdokV9t0Nw+5XIsg6s7BnwJEFZl/jgRgfvnnWiouaaiyvzNpqzE5WENqR3zoXit+z+2K+d0vPwWYX+K5lq9AiFeIcYXsnfl17rWCyXO7Yn53C8AJVtVvu1ch7SvE+Qoxzrff8y0tABaAGwKv0FyvEOPz23o+AguABcAC8HH9k1lUcOZb8LmWFgALgAXAAvBcFVrZnSp0p1/nXisXV68Q5yvEuMLnbt+Pz+4PeBszrP48P2quq9SqLxWjOLrzpvvRZiYUonu9cXt8wWgBSLKJEMICcA4ybcpkyb7M6V6k3iS+Z/lYAJLIE0JYACwASZq1mVsAklBbAB4B8xEgSaKNzC0AyWJYACwAScpsbW4BSJbHAmABSFJma3MLQLI8FgALQJIyW5sjAVCc+UYo0f0UyJPbZOITxU6E6OtjH/ill+76XOVHuaDAa4QJrTmNM+LL1XMLQBI5UljiE4VFiWIBiJC9f64QHEUNcln9sbYAJJEjzUx8orAsABFC988VeHkCyNVg+GWM7hEzGfrNnDQz8YniUxBasWaUx9VzHwEocjk/TwA5vNA3yiwASZAH39xTjOSKlw+tORXhPMLfHhaAJHKksMQnCosSRXH+pE1JRmi6lwIvEv9X0wkuYiO+XD23ACSRI81MfKKwFIRWrBnl4SNAzV0FxRn9z0A7KRgd3xRkJ2tSLOmbkBKF5LbytiM/sLoTFyjO3VOFBSBZKdqwlyMYHActALnCVdctErdcdHPWdJIc+h33LWfbKzabS7POqrvo5C1JY7QA5HhCcaZTRS66OWtFT3oCmMP+ZlVNJLqeBSBXOIqzBeAEAQWYuXLOWSvirF6TrmcBmOPAbyuKswXAAnCHQDWR6HoWAAvATwQwj3wH8Fwi4cINLg9zGc1Zk/uN6KKMnGm743j7CeAVfhS0u0kIMefa6N+zog3biRSdphS5Kbg+5LMF4JFqFoC69lM0SV103ytZAKoRLV5PoYqjEC0AdQW0AOSwVHDdE0CuBugPfpJb/DPmFoBcqS0AhZ86KEY7umaOBu9jbQHI1dICYAHIMWZzawtArkAWAAtAjjGbW1sAcgVqF4Cr7wHkwv5jTQuuSJzm0HlB2H3h+M71UeRGuTDyU3Ad524ByMlEdcNWrxdlg4nyAn+1qMjNAhAx6q/niiJ0NwktOrkg7M7tneujyI1ywRNAUjgUY1EyhCnz6oatXi9KQtEk3Tlc5ajIzQIQMcoTwA0BTwCPZCGYJCl3M7cA5JG7/D2A/FLfHooi7PKGifIjZO/O7Z3ro8jNE0BSCRRF6G4SWnQLgCeAmXZRHHdx35E/B55JMmtDmifag4ISrVv5vDvv7v0qsTrWUsTfKfgRHpSzFBf0k2BREuQ5TYAWj8So8OnOu3u/aswU8VMOKWKxABQyhoJZGEK4VDeJuvcLAUgaKOK3AJwg0N08isJ255Dk8pd5d97d+xFMRj6K+C0AFoBqnk6vpyB096Vpp9Aq8LIAWACmG7baUEFoC0BdlV4FS8qjy/8bUPFRBVVaxUjY+dai8e8S40o7UWKS3Dv3io5vCuEgmERxWgBW2F3gS4W2YOuWJTqbsnOvqLEsAEl6KdRNMXEk0wrNLQDnEBE+WADOsRzh4gkgbFGtgQXAAjDLMCKK0aRiAZhFX2RnAbAAzFLLAnCCVPfYN1usWTsLgAVglisWAAvALFe2sesU6M69otH6ZS4ByU+CKZKjjKWxUD8SJ1Xu0V50clA0iWLNq9w79yK1XvXpzg/9HkBn80SA0lioXxTP2XMLwOuO+aTeKz4WgCR6tJGpXzK8L3MLgAVgljcWgFmk/rejjUz9kuFZAAaAEWHsbhBS7xWf7vx8BCi8WLwqPCF6RCLfAUQI3T9X1CAXwZy1BWAOp5sVfZNTv2R4ngA8AaQoYwFIwTU+X3e/JT0B5IpH3srdDZLLaN26Oz90BKBp0rcuIcoRIxUAmh/xozEq/Ebx09oRTGgcIz+KF42f7tfuR74HQEGhJLIAPCKuIAptPPrWIjx6FS4o6qPoH08AhIWFPjsRxQJQV9id6joUDk8AdUUnK+1EFAsAqeC5z051tQCc1IiOknUU+V5pJ6JYAOqqu1NdLQAWgBsC9LxOz591LfW9EhVu2pA0frpfu5+PALTENX7tBf84rn3y/ywAOcx2qmv5BNCtwt1gjkpNYiE+0fEgR8c/1oraKY4OV3EqJhiKZTVPVmqO60omALzZ4O1D3zAKv+rCWgDqLsosAOdY4p60AOT0nzQz8Vl5G9A3MhU+uh/BxQJgAbhDwBNATsDwm6L57sBHgKa6egLIAV391qIClovadwBU+CjOhCcrUx/ND30TEG/mO4AHPlkAciOtjwA5vCIBswBECP31nCg78Vl5G9Azue8AkmQYmHfXHL+UyRGAwkSDpMTsfrtexUnj6MaLCkfnW5nuRXOj3KP7KfIb5mABoHI272cBqBtbFQ1ChZbGQvkwz7h5S3QEmF/+3pICTVV4F6BpHN14db+1SH606WhulHt0P0V+ngBOEOgE2gLgCeAnApQP9MVrAbAA3BCgwqcgrSeAR2LS+lBx8BGAIpfwo81DGiQKixKM5kBH4Ss/Gn91HMd6NBYFllHdL/H0JSCFbt6PFtwC0POGpDi/hQB80uzn+T81fiqaRPFZLImT+Byg0dJQYoKSylxI7jRvstczJgBFnB8WgNxbhjQz8bEAfKbFxQJwDtkIFwtA8oKQNDPxsQBYAP6mpieAk2ZVNFf10UER4/CjHfiXe+lXrtCBkN0TgCeAOwSqGzl6K1/tZwHIK4UF4BEzgkl0V+EjgI8A+e5s8CBk9wTgCcATwMLn0w19Pb2FBeANJ4Dp6icMqeontrgzJcSke9FzPo2RHpkU+ZE1afwKPxJ/dMRU8KH1CEBBoYkr9qPNVR0LJS3Fcpe8FfFTLBUvH4ozzqHzewDVTRBdcCj2owWqjoUWXNFA1bnR9SgmCj+aA+UXzsECkCsVLVBul9iaFtwC8IgAxdITQMxTuYWiCKOgLQDykuINFI1MP8KlSVB+4dw9AeRKRQuU2yW2pgX3BOAJ4CcCvgSMe+3OwgKQBKzRnIqiwo+mTfmFc6j+c2BFAhTMXfwoJor46ZFJMQqTNXfCktZHUQMciwWAQjfvtxNpFeTrXHMnLOcZcG+pwAvHYgGg0M377URaBfk619wJy3kGWABCrCiJwoU3MNiJtBRnMq5H0JM1d8Iyyu/quaIGOBZPABS6eb+dSKsgX+eaO2E5zwBPACFWlEThwhsY7ERaijN5W0fQkzV3wjLKzxNAAiFKzMQWTzPdibQUZ9KsEeBkzZ2wjPKzACQQwp9jwv9xOBGa1JQ2pCKo7uYiuRPROLCiuVFe0voo9hutWf7/AnQDrQCMFo/4kSYg+8z40NrNrH1mQ3K3AOTRtgDkMWvzIE2gCs4C8Ihs9wtGsZ8FQNUxBetaAHIgegLI4XVYWwDymLV5WAByUFsAcnhZAPJ4tXpYAHJwWwByeFkA8ni1elgAcnBbAHJ4YQFQXAjtRPY8jLEHwYxiQvaKMqCxROtWPn93ARhhRS8I0R3Av0qwFbISzGjTkb2i3Ggs0bqVzy0A52hSXC6/B/CvEmyFrAQz2nRkryg3Gku0buVzSnSKF33rVub8ey0aiycARTVO1iQko01H9opgoLFE61Y+twB4AqjkU+lapClp05G9omRpLNG6lc8tABaASj6VrkWakjYd2StKlsYSrVv53AJgAajkU+lapClp05G9omRpLNG6lc8tAMUCcPWz4JQMlJj0gqOSXDOXLdX7vTuhq+tKeVldt2M9yvVRLDQ/yqPLnwVXBEITVwBNY6kmEi0cxaS6ISM8qvejvIziJM9pDRTcozyyAJxUo5NktHCUfNUNGTVO9X6dtYlyozWwACSbTgG0oggRYc6eWwByqFkAfAeQYwyw7iSZBSBXoM7aRJEpXkw0P8ojHwGS00hEiuxzWjhKvuqRPMq3ej/aIFGc5DmtgWL6pDyyAFgAbgh0E5rsZwHY4AhA1YYU/EiXvkV28VPgpWgEGufojUZrTt7I9M1KY6Q1UOBMa4AmAJqAAmhFLNXC0R0jbR4aJyUfjZP40ZpSUaGYUFHB+5EvAlGiWAAey0SJ2U6Uwc+vU/KRRqY+FGcLwAkCFoBzWlyRTIGXBSAnBRaAC856AtC/lS0AuWZVWFsALAB3CHQ2ZedeK81D4/QRIIe6AmdaA3QJmEt3zpreD9AzGt2PjN50L0VuO70JKWnnGDVvpcCE1m4+6hpLC0ASRwtA7siUhPdmrhDNq1gsACfIEKLTYh9+ioIrCktw2Sm3XTCJuKLAzAJwIt7kEjAqHnmuKPguZN8pt10wiTiiwMwCYAFYHjE9AfgIEIlX9JxwKFqTPvcdQBI5UjzF24y+yalf96WWAjNPAJ4APAEMvtFHm46IYqS7NJZo3bPnClHsFkyS9+FTPgHQwlES0f0oYMSPEqzbj+T2RSLB14TpmjQH4rcT9zBXqi8BKSi04HQ/UnDqg4sD39Z0P0V+ozW7vxBD87vy24l7tOaeAKpZcbIeLo4FoKE6fAsLwAl2FBRPACcXNBYA3p0NnpTritDwS8ZHAEU57tfExbEA6IuzsIMFwBPAFH0sAOcw+Q5gij5TRphjngCm8F0ywsXxBLCEu9r5LSaA42v4Z0B1q7MCTNp4I+KQNen9Br1Br45f3Uhn619hthNPCBdWsKT7jfw+LAC5kpAiWAByGB/WFoCeS2ELQJKbFoAkYNDcAmABgNT540aaNdqUrOkJIEJ1nuw+AtReqHoCSHLTApAEDJp7ApgXxcOS3tlZAJIEtQAkAYPmFgALAKSOjwD+FCBHHSLqo4vK6I2ci26dz8NPAa6+B0BJRJPr9qMjE/Gj51YFMV8dZ8V9Sjcmo/0oV2gOl38MZAGou2yhRbUA5MZg2gQ7+VGu0BwsACfIVTceLWp1HJQkK35kYhqN0J4AVqpxIqg+AuTeMoTQFoBz0hKBswBYAEoQII0cXe5U31yTBokup0rASyxSjbMFIAH+hKmPAD4CTNCEm1gActjRaTG3yx9rC4AFgHJnys8CMAXTzeglBCCX0vOsX32EpmR4lTGZ5NedG4kxYjzl5WhdiguaAKIEd3lOgaZgVudNybdL/BEeJL/u3EiMUd6UlxaACNm/nlOgu0l2lRYl3y7xR+Ui+XXnRmKM8qa8tABEyFoAvhDobpJkWZbOu925WQBodTfwo0rbTTJPAPNk6a6NBWC+NttZWgC2K8ldQKS5LADnNaW4+BLwBE8KZnW7kQbxEaC2CrQG9LxO96Ocvfw9gFoYdatVf84cRUqBJmN+9V5HDN14RXhWPldMfAq8aJwUq9F+FoAkqtVNSQmWDHvq4q2bmDSHKz8a/6v4UbwsACfIdY9angAofef9XqWRaZzzSNxbWgAsAJ4APk//+4svXGhDdvtZAJKNTAtEL3BIgXwEIKid+9B6v4ofRcoTQFI4LACPCNAjEyUt8XuVRqZxEkyiCceXgElUfQmYBKzRnDbWq/hRKNEEsJPi0wIp3uTVuFQLypFzdYwR8WgO3XFe5aHgF+UexYTmgP5fgIgQ1c9pcrQIIz9aIEI+imN1jFEcFoAIofvn3Xwe3jOR/xw0l+66dTdgFoBczSwAdXhR8aY94gkgV7vy8Zo2T6dIRRDRHCjZo3iyz2nzZPf5ba/Yj65pAUhWsZq0tHksAMnCDcxp89AIFPvRNS0AySpaAB4BoyJWjWWylDdz2jw77UdzsAAkq1hNWto8ngCShfMEcIoAEoBu0lJ1G1Gkc036bT/qpxAHBV51Lby2koLPaxGde1e/fI5dLAAnWFOgr4hEG5n6WQBy7WcBSDaBAjBK9upmPaCoXlORG61BdW4reOXaVGdNsdRF5AngDgHF+Nm5pgWgu1Vy+1kAPAHcIVD9lrQA5Bqy29oCYAGwAARdp5iYuhv9aj8LgAXAAmAB2EWPLuOgk+kosbf+FIAqOx3Zr4CuXm97pv4IUEFa8iancezCIdVlqwWgYfqxAPRIluKYYgE4qR0FZUQD2iTUTxGLJ4BHBOibl0iGBSCPmicATwB51iQ8LACPYNEXqAJLC4AFINHOeVMFaX0HkK/DJWbkB0GoginGbh8B6sigWMkC4Algile0kamfQox8B+A7gN8IdPNyqsnO7vM8AVDo/i2yd77JaUXoJaBioqU5dAuH7wBopZJ3B4XbfC1FyT6KQ7Fmdd6K+C0ASTIrAKPKR/0UxOx8SyqaVbGmAufqS0AFn2neCj4P1/QRgJbKR4A65GpWogJmAfAEUMJATwAlMOJFLADn0HkCwJTKOVoAcnhVW1sALAB3CHSPdhaA6pbOrWcBaBKAXFnWrWlhFTfG69nMr9Cd9ygyejlF/eZRWrfsFO6VaCV8IJeAK0kQX0niH8cnoHnFJPFTn+68LQC0Uj1+Ej5YAB6Lt8sbQVLwgfBZAHoame4i4YMFwAIwQ0g6ylO/mZiqbHYR/CgfC8AJQrR4CjCjAmafK2KkF6O0kalfFqsVe8qhlT2Jr4QPngA8AcyQkTYy9ZuJqcrGAlD4Zq0qys91JMrnS8BUqWgjU79UcIvGFoBFAJ/pTotHRYX6XWFUvd6xz05j/ogbNM5qvilEivKyG6/LvwasBlm1HgWaNh71swA8ImAByHWFAi8LQPL4YwGouzNREDrXUt/WngAIapv4eAKoe7PSRlDUoJNeNO9RjBQTHwGSladA0zc59fMRoE6okhQJzS0AIUT7GlgA6hqLNoKiBp2Mo3l7Auis0sVeCvJRQpBYqieKAyZ6tu7MeyXOatrRvN9BAP4DNdLZH+dHbFgAAAAASUVORK5CYII="> -->
</body>

</html>