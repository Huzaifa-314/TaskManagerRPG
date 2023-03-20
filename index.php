<?php include 'include/topheader.php' ?>

<!DOCTYPE html>
<html>

<head>
  <title>TASK RPG</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="icon" href="img/dice.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <script src="index.js"></script>
</head>

<body>

  <div id="preloader"></div>

  <?php include 'include/header.php' ?>


  <div class="content">
    <?php 
      $user_id = $_SESSION["ID"];
      ?>
        <h1>
          Welcome <?php echo findval('name','task_users','ID',$user_id);?>
        </h1>
      <?php
    ?>
    
    <h4>
      <center>hope you are able to complete your tasks today</center>
    </h4>
  </div>


  <section>
    <div id="skills" class="skills">
      <div class="title">
        <h2>Task Manager RPG</h2>
      </div>
      <div class="box">
        <div class="card">
          <i class="fas fa-bars"></i>
          <h5>Tasks</h5>
          <a href="toDo.php"><img class="pic" src="img/tasks.png"></a>
          <div class="pra">
            <p></p>
            <p style="text-align: center;">
            </p>
          </div>
        </div>

        <div class="card">
          <i class="far fa-user"></i>
          <h5>Game</h5>
          <a href="game.php"><img class="pic" src="img/game2.png"></a>
          <div class="pra">
            <p></p>
            <p style="text-align: center;">
            </p>
          </div>
        </div>

        <div class="card">
          <i class="far fa-bell"></i>
          <h5>Stats</h5>
          <img class="pic" src="img/stats.png">
          <div class="pra">
            <p></p>
            <p style="text-align: center;">
            </p>
          </div>
        </div>
      </div>


      <div class="box">
        <div class="card">
          <i class="fas fa-bars"></i>
          <h5>Profile</h5>
          <a href="profile.php"><img class="pic" src="img/profile.png"></a>
          <div class="pra">
            <p></p>
            <p style="text-align: center;">
            </p>
          </div>
        </div>

        <div class="card">
          <i class="far fa-user"></i>
          <h5>Shop</h5>
          <a href="shop.php"><img class="pic" src="img/shop.png"></a>
          <div class="pra">
            <p></p>
            <p style="text-align: center;">
            </p>
          </div>
        </div>
      </div>
  </section>

  <section>
    <footer class="back">
    </footer>
  </section>

  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
      loader.style.display = "none";
    })

  </script>


</body>

</html>