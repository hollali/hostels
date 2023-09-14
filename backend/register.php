<?php
include('connect.php');

$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$stuId=$_POST['stuId'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$gender=$_POST['gender'];


if($password!=$cpassword){
    echo '<script>
    alert("Passwords did not match");
    window.location="../registration.php";
    </script>';
}else{
    $sql="insert into `hostel`(firstname,surname,stuId,mobile,email,password,gender)
    values('$firstname','$surname','$stuId','$mobile','$email','$password','$gender')";

    $result=mysqli_query($con,$sql);
    
    if($result){
        echo '<script>
    alert("Registration Successful");
    window.location="../index.php";
    </script>';
    }
}
?>