<?php 
require_once('getData.php');
require_once('pdo.php');
$getData = new getData();
$userData = $getData->getUserData();
$postData = $getData->getPostData();
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
    <div class="user-name-box">
      <div class="user-name">
        ようこそ <?php echo $userData['last_name'].$userData['first_name'] ?> さん
      </div>
    </div>
    <div class="login-date-box">
      <div class="login-date">
        最終ログイン日: <?php echo $userData['last_login'] ?>
      </div>
    </div>
  </div>
 </header>
 <div class="main">
   <div class="article-box">
     <table>
       <tr>
        <th>ID</th>
        <th>タイトル</th>
        <th>カテゴリー</th>
        <th>本文</th>
        <th>投稿日</th>
       </tr>
       <tr>
         <?php foreach( $postData as $post):?> 
           <td><?php echo $post['id']; ?></td>
           <td><?php echo $post['title']; ?></td>
           <td><?php 
           switch($post['category_no']){
            case 1:
              $post['category_no'] = "食事";
            break;
            case 2:
              $post['category_no'] = "旅行";
            break;
            default:
              $post['category_no'] = "その他";
            break;
          };
          echo $post['category_no']; ?></td>
           <td><?php echo $post['comment']; ?></td>
           <td><?php echo $post['created']; ?></td>
       </tr>
          <?php endforeach?>
         
     </table>
   
   </div>
  </div>
 <footer>Y & I Group.inc</footer>
  
</body>
</html>