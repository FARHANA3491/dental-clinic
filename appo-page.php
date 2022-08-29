<?php include ('connect.php') ?>
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
    align-items: center;
    
}

h2{
    font-weight: 800;
    margin-right: 50px;
}

 table {
    margin-top: 10px;
    width: 100%;
    border:1px solid #000;
}

thead td {
    font-weight: 600;
    color: #333;
}
table tr {
    border-bottom: 1px solid #000;
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
                    <a href="profile.php">
                        <i class="fas fa-th-large"></i>
                        <div class="title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="#">
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
        <div class="tables">

        <div class="add">
            <form action="addPatient.php">
                    <center><input type="submit" value="ADD NEW APPOINMENT"></center>
                   
            
            </form>
            </div>

                
                <div class="heading">
                    <h2>New Appointments<br></h2><br>
                   
               </div>
                <table class="appointments">
                  <thead>
                        <td>appoinmnet id</td>
                        <td>patient id</td>
                        <td>Treatment</td>
                        <td>Doctor name</td>
                      
                        <td>Appointment time</td>
                        <td>Appointment date</td>
                        <td>Operations</td>
                  </thead> 
                        
                    
                    <tbody>
                    <?php
                              
                                $sql= "SELECT * from `appointment` ";
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
                                               /*$sql="SELECT d_name from department where id=$treat";
                                                    $result= mysqli_query($conn, $sql);
                                
                                                      if($result){
                                                         While($row = mysqli_fetch_assoc($result)){ */
                                             ?>
                                
                                            <td><?php  echo $row['treatment'];?></td>
                                
                                
                                
                                             <?php 
                                               /* $sql="SELECT d_name from doctor where doc_id= $d_name ";
                                                 $result= mysqli_query($conn, $sql);
                                
                                                         if($result){
                                                             while($row = mysqli_fetch_assoc($result)){ */
                                              ?>
                                           

                                            <td><?php echo $row['d_name'];   ?> </td>
                                            <td><?php echo $ap_time ?> </td>
                                            <td><?php echo $ap_date?> </td>
                                           <?php  echo '<td>  <button type="button" ><a href="updateA.php ? updateid1= '.$ap_id.' ">RESCHEDULE</a></button>
                                             <button type="button" ><a href="deleteA.php ? deleteid1= '.$ap_id.' ">CANCEL</a></button>
                                       </td>'; ?>
                                
                                    <?php } } ?>
                                     </tr>
                                           
                                    
                       
                    </tbody>
                </table>
            </div>
            
            
        </div>
    </div>
</body>
</html>


