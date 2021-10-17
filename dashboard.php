<h2 style ="...">Dashboard!!!<br>Welcome to you</h2>
<?php
session_start();
?>
User name:(<?php echo $_SESSION['studentName']?>)<br>
<a href="signout.php">
    Sign Out

</a>