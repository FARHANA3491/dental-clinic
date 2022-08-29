<?php include('connect.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-doc-page.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Admin panel</title>
</head>

<body>
  <!-- <div class="container">
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
                    <a href="appo-page.php">
                        <i class="fas fa-stethoscope"></i>
                        <div class="title">Appointments</div>
                    </a>
                </li>
                <li>
                    <a href="#">
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
        </div> -->

        <div class="add">
            <form action="addDoc.php">
                    <center><input type="submit" value="ADD NEW DOCTOR"></center>
            
            </form>
            </div>

            <table>
                <tr>
                        <th>Docter id</th>
                        <th>Docter name</th>
                        <th>Qualification</th>
                        <th>Experience</th>
                        <th>Designation</th>
                        <th>Duties</th>
                        
                        <th>Languages known</th>
                        <th>Starttime </th>
                        <th>Endtime </th>
                        <th>Doc phno</th>
                       
                        <th>Change</th>
                </tr>
                <tbody>
                        <?php
                                $sql= "SELECT * from `doctor` ";
                                $result= mysqli_query($conn, $sql);

                                if($result){
                                   while($row = mysqli_fetch_assoc($result)){
                                    $d_id= $row['doc_id'];
                                    $d_name=$row['d_name'];
                                    $d_qual= $row['d_qualification'];
                                    $d_exper= $row['d_experience'];
	                                $d_desig= $row['d_designation'];
                                    $d_duty= $row['d_duty'];
                                    $d_lang= $row['d_language'];
                                    $d_stime= $row['d_starttime'];
                                    $d_etime= $row['d_endtime'];
	                                $d_phn= $row['d_phno'];
                                   

                                    echo ' <tr>
                                        <th scope="row">'.$d_id.'</th>
                                        <td>'.$d_name.'</td>
                                        <td>'.$d_qual.'</td>
                                        <td>'.$d_exper.'</td>
                                        <td>'.$d_desig.'</td>
                                        <td>'.$d_duty.'</td>
                                        <td>'.$d_lang.'</td>
                                        <td>'.$d_stime.'</td>
                                        <td>'.$d_etime.'</td>
                                        <td>'.$d_phn.'</td>
                                        
                                        <td>  <button type="button" ><a href="update.php ? updateid= '.$d_id.' ">UPDATE</a></button>
                                             <button type="button" ><a href="delete.php ? deleteid= '.$d_id.' ">DELETE</a></button>
                                       </td
                                    </tr>';
                                    
                                    
                                }
                                }
                        ?>
                        
                </tbody>
            </table>
            <form action="profile.php">
               <center> <input type="submit" value="GO TO DASHBOARD" class="dash"></center>
            </form>
                
        </div>
</body>
</html>