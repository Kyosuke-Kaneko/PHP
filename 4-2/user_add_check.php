<?php
require_once('db_connect.php');
require_once('function.php');
$post = sanitize($_POST);
if(!empty($_POST["submit"])) {
  if (empty($_POST["name"])) {
    echo "名前が未入力です。<br>";
  } else {
    echo '新規ユーザー名<br>';
    echo $user_name=$post['name'];
  }
  if (empty($_POST["password"])) {
    echo "パスワードが未入力です。";
  }
  if (empty($_POST["name"]) || empty($_POST["password"])) {
    print '<form>';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '</form>';
  } else {
    $user_pass=$post['password'];
    echo'<form method="post"action="user_add_done.php">';
    echo'<input type="hidden" name="name" value="'.$user_name.'">';
    echo'<input type="hidden" name="password" value="'.$user_pass.'">';
    echo'このユーザーを追加しますか？';
    echo'<br>';
    echo'<input type="button" onclick="history.back()" value="戻る">';
    echo'<input type="submit" name="submit" value="OK">';
    echo'</form>';
  }
}
?>
