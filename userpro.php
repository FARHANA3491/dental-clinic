<?php

include("connect.php");

if(!isset($_SESSION['p_name'])){
   header("location:".'signin.php');
}


?>









<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="user.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
      crossorigin="anonymous">
</head>
<body>
    <div class="container">
    


        <div class="main">
            <div class="topbar">
                <a href="logout.php">logout</a>
            </div>
            <div class="whole">
                    <div class=" sidebar">
                           <img src="img07.png" class="rounded-circle" width="150">
                            <div class="mt"><br>
                             <h3><?php echo $_SESSION['p_name']; ?></h3><br><br>

                             
                                
                             <button class="btn"><a href="Book-appo-site.php">MAKE AN APPOINTMENT</a></button>
                            <br>
                            <button class="btn"><a href="booked-appo.php">BOOKED APPOINTMENTS</a></button><br>
                            
                             </div>
                    </div>
                
                    <div class="content">
                        <div class="rec">
                            <div class="block"></div>
                        <h1>ABOUT</h1>
                        </div><br>
                        <div class="row1">
                                <div class="sec">
                                    <h5>Patient ID:</h5>
                                </div>
                                <div class="text">
                                <?php echo $_SESSION['p_id']; ?>
                                </div>
                            </div>
                            <hr class="hr">

                            <div class="row1">
                                <div class="sec">
                                    <h5>Full Name:</h5>
                                </div>
                                <div class="text">
                                <?php echo $_SESSION['p_name']; ?>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="row1">
                                <div class="sec">
                                    <h5>DOB:</h5>
                                </div>
                                <div class="text">
                                <?php echo $_SESSION['p_dob']; ?>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="row1">
                                <div class="sec">
                                    <h5>Gender:</h5>
                                </div>
                                <div class="text">
                                <?php echo $_SESSION['p_gender']; ?>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="row1">
                                <div class="sec">
                                    <h5>Email:</h5>
                                </div>
                                <div class="text">
                                <?php echo $_SESSION['p_email'];?>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="row1">
                                <div class="sec">
                                    <h5>Phone No:</h5>
                                </div>
                                <div class="text">
                                <?php echo $_SESSION['p_phno']; ?>
                                </div>
                            </div>
            
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>