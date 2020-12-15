<?php
require_once('db_connect.php');
require_once('function.php');
session_start();
if (!empty($_POST["submit"])) {
  if (empty($_POST["name"])) {
      echo "名前が未入力です。<br>";
  }
  if (empty($_POST["password"])) {
      echo "パスワードが未入力です。";
  }
  if (!empty($_POST["name"]) && !empty($_POST["password"])) {
    $post = sanitize($_POST);
    $user_pass=$post['password'];
    $user_name=$post['name'];
    $pdo = db_connect();
    try {
      $sql = "SELECT * FROM users WHERE name = :name";
      $stmt = $pdo->prepare($sql);
      $stmt->bindParam(':name', $user_name);
      $stmt->execute();
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      die();
    }
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      if (password_verify($user_pass, $row['password'])) {
        $_SESSION["user_id"] = $row['id'];
        $_SESSION["user_name"] = $row['name'];
        header("Location: list.php");
        exit;
    } else {
      echo "パスワードに誤りがあります。<br>";
      print '<a href="login.php">戻る</a>';
      }
    } else {
      echo "ユーザー名かパスワードに誤りがあります。<br>";
      echo '<a href="login.php">戻る</a>';
    }
  }
}
?>