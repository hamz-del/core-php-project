<?php
 $connection = mysqli_connect('localhost', 'root', '','3starclub');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="resources\css\Templete.css">

    <title>Home</title>
  </head>
  <body>
    <div class="container-fluid bg-dark px-0" >
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="index.php" class="navbar-brand w-100 h-100  m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 style="color:white ;">3<span style="color:red ;">Star</span>Club</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-12 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2 text-white">
                             
                        <?php 
                      $result = mysqli_query($connection, "SELECT * FROM `about_them`");
                       $rows = $result->fetch_assoc();
                      ?>
                      <p style="color:white"><?php echo $rows['email'];?></p>
                    
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5  ">
                    <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 style="color:white ;">3<span style="color:red ;">Star</span>Club</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between h-100 " id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0 ">
                         <?php 
                         echo $sel = "select * from menu_table where menu_status='1'";
                         $cmd = $connection->query($sel);
                         while($row = $cmd->fetch_array()){ 
                        ?> 
                            <a href="<?php echo $row['page'];?>.html" class="nav-item nav-link active text-uppecase" style="color:red"><b><?php echo $row['menu_name'];?></b></a> 
                        <?php 
                        }
                        ?>
                            <!-- <a href="services.html" class="nav-item nav-link text-uppercase">Services</a>
                           <a href="about.html" class="nav-item nav-link text-uppercase">About</a>
                         <a href="contact.html" class="nav-item nav-link text-uppercase">Contact</a>
                            -->
                            </div>
                           
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <?php 
    $result = mysqli_query($connection, "SELECT * FROM `slider_table` where slider_order='1'");
    $n= $result->fetch_array();
     ?>
                    <img class="w-100" src="Dashboard/<?php echo $n['slider_image']; ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3  " style="max-width: 900px; margin-bottom:20%">
                            <h5 class="text-white text-uppercase font-weight-bold"  ><b>Best Gym Center</b></h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4 "><b>Build Your Body Strong With Gymster</b></h1>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                <?php 
                 $result = mysqli_query($connection, "SELECT * FROM `slider_table` where slider_order='2'");
                 $n= $result->fetch_array();
                 ?>
                    <img class="w-100" src="Dashboard/<?php echo $n['slider_image']; ?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;margin-bottom:20%">
                            <h5 class="text-white text-uppercase"><b>Best Gym Center</b></h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4"><b>Grow Your Strength With Our Trainers</b></h1>
                            
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container gym-class">
        <div class="row px-3">
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-danger text-right text-white py-5 px-5">

                    <h2 class="display-4 mb-3 text-white font-weight-bold">About</h2>
                    
                    <p style="font-size:21px;">Fitness First created the gym industry in the UK in the 1990s and fast became a leader in the market
                         because of its unshakeable passion for fitness. With 42 clubs across the country, the Fitness First team are experts 
                         in everything health and wellbeing, supported by four key best in class brand pillars: Classes, Equipment, Personal 
                         Trainers and Customised Workouts. Fitness First is committed to 
                        a bright future of making our members stronger in life, one training session at a time. <br><br>

                        We are an ambitious company and we’re always looking for great people to join our team – from personal
                         trainers, group exercise instructors and club managers to our front-of-house teams. We’re committed to training,
                          so you’ll be encouraged to improve your existing skills while you develop new ones. Click here to find out more.</p>
                   
                    
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="gym-class-box d-flex flex-column align-items-start justify-content-center bg-dark text-left text-white py-5 px-5">
                    <i class="flaticon-bodybuilding"></i>
                    <h3 class="display-4 mb-3 text-white font-weight-bold">Services</h3>
                        <div class="container-fluide">
                            <div class="row">
                                <div class="col-12 col-lg-6 ">
                                    <img src="resources\img\services.jpg" alt="" style="width:100%; height: 100%;">
                                </div>
                                <div class="col-12 col-lg-6 bg-dark">
                                    <h3>Personal Traning</h3>
                                    <p style="font-size:15px ;">With personal training, the focus is you. We design a program specific
                                         to your health and fitness goal and work with you to achieve them.</p>

                                </div>

                                <div class="col-12 col-lg-6 bg-dark mt-3 ">
                                    <h3>Group fitness classes</h3>
                                    <p style="font-size:15px ;">Recreational Services offers classes to meet a variety of members’ fitness 
                                        goals from cardio inspired dance classes to calming, meditative yoga classes.</p>
                                </div>
                                <div class="col-12 col-lg-6 mt-3 ">
                                    <img src="resources\img\services1.jpg" alt="" style="width:100%; height: 90%;">
                                </div>

                                <div class="col-12 col-lg-6 mt-3 ">
                                    <img src="resources\img\services2.jpg" alt="" style="width:100%; height: 90%;">
                                </div>

                                <div class="col-12 col-lg-6 bg-dark mt-3 ">
                                    <h3>Strength training</h3>
                                    <p style="font-size:15px ;">Want to reduce body fat, increase lean muscle mass and burn calories more efficiently? Strength training to the rescue! 
                                        Strength training is a key component of overall health and fitness for everyone.</p>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer container-fluid bg-dark text-white mt-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-danger mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, Peshawar, Pak</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-danger mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-danger mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Features</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Classes</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-danger mb-4">Opening Hours</h4>
                <h5 class="text-white">Monday - Friday</h5>
                <p>8.00 AM - 8.00 PM</p>
                <h5 class="text-white">Saturday - Sunday</h5>
                <p>2.00 PM - 8.00 PM</p>
            </div>
        </div>
        <div class="container border-top border-light pt-5">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-white font-weight-bold" href="#">Fitness Club</a>. All Rights Reserved. Designed by
                <a class="text-white font-weight-bold" href="https://htmlcodex.com">3 star Group</a>
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>