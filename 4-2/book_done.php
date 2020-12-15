<?php
require_once('db_connect.php');
require_once('function.php');
session_start();
$post = sanitize($_POST);
$title=$post['title'];
$date=$post['date'];
$stock=$post['stock'];
if (isset($_POST["signUp"])) {
  if(!empty($date) && !empty($title) && !empty($stock)) {
    check_date($date);
  try {
    $pdo = db_connect();
    $sql = "INSERT INTO books (title,date,stock) VALUES(:title,:date,:stock)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':stock', $stock);
    $stmt->execute();
    echo $_SESSION["user_name"]."さんがログイン中<br>";
    echo"登録完了しました";
    echo'<a href="list.php">一覧に戻る</a>';
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
  }
  }else {
    redirect_main_unless_parameter($param);
  }
}
?>
<html>
<title>4章チェックテスト</title>
</html>