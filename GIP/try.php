<?php
    include_once 'conect.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
        <body>
            <?php
            $sql = "SELECT * FROM `patient`";;
            $result = mysqli_query($conn, $sql);
           $resultcheck = mysqli_num_rows($result);
           if($resultcheck>0){
               while($row=mysqli_fetch_assoc($result)){
                   echo "$row[FirstName]        "."$row[DOB]        "."$row[Lastname]    "."$row[city]       "."$row[BG]"."<br>";
               }
           }

            ?>

        </body>



</html>