<?php
include "connection.php";
$sql= "SELECT * from table2";
$result2=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result2);
//print_r($rowcount);die;
?>
<html><head></head><body><center><br>   
 <form action="page4.php" method="post">   
<table width="400" border="1" cellpadding="1" cellspacing="1">
<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
              
    </tr>
<?php 
//$sql= "SELECT * from table1";
$result= mysqli_query($conn,$sql);
$i=0;
while($row= $result->fetch_assoc()){
//         echo "<tr>";
//                        echo "<td>".$row["id"]."</td>";    
//                        echo "<td>".$row["name"]."</td>";
//                        echo "<td>".$row["email"]."</td>";
//                        echo "<td>".$row["mobile"]."</td>";
//                        echo "<td>"."<input type='checkbox' name='checkbox.$i.'"."</td>";
//         echo "</tr>"; 
      echo "<tr>";
      echo "<td>"."<input type='text' name='id[]' value='".$row['id']."'  > "."</td>";
      echo "<td>"."<input type='text' name='name[]' value='".$row['name']."' >"."</td>";
      echo "<td>"."<input type='text' name='email[]' value='".$row['email']."' >"."</td>";
      echo "<td>"."<input type='text' name='mobile[]' value='".$row['mobile']."' >"."</td>";
//      echo "<td>"."<input type ='checkbox' name = 'checkbox'.'$i'. >"."</td>";
    echo"<td><input type='checkbox' name='checkbox".$i."'></td>";
      echo "</tr>";
    $i++;      
}
    
?>
</table>
<br>
        <input type="submit" name="submit">
</form>
    <a href="page1.php">View Table-1</a>
    </center>

    </body></html>
