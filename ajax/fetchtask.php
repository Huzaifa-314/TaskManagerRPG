<?php
session_start();
include '../include/connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $user_id= $_SESSION['ID'];
    if(isset($_GET['task'])){
        $new_task = $_GET['task'];
        mysqli_query($db,"INSERT INTO `task_todo` (`user_id`, `task`) VALUES ('$user_id', '$new_task')");

    }
    if(isset($_GET['del_id'])){
        $del_task_id = $_GET['del_id'];
        mysqli_query($db,"DELETE FROM `task_todo` WHERE `task_todo`.`ID` = $del_task_id");

    }
    if(isset($_GET['update_id'])){
        $update_task_id = $_GET['update_id'];
        $update_task = $_GET['update_task'];
        mysqli_query($db,"UPDATE `task_todo` SET `task` = '$update_task' WHERE `task_todo`.`ID` = $update_task_id;");

    }
    $all_task_res = mysqli_query($db,"SELECT * FROM task_todo where user_id = '$user_id' ");
    while($row = mysqli_fetch_assoc($all_task_res)){
        extract($row,EXTR_PREFIX_ALL,"tsk");
        ?>
            <div class="task" id="<?php echo $tsk_ID; ?>">
                <div class="content"><input class="text" value="<?php echo $tsk_task; ?>" type="text" readonly="readonly"></div>
                <div class="actions"><button class="edit" onclick="setattr(this)">Edit</button><button class="delete" onclick="taskajax('delete',<?php echo $tsk_ID ?>)">X</button></div>
            </div>
        <?php
    }
    
    
    ?>
</body>
</html>