<?php
    session_start();
     $db = mysqli_connect("localhost","root","","3starclub");
     if(isset($_POST['login'])){
        $username = trim($_POST['username']);
        $userpass = trim($_POST['userpass']);

        echo $sel = "SELECT * FROM admin_table WHERE like username='$username'
         AND password='$userpass'";
        $cmd = $db->query($sel);
        $re = mysqli_num_rows($cmd);

        print_r($re);
    if($re==1){
         $row = $cmd->fetch_array();
         $_SESSION['Admin_Id'] = $row['Admin_Id'];
         $_SESSION['user_Name'] = $row['user_Name'];
        //echo '<script>window.location="login.php?msg=Welcome";</script>';
     
        }else{
       // echo '<script>window.location="login.php?dgr=Invalid username and password";</script>';
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
    <link rel="stylesheet" href="resource/css/style.css">
    <title>Log in</title>
</head>
    <body>     
         <?php
            if(isset($_GET['msg'])){
          //    echo '<span class="btn btn-success">'.$_GET['msg'].'</span>';
                
            }?>

        <?php
            if(isset($_GET['dgr'])){
             //   echo '<span class="btn btn-danger">'.$_GET['dgr'].'</span>';
            }?>
            
    
        <div class="container mt-5" >
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 bg-dark text-white" style="height:500px; border-bottom:500px solid transparent; border-left:100px solid red;">
                    <div style="margin-top:50%;">
                    <h1 style="color:red">Welcome</h1>
                    <h1 style="margin-left:60px ;">To</h1>
                    <h1>3 <span style="color:red ;">Star</span> Club</h1>
                    </div>
                
                    
                 
                </div>
                <div class="col-lg-6  bg-secondary">
                    <form action="" method="POST" class="w-75 mx-auto mt-5 border p-5 btn-outline-light" enctype="multipart/form-data">
                        <h1 class="bg-danger text-center">Log in</h1>
                        
                        <div class="form-group">
                            <label for="">User Name:</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter Your User Name" required="">
                        </div>
                        <div class="form-group">
                            <label for="">Password:</label>
                            <input type="password" class="form-control" name="userpass" placeholder="Enter Your Password" required="">
                        </div>
                        
                        <button class="btn btn-outline-danger  mt-3 form-control " type="submit" name="login">Log_in</button>
                        <h4 class="mt-3">New User <a href="Signup.php"> Sign up?</a></h4>
                    </form>
                </div>
            </div>
        </div>
        
        
    </body>
</html>