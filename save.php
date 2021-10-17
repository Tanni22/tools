<?php
session_start();
//echo '<pre>';
//print_r($_GET);

//var_dump();
getData();//Function is being called

function getData()
{
    $studentName = $_POST['studentName'];
    $studentId = $_POST['studentId'];
    $Gender = $_POST['Gender'];
    $Department = $_POST['Department'];
    //$gender=$_POST['gender'];

    include "dbcnt.php";


    $insert_query = "INSERT INTO studentrecord(studentName,studentId,Gender,Department) values('$studentName',' $studentId','$Gender','$Department')";
    $insert_query = mysqli_query($connection, $insert_query);

    if ($insert_query) {
        echo 'Data has been saved successfully';
    } else {
        echo 'Data has not been saved successfully';
  
  }
  header("Location:registration.php");
  
}

?>
    


