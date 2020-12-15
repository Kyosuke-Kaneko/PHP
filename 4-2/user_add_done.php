<?php
require_once('db_connect.php');
require_once('function.php');
$post = sanitize($_POST);
$user_name = $post["name"];
$user_pass = $post["password"];
if(isset($_POST["submit"])) {
  if(!empty($user_name) && !empty($user_pass)) {
    try{
      $pdo = db_connect();
      $sql = "INSERT INTO users (name, password) VALUES (:name,:password)";
      $stmt = $pdo->prepare($sql);

      $stmt->bindParam(':name', $user_name);
      $stmt->bindParam(':password', $user_pass);
      $password_hash = password_hash($user_pass, PASSWORD_DEFAULT);

      $stmt->bindValue(':password', $password_hash);
      $stmt->execute();
      print "登録完了です<br>";
      header("Location: list.php");
    } catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      die();
    }
  }
}
?>