<?php
include "connection.php";
$sql= "SELECT * from table1 WHERE flag=0";
$result2=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result2);
//print_r($rowcount);die;
?>
<html>
    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    
    <body>
      <div class="container">
  <div class="jumbotron">
      <center> <h1>My Records</h1>  
  <p>Table 1</p></center>
      </div>      
</div>     
        
        
        <center><br>   
 <form action="page2.php" method="post"> 
     <div class="well">
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
         </table>  </div>

<br>
        <input type="submit" name="submit" class="btn btn-primary btn-lg">
</form>
   <a href="page3.php">View Table-2</a> 
    </center>

       
    </body></html>
