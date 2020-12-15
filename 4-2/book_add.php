<?php
session_start();
if(isset($_SESSION['user_name']) == false) {
  echo'ログインされていません。';
  echo'<a href="login.php">ログイン画面へ</a>';
  exit();
} else {
  echo $_SESSION['user_name'];
  echo 'さんがログイン中';
  echo '<br>';
}

?>
<!DOCTYPE html>
<html>
<head>
<title>4章チェックテスト</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<link rel="stylesheet" href="style.css">
<body>
    <h1>本  登録画面</h1>
    <div class="form-box">
    <form method="POST" action="book_check.php">
        <input type="text" name="title" class="book-add-form"placeholder="タイトル" >
        <br>
        <input type="text" name="date" class="book-add-form" placeholder="発売日">
        <br>
        <p>在庫数</p>
        <input type="number" name="stock" style="margin-bottom:10px" placeholder="選択してください">
        <br>
        <input type="submit" value="登録" class="book-add-submit"name="signUp">
    </form>
</div>
</body>
</html>