
<?php
include ("connect.php");

if(isset($_POST["login"])){
    extract ($_POST);
    $obj->login($email,$pass);
    header("Location:main.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container">

      <div class="container p-5">

      <div class="bg-white p-5 row d-flex justify-content-center align-items-center h-100" style="border-radius: 25px;">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://media.licdn.com/dms/image/D4D03AQHOZYd_Wm5GHw/profile-displayphoto-shrink_800_800/0/1669473754468?e=2147483647&v=beta&t=OJRAUr7GWOsrMsl_CnCE_fi23uTKlLgu-4abl1a9s_8"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="post">

        <h2 class="mt-5">Login form</h2>
        <br>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
            <label class="form-label" for="form3Example3" >Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" name="pass" class="form-control form-control-lg"
              placeholder="Enter password" />
            <label class="form-label" for="form3Example4" >Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="login" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="registration.php"
                class="link-primary">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
    <!-- Right -->
    <br>
  <br>

    
    </div>

  </div>
</section>

</body>
</html>