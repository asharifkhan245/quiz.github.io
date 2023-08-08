<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    

</head>
<body>
    <div class="container">
    <h1 class="text-center m-5"> <span class=" rounded text-center m-5 text-white bg-primary p-1 me-2">BURAQ TECH </span> WEB DEVELOPER QUIZ</h1>
    <h1 class="text-center bg-dark text-white">RESULT</h1>

<?php

include("connect.php");
error_reporting(0);

if (isset($_POST['submit'])){

    if(!empty($_POST['quizcheck'])){

        $count=count($_POST['quizcheck']);
    
    ?>
<table class="table border">
    <tbody >
        <tr>
            <td class="border  "  style="padding-left:90px;">
                Question Attempted 
            </td>
       
      
            <td class="ms-5"  style="padding-left:400px;">
                <?php echo "Out of 6, You  have Selected ".$count." Option "; ?>
            </td>
        </tr>
           
    
    </tbody>
</table>
    <?php

        $result = 0;
        $i = 1;

        $selected = $_POST['quizcheck'];

        // print_r($selected);

        $q =  "select * from questions";
        $query = $obj->dataquery($q);


        while ($rows=mysqli_fetch_assoc($query)){
            // print_r($rows['ans_id']);
            $checked =  $rows['ans_id'] == $selected[$i];

            if ($checked){
    
                $result++;
            }
            $i++;
        }
?>

<table class="table border">
    <tbody>

         <tr >
            <td class="border"  style="padding-left:90px;"> Your Total Score is</td>
    
 
            <td > <?php echo " Your Score is ".$result; ?></td>
       </tr>
    </tbody>
</table>

<!-- data inserted in user"s tale -->
<?php
        $name  =  $_SESSION["name"];
$finalresult =  "insert into user (uid,username,totalques,answercorrect) value ('', '$name','6','$result')";
$obj->dataquery($finalresult);

    }
}
?>

<a href="logout.php" type="submit" class="btn btn-primary m-auto d-block">logout</a>
<div class="m-auto d-block text-center ">
<small class=" t fs-5">Project by asharif khan</small>
</div>
</div>


</body>
</html>
