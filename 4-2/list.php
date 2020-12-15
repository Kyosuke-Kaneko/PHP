<?php
require_once('function.php');
require_once('db_connect.php');
check_user_logged_in();
// PDOのインスタンスを取得
$pdo = db_connect();
try {
    // SQL文の準備
    $sql = "SELECT * FROM books ORDER BY id;";
    // プリペアドステートメントの作成
    $stmt = $pdo->prepare($sql);
    // 実行
    $stmt->execute();
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'Error: ' . $e->getMessage();
    // 終了
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4章チェックテスト</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<p>ようこそ  <?php echo $_SESSION["user_name"]; ?>  さん</p>
<div class="list-top"><h1>在庫一覧画面</h1></div><br/>
  <a href="book_add.php"class="button_list" style=" margin-left:5%;opacity: 0.8;">新規登録</a>
  <a href="logout.php"class="button_list grey">ログアウト</a>
  <table>
    <tr style="background-color:#F4F4F4;">
      <th>タイトル</th>
      <th>発売日</th>
      <th>在庫数</th>
      <th></th>
    </tr>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
      <tr>
      <td><?php echo $row['title']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['stock']; ?></td>
      <td><div class="delete-button"><a href="delete_check.php?id=<?php echo $row["id"];?>"">削除</a></div></td>
      </tr>
    <?php }?>
  </table>
</body>
</html>