<?php include 'include/topheader.php';
$user_id = $_SESSION['ID'];
$user_avatar = findval('avatar','task_users','ID',$user_id);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="icon" href="img/dice.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <title>GAME</title>
  <link rel="stylesheet" type="text/css" href="game.css">
</head>
<script src="game.js"></script>

<body>

  <div id="preloader"></div>

  <?php include 'include/header.php' ?>

  <h1>Fight!</h1>

  <div id="game">
    <div id="health-bars">
      <div id="player-health-bar">
        <span id="player-health"></span>
        <p>Avatar Name</p>
      </div>
      <div id="enemy-health-bar">
        <span id="enemy-health"></span>
        <p>Megatron</p>
      </div>
    </div>

    <div class="avatars">
      <img src="avatars/<?php echo findval('image','avatars','ID',$user_avatar);?>">
      <img src="avatars/megatron.png">
    </div>
    
    <div id="buttons">
      <button id="defend-button">Defend</button>
      <button id="attack-button">Attack</button>
    </div>
  </div>

  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
      loader.style.display = "none";
    })

  </script>


</body>

</html>