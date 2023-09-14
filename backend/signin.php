<?php
session_start();
include('connect.php');


$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$stuId=$_POST['stuId'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];


$sql = "Select * from `hostel` where firstname='$firstname' and surname='$surname' and stuId='$stuId' and email='$email'
and password='$password' and gender='$gender'";

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
	
	echo '<script>
    alert("Login successful");
    window.location="../bookings/dashbord.php";
    </script>';
	}else{
		echo '<script>
    alert("Invalid Credentials");
    window.location="../login.php";
    </script>';
	}





?>