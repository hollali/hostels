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
<body>
    <h1 class="text-primary text-center p-3">UPSA HOSTEL REGISTRATION FORM</h1>
    <div class="py-3"></div>
    <h2 class="text-center">REGISTER ACCOUNT</h2>
        <div class="container text-center">
            <form action="./backend/register.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text"class="form-control w-50 m-auto" placeholder="First Name" required="required" name="firstname">
                </div>
                <div class="mb-3">
                    <input type="text"class="form-control w-50 m-auto" placeholder="Surname" required="required" name="surname">
                </div>
                <div class="mb-3">
                    <input type="text"class="form-control w-50 m-auto" placeholder="Student Index Number" required="required" name="stuId">
                </div>
                <div class="mb-3">
                    <input type="text"class="form-control w-50 m-auto" placeholder="Mobile Number" required="required" name="mobile">
                </div>
                <div class="mb-3">
                    <input type="email"class="form-control w-50 m-auto" placeholder="Email" required="required" name="email">
                </div>
                <div class="mb-3">
                    <input type="password"class="form-control w-50 m-auto" placeholder="Password" required="required" name="password">
                </div>
                <div class="mb-3">
                    <input type="password"class="form-control w-50 m-auto" placeholder="Confirm Password" required="required" name="cpassword">
                </div>
                <div class="mb-3">
                    <select name="gender" class="form-select w-50 m-auto">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <button type ="submit"class="btn btn-primary">REGISTER</button>
                <p>Already have an account? <a href="./login.php" class="text-primary text-decoration-none">Login here</a></p>
            </form>
        </div>
    <!-- Bootstrap Js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src='main.js'></script> 
</body>
</html>