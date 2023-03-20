<?php include 'connection.php' ?>
<?php include 'functions.php' ;
session_start();
ob_start();


if(isset($_GET['id'])){
    $ava_id=$_GET['id'];
    $ava_price=findval('price','avatars','ID',$ava_id);
    $user_id=$_SESSION['ID'];
    $user_coin = findval('coin','task_users','ID',$user_id);
    if($ava_price>$user_coin){
        // echo '<script>alert("Not enough Coin")</script>';
        header("Location: ../shop.php?errid=$ava_id&&error=Not enough coin");
    }else{
        mysqli_query($db,"UPDATE `task_users` SET `avatar` = '$ava_id' WHERE `task_users`.`ID` = $user_id;");
        mysqli_query($db,"UPDATE `task_users` SET `coin` = $user_coin-$ava_price WHERE `task_users`.`ID` = $user_id;");

        header("Location: ../shop.php");
    }
}


?>

