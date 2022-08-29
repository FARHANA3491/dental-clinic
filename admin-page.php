<?php include('connect.php') ?>

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



table .admin{
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    padding:10px;
    width:70%;
    
}

table thead tr {
    background-color: purple;
    color: #ffffff;
    text-align: left;
    padding:10px;
}

table .admin tr th{
    padding: 12px 15px;
    padding:10px;
    

}
table
{
  width:70%;
  margin-left: auto;
    margin-right: auto;
 
}
td
{
  height:40px;

}
tr{
    height:40px;
}

.admin tbody tr {
    border-bottom: 1px solid #dddddd;
}
.admin tbody tr:hover{
    background: #f3f3f3;
}

.admin tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.admin tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.admin tbody tr.active-row {
    font-weight: bold;
    color: #009879;
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Admin panel</title>
</head>

<body>
<div class="container">
   <!-- <div class="sidebar">
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
                    <a href="appo-page.php">
                        <i class="fas fa-stethoscope"></i>
                        <div class="title">Appointments</div>
                    </a>
                </li>
                <li>
                    <a href="doc.php">
                        <i class="fas fa-user-md"></i>
                        <div class="title">Doctors</div>
                    </a>
                </li>
                <li>
                    <a href="admin-page.php">
                    <i class="fa-solid fa-user-nurse"></i>
                        <div class="title">Admin profile</div>
                    </a>
                </li>
                
               
                
            </ul>
</div >
-->

        <div class="add">
            <form action="addAdmin.php">
                    <center><input type="submit" value="ADD NEW ADMIN"></center>
            
            </form>
            </div>

            <table class="admin" align="center">
          <thead>
                
                        <th>Admin id</th>
                        <th>Admin name</th>
                        <th>Admin password</th>
                        <th>Operation</th>
                        
                </thead>
                <tbody> 
              <?php
                                $sql= "SELECT * from `admin` ";
                                $result= mysqli_query($conn, $sql);

                                if($result){
                                   while($row = mysqli_fetch_assoc($result)){
                                    $a_id= $row['a_id'];
                                    $a_name=$row['a_username'];
                                    $a_pass= $row['a_password'];
                                    
                                    echo ' <tr>
                                        <th scope="row">'.$a_id.'</th>
                                        <td>'.$a_name.'</td>
                                        <td>'.$a_pass.'</td>
                                        <td>  <button type="button" ><a href="updateAdmin.php ? updateid= '.$a_id.' ">UPDATE</a></button>
                                             <button type="button" ><a href="deleteAdmin.php ? deleteid= '.$a_id.' ">DELETE</a></button>
                                       </td
                               </tr>';
                         
                                }
                                }
                        ?> 
                        </tbody>
            </table>
            <form action="profile.php">
               <center> <input type="submit" value="GO TO DASHBOARD"></center>
            </form>
             

</body>
</html>