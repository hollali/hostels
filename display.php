<?php
include ('./backend/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">ID</th>
      <th scope="col">Halls</th>
      <th scope="col">MOP</th>
      <th scope="col">Amount</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $username=$row['username'];
            $surname=$row['surname'];
            $idNum=$row['idNum'];
            $halls=$row['halls'];
            $mop=$row['mop'];
            $amount=$row['amount'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$username.'</td>
            <td>'.$surname.'</td>
            <td>'.$idNum.'</td>
            <td>'.$halls.'</td>
            <td>'.$mop.'</td>
            <td>'.$amount.'</td>
            <td>
        
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light text-decoration-none">DELETE</a></button>
        </td> 
          </tr>';
        }
        
    }
    ?>
    
  </tbody>
</table>   
</body>
</html>