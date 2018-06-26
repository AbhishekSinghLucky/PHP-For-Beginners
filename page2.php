<?php
include "connection.php";
?>
<html>
    <head></head>
    <body>
    <?php
        if(isset($_POST['submit'])){          
            for($i=0;$i<10;$i++){
               if(isset($_POST['checkbox'.$i.''])){
               
                $id= $_POST['id'][$i];   
                $name= $_POST['name'][$i];
                $email= $_POST['email'][$i];
                $mobile= $_POST['mobile'][$i];   
             
$sql2="INSERT INTO `table2`(`id`, `name`, `email`, `mobile`) VALUES ($id,'$name','$email',$mobile)";
$result2= mysqli_query($conn,$sql2);
if($result2){   
    
echo "<center>";
echo "Data has been submitted to TABLE-2 <br>";echo "<br>";
echo "<a href='page3.php'>View Table - 2</a>";
echo "</center>";
$sql3= "UPDATE `table1` SET `flag`=1 WHERE id= $id";
$result3= mysqli_query($conn,$sql3);
            }
            }
            }
            }
 ?>  
    </body>
</html>