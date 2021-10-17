<?php
    include("connect.php");

    $sname = $_POST['sn'];
    $department= $_POST['dept'];
    $gender = $_POST['gender'];
   
   $insert= mysqli_query($connect,"INSERT INTO students(studentname,department,Gender) VALUES('$sname','$department','$gender')");


  ?>