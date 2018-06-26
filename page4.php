<?php
include "connection.php";
?>
<html>
    <head></head>
    <body>
    <?php
        if(isset($_POST['submit'])){          
            for($i=0;$i<10;$i++){
               if(isset($_POST['checkbox'.$i.'']))
               {               
                $id= $_POST['id'][$i];   
                $name= $_POST['name'][$i];
                $email= $_POST['email'][$i];
                $mobile= $_POST['mobile'][$i];   
$sql3="INSERT INTO `table1`(`id`, `name`, `email`, `mobile`) VALUES ($id,'$name','$email',$mobile)";
$result3=mysqli_query($conn,$sql3);                   
$sql2="DELETE FROM `table2` WHERE id=$id";
$result2= mysqli_query($conn,$sql2);
$sql4= "UPDATE `table1` SET `flag`=0 WHERE id= $id";
$result4= mysqli_query($conn,$sql4);                   
if($result2){
    echo "<center>";
    echo "<br>";
    echo "Record Deleted and Inserted in Table-1";echo "<br>";
    echo "<a href='page1.php'>View Table - 1</a>";
    echo "</center>";
}
            }
            }
            }
 ?>   
    </body>
</html>