<?php

include("connect.php");

$id= $_SESSION['doc_id'];

$sql="SELECT * FROM doctor WHERE doc_id= '$id' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor-1</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="site2/site2/CSS/doctor.css">
    <link rel="stylesheet" href="site2/site2/footer/footers.css">

</head>
<body>
    <div class="doctor-1">
        <div class="intro">
            <div class="img">
            <img src="site2/site2/img/logo.jpg" alt=""> 
            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="info">
                <br><h2><?= $row['d_name']?></h2><br>
                <h3><?= $row['d_duty']?></h3><br><br>
                <h4>Designation:</h4>
                <h5><?= $row['d_designation']?></h5>
            </div>
        </div>

        <div class="profile">
            <div class="header">
                <div class="box"></div>&nbsp;
                    <h3>Doctor's Profile</h3><br>
            </div><br>
            <div class="line"></div><br>
            <div class="prof">
                 <div class="qual size">
                    <h4> Qualifications:</h4>
                    <h5><?= $row['d_qualification']?></h5>
                 </div><br>
                 <div class="exp size">
                    <h4>Years of Expertise:</h4>
                    <h5><?= $row['d_experience']?></h5>
                 </div>
                 <br>
                 <div class="lang size">
                    <h4> Languages known:</h4>
                    <h5><?= $row['d_language']?></h5>
                 </div>
            </div><br>

            <div class="timing">
                <div class="header">
                    <div class="box"></div>&nbsp;
                        <h3>Timings</h3>
                </div>
                <br>
                <div class="line"></div><br>
                <div class="time">
                <h5>Mon-Sat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $row['d_starttime']?>-<?= $row['d_endtime']?></h5>
                </div>

            </div><br>
            <div class="button">
               <a href="signin.php"> <button class="btn">Book an Appointment</button></a>
            </div>

        </div>


    </div><br>
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3><span>Topmost</span>Dental Clinic</h3>

            <p class="footer-links">
                <a href="http://localhost/dental-clinic-final/admin-page/site2/site2/index.php">Home</a>
                |
                <a href="http://localhost/dental-clinic-final/admin-page/site2/site2/index.php#about">About</a>
                |
                <a href="http://localhost/dental-clinic-final/admin-page/site2/site2/index.php#contact">Contact</a>
                
            </p>

            <p class="footer-company-name">Copyright © 2022 <strong>Topmostdentalclinic</strong> All rights reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>South Klamassery</span>
                    Kochi</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+91 9847054439</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:topmost@gmail.com">topmost789@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the Clinic</span>
                <strong>Topmost Dental Clinic</strong>is a dental clinc where the people can take appointments 
                at a particular time
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
</body>
</html>