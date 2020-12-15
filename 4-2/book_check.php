<?php
require_once('db_connect.php');
require_once('function.php');
session_start();
$post = sanitize($_POST);
$date=$post['date'];
$title=$post['title'];
$stock=$post['stock'];
if (isset($_POST["signUp"])) {
  if(empty($date)) {
    echo '発売日が未入力です<br>';
  }
  if(empty($title)) {
    echo 'タイトルがありません<br>';
  } 
  if(empty($stock)) {
    echo '在庫数がありません<br>';
  } 
  echo '登録は無効になります';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>4章チェックテスト</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>本  登録確認画面</h1>
    <p><?php echo $_SESSION["user_name"]; ?>さんがログイン中</p>
    <div class="form-box">
    <form method="POST" action="book_done.php">
        <p>こちらの内容で間違いないですか？</p>
        <input type="hidden" name="title" value="<?php echo $title?>">
        タイトル:<?php echo $title?>
        <br>
        <input type="hidden" name="date" value="<?php echo $date?>">
        発売日:<?php echo $date?>
        <br>
        <input type="hidden" name="stock" value="<?php echo $stock?>">
        在庫数:<?php echo $stock?>
        <br>
        <input type="submit" value="登録" name="signUp">
        <input type="button" onclick="history.back()" value="戻る">
    </form>
</div>
</body>
</html>