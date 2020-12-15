<?php
require_once('db_connect.php');
require_once('function.php');
check_user_logged_in();
$id = $_POST['id'];
$pdo = db_connect();
try {
    $sql = "DELETE FROM books WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    print'削除完了';
    print '<a href="list.php">戻る</a>';
    exit;
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>