<?php

    session_start();

    $conn = mysqli_connect('localhost','root','','my_dental_clinic') or die(mysqli_error($conn));
    $db_select = mysqli_select_db($conn, 'my_dental_clinic') or die(mysqli_error($conn));

   ?>