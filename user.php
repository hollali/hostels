<?php
include ('./backend/connect.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $surname=$_POST['surname'];
    $idNum=$_POST['idNum'];
    $halls=$_POST['halls'];
    $mop=$_POST['mop'];
    $amount=$_POST['amount'];

    $sql="insert into`crud` (username,surname,idNum,halls,mop,amount)
    values('$username','$surname','$idNum','$halls','$mop','$amount')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
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
<h1 class="text-primary text-center p-3">UPSA HOSTEL BOOKING FORM</h1>
    <div class=" py-4">
    <h2 class="text-center">LOGIN</h2>
    <div class="container text-center">
    <form  method="POST">
        <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="username"placeholder="First Name" required="required" autocomplete="off">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="surname"placeholder="Surname" required="required" autocomplete="off">
        </div>   
        <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="idNum"placeholder="Student Index Number" required="required" autocomplete="off">
        </div>
        <div class="mb-3">
                <select name="halls" class="form-select w-50 m-auto">
                    <option value="OA">Opuku Amposah</option>
                    <option value="NM">Nelson Mandela</option>
                    <option value="L">Liberty</option>
                    <option value="YA">Yaa Asantewaa</option>
                </select>
        </div>
        <div class="mb-3">
                <select name="mop" class="form-select w-50 m-auto">
                    <option value="bank">Bank</option>
                    <option value="creditcard">Credit card</option>
                    <option value="mobile">Mobile Money</option>
                </select>
        </div>
        <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="amount"placeholder="Amount paid" required="required" maxlength="4"  autocomplete="off">
        </div>        
        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
        </form>
    </div>
    </div>
    <!-- Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>