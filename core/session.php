<?php 
include '../include/connection.php';
// include '../include/function.php';
session_start();

if(isset($_POST['login'])){
	$email = $_POST['email'];
	$pass = sha1($_POST['pass']);


	$user = mysqli_query($db,"SELECT email FROM task_users WHERE email = '$email' AND status='1'");
    $row = mysqli_fetch_assoc($user);
	if($row==null){
		header('location: ../sign/signin.php?error=Invalid user information');
	}else{
		$db_pass = mysqli_fetch_assoc(mysqli_query($db,"SELECT pass FROM task_users WHERE email = '$email'"))['pass'];
		if($db_pass == $pass){
			$row = mysqli_fetch_assoc(mysqli_query($db,"SELECT ID,name,email,userrole FROM task_users WHERE email = '$email'"));
			$_SESSION['ID'] 		= $row['ID'];
			$_SESSION['email'] 		= $row['email'];
			$_SESSION['name'] 		= $row['name'];
			$_SESSION['userrole']   = $row['userrole'];

			if($_SESSION['userrole'] == 1){
				header('location: ../index.php?role=admin');
			}
			else {
				header("location: ../index.php");
			}
		}else{
			header('location: ../sign/signin.php?error=Incorrect Password');
		}
	}
}