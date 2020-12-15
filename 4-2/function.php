<?php
function sanitize($before) {
  foreach($before as $key=>$value) {
    $after[$key] = htmlspecialchars($value,ENT_QUOTES,'UTF-8');
  }
  return $after;
}
function check_user_logged_in() {
  // セッション開始
  session_start();
  // セッションにuser_nameの値がなければlogin.phpにリダイレクト
  if (empty($_SESSION["user_name"])) {
      header("Location: login.php");
      exit();
  }
}
function check_date($date) {
  $pattern="#^\d{4}([/-]?)\d{2}\\1\d{2}$#";
    if(preg_match($pattern,$date,$match)){
      date("Y-m-d",strtotime($date));
    }else{
      print "日付ではありません<br>";
    }
}
function find_book_by_id($id) {
  try {
  $pdo = db_connect();
  $sql = "SELECT * FROM books WHERE id = :id;";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam('id', $id);
  $stmt->execute();
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
  if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    return $row;
  } 
}

function redirect_main_unless_parameter($param) {
  if (empty($param)) {
      header("Location: list.php");
      exit;
  }
}
  ?>