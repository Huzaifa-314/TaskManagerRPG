<?php include 'connection.php';



//signup user insert
if(isset($_POST['signup'])){
    extract($_POST,EXTR_PREFIX_ALL,"sn");
    $pass = sha1($sn_pass);
    mysqli_query($db, "INSERT INTO `task_users` (`name`, `username`, `email`, `pass`, `DOB`) VALUES ('$sn_name', '$sn_username', '$sn_email', '$pass', '$sn_dob')");
}
header("Location: ../sign/signin.php");
?>