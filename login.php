<!DOCTYPE html>
<html>
<head>
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <title>UPSA HOSTEL REGISTRATION & LOGIN FORM</title>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <!--Bootstrap Css-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
   integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
   <link rel='stylesheet' href='main.css'>
   
</head>
<body class="">
   <h1 class="text-primary text-center p-3">UPSA HOSTEL LOGIN FORM</h1>
   <div class=" py-4">
      <h2 class="text-center">LOGIN</h2>
      <div class="container text-center">
      <form action="./backend/signin.php" method="POST">
      <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="firstname"placeholder="First Name" required="required" autocomplete="off">
         </div>
         <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="surname"placeholder="Surname" required="required" autocomplete="off">
         </div>   
         <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="stuId"placeholder="Student Index Number" required="required" autocomplete="off">
         </div>
         <div class="mb-3">
            <input type="email" class="form-control w-50 m-auto" name="email"placeholder="Email" required="required" autocomplete="off">
         </div>
         <div class="mb-3">
            <input type="text" class="form-control w-50 m-auto" name="password"placeholder="Password" required="required" maxlength="20" minlength="8" autocomplete="off">
         </div>
         <div class="mb-3">
                  <select name="gender" class="form-select w-50 m-auto">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                  </select>
               </div>
         <button type="submit" class="btn btn-primary my-4">SIGN IN</button>
         <p>Please Register if this is your first time of using this platform.  <a href="./registration.php" class="text-primary text-decoration-none">Hostel Register here</a> </p>
         
         </form>
      </div>
   </div>
   <!-- Bootstrap Js-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src='main.js'></script> 
</body>
</html>