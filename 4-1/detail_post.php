<?php
// db_connect.phpの読み込み
require_once('db_connect.php');
// function.phpの読み込み
require_once('function.php');
// ログインしていなければ、login.phpにリダイレクト
check_user_logged_in();
// URLの?以降で渡されるIDをキャッチ
$id = $_GET['id'];
// もし、$idが空であったらmain.phpにリダイレクト
// 不正なアクセス対策
redirect_main_unless_parameter($id);
$row = find_post_by_id($id);
$id = $row['id'];
$title = $row['title'];
$content = $row['content'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>記事詳細</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <table>
            <tr>
                <td>ID</td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>タイトル</td>
                <td><?php echo $title; ?></td>
            </tr>
            <tr>
                <td>本文</td>
                <td><?php echo $content; ?></td>
            </tr>
        </table>
        <a href="create_comment.php?id=<?php echo $id ?>">この記事にコメントする</a><br />
        <a href="main.php">メインページに戻る</a>
        <?php
        $id = $_GET['id'];
        $pdo = db_connect();
        try {
            // SQL文の準備
            $sql = "SELECT * FROM comments WHERE post_id = :post_id";
            // プリペアドステートメントの作成
            $stmt = $pdo->prepare($sql);
            // idのバインド
            $stmt->bindParam(':post_id', $post_id = $id);
            $stmt->execute();
        } catch (PDOException $e) {
            // エラーメッセージの出力
            echo 'Error: ' . $e->getMessage();
            // 終了
            die();
        }
        // 結果が1行取得できたら
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<hr>';
            echo $row['name'];
            echo '<br />';
            echo $row['content'];
        }
        ?>
    </body>
</html>