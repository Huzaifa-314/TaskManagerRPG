<?php include 'include/topheader.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TO DO</title>
  <link rel="icon" href="img/dice.png" type="image/x-icon">
  <link href="toDo.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
</head>

<body onload="taskajax()">

  <div id="preloader"></div>

  <?php include 'include/header.php' ?>

  <header class="content">
    <h1>
      <center>To Do List</center>
    </h1>
    <form id="new-task-form">
      <input type="text" name="new-task-input" id="new-task-input" placeholder="type in what you have planned for today..." />
      <input onclick="taskajax('insert')" type="button" id="new-task-submit" value="+" />
    </form>
    <?php 
      if(isset($_GET['new-task-input'])){
        $user_id= $_SESSION['ID'];
        $new_task=$_GET['new-task-input'];
        mysqli_query($db,"INSERT INTO `task_todo` (`user_id`, `task`) VALUES ('$user_id', '$new_task')");
        header("Location: todo.php");
      }
    ?>
    <main>
      <section class="task-list">
        <h2>
          <center>Tasks</center>
        </h2>
        <div id="tasks">

          <!-- <div class="task">
            <div class="content"><input class="text" value="hello world" type="text" readonly="readonly"></div>
            <div class="actions"><button class="edit">Edit</button><button class="delete">X</button></div>
          </div> -->
          

        </div>
      </section>
    </main>
  </header>

  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function() {
      loader.style.display = "none";
    })
    // console.log("hello world");
    //   const list_el = document.querySelector("#tasks");
    // console.log(list_el);
  </script>
  <script src="toDo.js"></script>

</body>

</html>