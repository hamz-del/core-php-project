<?php 
 $db = mysqli_connect("localhost","root","","3starclub");

if(isset($_POST['submit'])){
 $fullname = $_POST['fullname'];
 $username = $_POST['username'];
 $userpass = $_POST['userpass'];

 $insert = "INSERT INTO `admin_table` (`Admin_Id`, `Admin_FullName`, `user_Name`, `Password`, `Status`, `Create_time`) VALUES 
 (NULL, '$fullname', ' $username', '$userpass', '1', CURRENT_TIMESTAMP);";
     $con = $db->query($insert);
     if($con){
        echo '<script>window.location="signup.php?msg=Registration Successfull";</script>';
     }else{
     echo '<script>window.location="signu.php?dgr=Error in Registration...!";</script>';
     }
}
 
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="resources\css\style.css">
    <title>Sign Up</title>
</head>
    <body>
        <?php
        if(isset($_GET['msg'])){
            echo '<span class="btn btn-success" style="text-align:center;">'.$_GET['msg'].'</span>';   
        }?>

        <?php
         if(isset($_GET['dgr'])){
            echo '<span class="btn btn-danger" style="text-align:center">'.$_GET['dgr'].'</span>';
         }
        ?>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 bg-dark text-white" style="height:500px; border-bottom:500px solid transparent; border-left:100px solid red;">
                    <div style="margin-top:50%;">
                    <h1 style="color:red">Welcome</h1>
                    <h1 style="margin-left:60px ;">To</h1>
                    <h1>3<span style="color:red ;">Star</span>Club</h1>
                    </div>
                
                    
                 
                </div>
                <div class="col-lg-6  bg-secondary">
                    <form action="" method="POST" class="w-75 mx-auto mt-3 border p-5 btn-outline-light" enctype="multipart/form-data">
                        <h1 class="bg-info text-center">Sign Up</h1>
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <label for="">User Name:</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Your User Name">
                        </div>
                        <div class="form-group">
                            <label for="">Password:</label>
                            <input type="password" class="form-control" name="userpass" placeholder="Enter Your Password">
                        </div>
                        
                        <button class="btn btn-outline-info  mt-3 form-control " type="submit" name="submit">Registered</button>
                        <a href="login.php" class="btn btn-outline-success text-white form-control mt-3">Login</a>
                        
                    
                        
                    </form>
                
                </div>
            </div>
        </div>
        
        
    </body>
</html>