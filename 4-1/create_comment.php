<?php
// function.phpの読み込み
require_once('function.php');
require_once('db_connect.php');
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// PDOのインスタンスを取得
$pdo = db_connect();
try {
    // SQL文の準備
    $sql = "SELECT * FROM posts ORDER BY id DESC;";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // 実行
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}
?>
<!DOCTYPE html>
<html>
<head> 
<title>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<h1>コメント</h1> 
<form method="POST" action="create_comment_done.php">
<input type="hidden" name="post_id" value="<?php echo $id = $_GET['id']; ?>">
投稿者名:<br> 
<input type="text" name="name"> <br> 
コメント:<br>
<input type="text" name="content" style="width:200px;height:100px;"><br> 
<input type="submit" name="submit" value="submit">
</form>
<a href="detail_post.php?id=<?php echo $row['id']; ?>">記事詳細に戻る</a>
</body>
</html>