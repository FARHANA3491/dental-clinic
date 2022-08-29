<?php include('connect.php');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
      * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    overflow-x: hidden;
}

.container {
    position: relative;
    width: 100%;
}

.sidebar {
    position: fixed;
    width: 300px;
    height: 100%;
    background: purple;
    overflow-x: hidden;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    z-index: 2;
}

.sidebar ul li {
    width: 100%;
    list-style: none;
}

.sidebar ul li:hover {
    background: #444;
}

.sidebar ul li:first-child {
    line-height: 60px;
    margin-bottom: 20px;
    font-weight: 600;
    border-bottom: 1px solid #fff;
}

.sidebar ul li:first-child:hover {
    background: none;
}

.sidebar ul li a {
    width: 100%;
    text-decoration: none;
    color: #fff;
    height: 60px;
    display: flex;
    align-items: center;
}

.sidebar ul li a i {
    min-width: 60px;
    font-size: 24px;
    text-align: center;
}

.sidebar .title {
    padding: 0 10px;
    font-size: 20px;
}

.main {
    position: absolute;
    width: calc(100% - 300px);
    min-height: 100vh;
    left: 300px;
    background: #f5f5f5;
}

.top-bar {
    position: fixed;
    height: 60px;
    width: calc(100% - 300px);
    background: #fff;
    display: grid;
    grid-template-columns: 10fr 0.4fr 1fr;
    grid-gap: 5px;
    align-items: center;
    color: #444;
    padding: 0 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
    margin-bottom: 8px;
}

.tables {
    width: 10%;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 20px;
    align-items: self-start;
    margin-left: 25%;
    
}




.heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #444;
    
}

h2{
    font-weight: 800;
    margin-right: 50px;
}

table {
    margin-top: 10px;
    width: 100%;
    border-collapse: collapse;
}

thead td tbody tr{
    font-weight: 600;
    color: #333;
    margin-right: 5px;
}

table tr {
    border-bottom: 1px solid rgba(19, 17, 17, 0.1);
}

tbody tr:hover {
    background: purple;
    color: #fff;
}

table tbody tr:last-child {
    border-bottom: none;
}

td {
    padding: 9px 5px;
}

td i {
    padding: 7px;
    color: #fff;
    border-radius: 50px;
}

.cards {
    margin-top: 60px;
    width: 100%;
    padding: 35px 20px;
    display: grid;
  
    grid-gap: 20px;
    width:100%;
}

.cards .card {
    background: purple;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4);
}

.number {
    font-size: 35px;
    font-weight: 500;
    color: #fff;
}

.card-name {
    color: white;
    font-weight: 600;
    font-size: large;
}

.icon-box i {
    font-size: 45px;
    color: #444;
}

.tables {
    width: 100%;
    display: grid;
    grid-template-columns: 2fr 1fr;
    grid-gap: 20px;
    align-items: self-start;
    padding: 0 20px 20px 20px;
}



div .top-bar button {
    margin-top:8px;
    position: absolute;
    left: 83%;
    border-radius: 10px;
    border: solid 1px #ccc;
    height: 60px;
    width: 15%;
    background: purple;
    align-items: center;
    padding: 0 20px;
    box-shadow: 0 4px 8px 0 rgba(255, 255, 255, 0.2);
    z-index: 1;
}
div .top-bar button a{
    text-decoration: none;
    font-size: 20px;
    font-weight: 700;
    color: #fff;
}

table .appo-table h2{
    position: relative;
    visibility: visible;
}


@media(max-width:860px) {
    .cards {
        grid-template-columns: repeat(2, 1fr);
    }
    .tables {
        grid-template-columns: 1fr;
    }
}

@media(max-width:530px) {
    .cards {
        grid-template-columns: 1fr;
    }
    .last-appointments td:nth-child(3) {
        display: none;
    }
}

@media(max-width:420px) {
    .last-appointments,
    .doctor-visiting {
        font-size: 70%;
        padding: 10px;
        min-height: 200px;
    }
    .cards,
    .tables {
        padding: 10px;
    }
    .search input {
        padding: 0 10px;
    }
    .user {
        width: 40px;
        height: 40px;
    }
}

   </style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Admin panel</title>
</head>

<body>
   <div class="container">
         <div class="sidebar">
            <ul>
                <li>
                    <a href="#">
                        <i class="fas fa-clinic-medical"></i>
                        <div class="title"> THE DENTAL CLINIC</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="appo-page.php">
                        <i class="fas fa-stethoscope"></i>
                        <div class="title">Appointments</div>
                    </a>
                </li>
                <li>
                    <a href="doctorlist.php">
                        <i class="fas fa-user-md"></i>
                        <div class="title">Doctors</div>
                    </a>
                </li>
                <li>
                    <a href="admin-page.php">
                    <i class="fas fa-book-user"></i>
                        <div class="title">Admin profile</div>
                    </a>
                </li>
                <li>
                    <a href="addNewPatient.php">
                    <i class="fas fa-bed"></i>
                        <div class="title">New Patient</div>
                    </a>
                </li>
                <li>
                    <a href="PatientPro.php">
                    <i class="fas fa-hospital-user" > </i>
                        <div class="title"> Patient Details </div>
                    </a>
                </li>
                
               
                
            </ul>
        </div>  
        <div class="main">
           
                
            <div class="top-bar">
                <button><a href="logout.php">Logout</a> </button>
            </div>



            <?php
              
                $sql = "SELECT * FROM  appointment";
                $res = mysqli_query($conn, $sql);
                
                if($res == TRUE)
                {
                    $count = mysqli_num_rows($res);
                }

                ?>
            <div class="cards">
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?php echo $count; ?></div>
                        <div class="card-name">Appointments</div>
                    </div>
                   
                    <?php
                
                $sql = "SELECT * FROM  patient";
                $res = mysqli_query($conn, $sql);
                
                if($res == TRUE)
                {
                    $count = mysqli_num_rows($res);
                }

                ?>
                    <div class="card">
                    <div class="card-content">
                        <div class="number"><?php echo $count; ?></div>
                        <div class="card-name">Total registered Patients</div>
                    </div>
                    
                 </div>
                <?php
                
                $sql = "SELECT * FROM  doctor";
                $res = mysqli_query($conn, $sql);
                
                if($res == TRUE)
                {
                    $count = mysqli_num_rows($res);
                }

                ?>
                <div class="card">
                    <div class="card-content">
                        <div class="number"><?php echo $count; ?></div>
                        <div class="card-name">Total working Doctors</div>
                    </div>
                    
                </div>
                
            </div>  
            
         
    <table class="appo-table" >

        <h2>TODAY'S APPOINTMENT </h2>

                <thead>
                    <th>Appointment id</th>
                    <th>Patient id</th>
                    <th>Treatment</th>
                    <th>Doctor name</th>
                  
                    <th> Appointment time</th>
                    <th> Appointmnent date</th>
            
                    
                    
                </thead>
                <tbody>  
<?php 

  $today=date('Y-m-d');
  echo $today;

  $sql= "SELECT * from `appointment` where ap_date = '$today' order by treatment ";
  $result= mysqli_query($conn, $sql);

  if($result){
    while($row = mysqli_fetch_assoc($result)){
        $ap_id=$row['ap_id'];
        $pa_id=$row['pa_id'];
       
        $treat= $row['treatment'];
        $d_name=$row['d_name'];
        $ap_time= $row['ap_time'];
        $ap_date= $row['ap_date'];
    
   ?> 
       
    <tr>
            <td> <?php echo $row['ap_id'] ?> </td>
            <td> <?php echo $pa_id ?> </td>
            <?php 
             /*  $sql="SELECT d_name from department where id=$treat";
                    $result= mysqli_query($conn, $sql);

                      if($result){
                         While($row = mysqli_fetch_assoc($result)){ */
             ?>

            <td><?php  echo $row['treatment'];   ?></td>



             <?php 
               /*/ $sql="SELECT d_name from doctor where doc_id= $d_name ";
                 $result= mysqli_query($conn, $sql);

                         if($result){
                             while($row = mysqli_fetch_assoc($result)){ */
             ?>
       

            <td><?php  echo $row['d_name'];   ?>  </td>
            <td><?php echo $ap_time ?> </td>
            <td><?php echo $ap_date?> </td>
           
           

           <?php } } ?>
     </tr>
           
    
    <?php 
   /* $sql="SELECT d_name from department where id= $treat ";
    $result= mysqli_query($conn, $sql);

     if($result){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['d_name'];
    }}
    
    ?>


    <?php 
    $sql="SELECT d_name from doctor where doc_id= $d_name ";
    $result= mysqli_query($conn, $sql);

     if($result){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['d_name'];
    }}
    */
    ?>



                </tbody></table>   
        </div>
    </div>

</body> 

</html>