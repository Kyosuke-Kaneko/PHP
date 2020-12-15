<?php
require_once('function.php');
require_once('db_connect.php');
check_user_logged_in();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4章チェックテスト</title>
</head>
<body>
<p><?php echo $_SESSION["user_name"]; ?>さんがログイン中</p>
<?php 
    $id = $_GET['id'];
    $row = find_book_by_id($id);
    echo 'こちらを削除してもよろしいですか？';
?>
<form method="post" action="delete.php">
<input type="hidden" name="id" value="<?php echo $row[id] ?>">
<input type="hidden" name="title" value="<?php echo $row[title] ?>">
<input type="hidden" name="date" value="<?php $row[date]?>">
<input type="hidden" name="stock" value="<?php $row[stock]?>">
タイトル:<?php echo $row[title];?><br>
発売日:<?php echo $row[date];?><br>
在庫数:<?php echo $row[stock];?><br>
<input type="submit" value="削除">
</form>
