<?php 
require_once('getData.php');
require_once('pdo.php');
$getData = new getData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>3章チェックテスト</title>
</head>
<body>
 <header>
  <div class="header-logo"><img src="img/1599315827_logo.png"></div>
  <div class="heder-right-box">
    <div class="user-name">
      <?php echo $getData->getUserData() ?>
    </div>
    <div class="login-date"></div>
  </div>
 </header>
 <div class="main">
   <?php echo $getData->getUserData() ?>
  </div>
 <footer>Y & I Group.inc</footer>
  
</body>
</html>