<?php include 'include/topheader.php' ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PROFILE</title>
  <link rel="icon" href="img/dice.png" type="image/x-icon">
  <link href="profile.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
</head>

<body>
  <script src="script.js"></script>

  <div id="preloader"></div>

  <?php include 'include/header.php' ?>

  <?php 
    $user_id = $_SESSION["ID"];
    $user_res=mysqli_query($db,"select * from task_users where ID='$user_id'");
    $user = mysqli_fetch_assoc($user_res);
    extract($user,EXTR_PREFIX_ALL,"tuser");
    ?>
        <div id="ProfilePage">
          <img id="coins" src="img/coin.png"><span id="coin-count"><?php echo $tuser_coin;?></span>
          <div id="LeftCol">
            <div id="Photo">
              <img src="avatars/<?php echo findval('image','avatars','ID',$tuser_avatar);?>" />
            </div>
            <div id="ProfileOptions">
              <placeholder><?php echo findval('name','avatars','ID',$tuser_avatar);?></placeholder>
            </div>
          </div>

          <br></br>

          <div id="Info">
            <p>
              <strong>Name:</strong>
              <placeholder><?php echo $tuser_name ?></placeholder>
            </p>
            <p>
              <strong>Username:</strong>
              <placeholder><?php echo $tuser_username; ?></placeholder>
            </p>
            <p>
              <strong>DOB:</strong>
              <input type="date" id="dob" name="dob" value="<?php echo $tuser_DOB ?>">
            </p>
            <!-- <p>
              <strong>Gender</strong>
              <placeholder>gender</placeholder>
            </p> -->
            <p>
              <strong>Email:</strong>
              <placeholder><?php echo $tuser_email; ?></placeholder>
            </p>
          </div>

          <div style="clear:both"></div>
        </div>
    <?php
  ?>



  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
      loader.style.display = "none";
    })

  </script>

</body>

</html>