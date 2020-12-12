<?php
// db_connect.phpの読み込み
require_once('db_connect.php');
// function.phpの読み込み
require_once('function.php');
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// 提出ボタンが押された場合
if (isset($_POST["post"])) {
    // titleとcontentの入力チェック
    if (empty($_POST['title'])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST['content'])) {
        echo 'コンテンツが未入力です。';
    }

    if (isset($_POST['title']) && isset($_POST['content'])) {
        // 入力したtitleとcontentを格納
        $title = $_POST["title"];
        $content = $_POST["content"];

        // PDOのインスタンスを取得
        $pdo = db_connect();

        try {
            // SQL文の準備
            $sql = "INSERT INTO posts (title, content) VALUES (:title,:content)";
            // プリペアドステートメントの準備
            $stmt = $pdo->prepare($sql);
            // タイトルをバインド
            // 本文をバインド
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':content', $content);
            // 実行
            $stmt->execute();
            // main.phpにリダイレクト
            header("Location: main.php");
            exit();
        } catch (PDOException $e) {
          // エラーメッセージの出力
          echo 'Error: ' . $e->getMessage();
          // 終了
          die();
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
</body>
</html>