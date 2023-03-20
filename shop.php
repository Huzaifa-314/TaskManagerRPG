<?php include 'include/topheader.php' ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
  <link rel="icon" href="img/dice.png" type="image/x-icon">
  <link href="shop.css" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <script src="shop.js"></script>
</head>

<body>

  <!-- <div id="preloader"></div> -->

  <?php include 'include/header.php' ?>

  <?php 
    $user_id = $_SESSION["ID"];
    $user_res=mysqli_query($db,"select * from task_users where ID='$user_id'");
    $user = mysqli_fetch_assoc($user_res);
    extract($user,EXTR_PREFIX_ALL,"tuser");
  ?>

  <h1>Shop</h1>
  <h3 style="text-align:right;margin:15px;" id="coins">Coins: <span id="coin-count"><?php echo $tuser_coin?></span></h3>

  <div class="shop">


    <?php 
      $ava_res = mysqli_query($db,"select * from avatars order by price");
      while($ava_arr = mysqli_fetch_assoc($ava_res)){
        extract($ava_arr,EXTR_PREFIX_ALL,"av");
        ?>
          <div class="shop-item">
            <h2><?php echo $av_name;?></h2>
            <img src="avatars/<?php echo $av_image;?>">
            <p class="price"><?php echo $av_price;?> coins</p>
            <?php 
              if(isset($_GET['errid'])){
                if($av_ID==$_GET['errid']){
                  ?>
                    <p>Not enough Coin</p>
                  <?php
                }
              } 
            ?>
            <button class="buy-button"><a style="text-decoration: none;" href="include/buyavatar.php?id=<?php echo $av_ID ?>">Buy</a></button>
          </div>
        <?php
      }
    ?>
    
    
  </div>

  <script>
    var loader = document.getElementById("preloader");
    window.addEventListener("load", function () {
      loader.style.display = "none";
    })

  </script>

</body>

</html>