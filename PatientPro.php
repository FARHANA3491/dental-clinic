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

    <title>Admin-panel</title>
</head>

<body>
<div class="add">
            
         
            <table>
                <tr>
                        <th>Patient id</th>
                        <th>Patient name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        
                        
                </tr>
                <tbody>
                        <?php
                                $sql= "SELECT * from `patient` ";
                                $result= mysqli_query($conn, $sql);

                                if($result){
                                   while($row = mysqli_fetch_assoc($result)){
                                    $d_id= $row['p_id'];
                                    $d_name=$row['p_name'];
                                    $d_qual= $row['p_gender'];
                                    $d_exper= $row['p_dob'];
	                                $d_desig= $row['p_email'];
                                    $d_duty= $row['p_phno'];
                                

                                    echo ' <tr>
                                        <th scope="row">'.$d_id.'</th>
                                        <td>'.$d_name.'</td>
                                        <td>'.$d_qual.'</td>
                                        <td>'.$d_exper.'</td>
                                        <td>'.$d_desig.'</td>
                                        <td>'.$d_duty.'</td>
                                        
                                        
                                       
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