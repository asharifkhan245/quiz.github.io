<?php
include("connect.php");


// data inserted in data base rigistration table

if(isset($_POST["submit"])){
extract($_POST);
$sql="INSERT INTO registration  VALUE ('','$name','$email','$pass')";
if($obj->dataquery($sql)=== TRUE){
  ?>
<script>alert("Registration Succesfully!")</script>
  <?php
}}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>student-registration</title>
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container">

  <div class="container">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fa fa-user fa-lg me-3 fa-fw mb-4"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" class="form-control" name="name" required />
                      <label class="form-label" >Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fa fa-envelope fa-lg me-3 fa-fw mb-4"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" class="form-control" name="email" required/>
                      <label class="form-label" >Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fa fa-lock fa-lg me-3 fa-fw mb-4"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" class="form-control" name="pass" required />
                      <label class="form-label" >Password</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" />
                    <label class="form-check-label" >
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  <button type="submit" class="btn btn-primary" name="submit">Register</button>

                    <a href="index.php" type="button" class="btn btn-primary btn-lg ms-4">login</a>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://media.licdn.com/dms/image/D4D03AQHOZYd_Wm5GHw/profile-displayphoto-shrink_800_800/0/1669473754468?e=2147483647&v=beta&t=OJRAUr7GWOsrMsl_CnCE_fi23uTKlLgu-4abl1a9s_8"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
</section>
</body>
</html>