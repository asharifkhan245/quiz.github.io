<?php
session_start();
class connect{

    public $con;

    public function __construct(){
        $this->con=mysqli_connect("localhost", "root" ,"" ,"quiz");
        if($this->con){
        // echo "connected";
        }else{
        
        
          echo "not connected";
        }
          }

          public function dataquery($query){
          return  $this->con->query($query);
    }

    public function login($email,$pass){
      $data = "select *from registration where email='$email' AND password='$pass'";
      $query = $this->con->query($data);
      if($query->num_rows > 0){
          $row = mysqli_fetch_assoc($query);
              $_SESSION["id"] = $row["id"];
              $_SESSION["name"] = $row["name"];
              $_SESSION["email"] = $row["email"];
              $_SESSION["pass"] = $row["password"];
      header("Location:main.php");
      ?>
<script>alert("Login Successfully!")</script>
      <?php
          
      }
  }

}

$obj = new connect;
?>