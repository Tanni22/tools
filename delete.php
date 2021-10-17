<?php
include 'dbcnt.php';
$SL=$_POST['SL'];
$delete_query="DELETE FROM studentrecord WHERE SL='$SL'";
$result=mysqli_query($connection,$delete_query);
if($result)
{
    echo 'data has been delete successfully!';
}
else
{
    echo 'failed';
}
header('Location:registration.php');

?>