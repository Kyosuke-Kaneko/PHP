<?php
// db_connect.phpの読み込みFILL_IN
require_once('db_connect.php');
// POSTで送られていれば処理実行
if(isset($_POST["signUp"])) {
// nameとpassword両方送られてきたら処理実行
    if(!empty($_POST["name"]) && !empty($_POST["password"])){
        try {
         // PDOのインスタンスを取得FILL_IN
        $pdo = db_connect();
        // SQL文の準備 FILL_IN 
        $sql = "INSERT INTO users (name, password) VALUES (:name,:password)";
        // パスワードをハッシュ化
        $username = $_POST["name"];
        $password = $_POST["password"];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        // プリペアドステートメントの作成 FILL_IN 
        $stmt = $pdo->prepare($sql);
        // 値をセット FILL_IN
        $stmt->bindParam(':name', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindValue(':password', $password_hash);
        // 実行 FILL_IN
        $stmt->execute();
        //登録完了メッセージ出力
        print "登録完了です";
        }catch (PDOException $e) {
        // エラーメッセージの出力 FILL_IN 
        echo 'Error: ' . $e->getMessage();
        // 終了 FILL_IN
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
    <h1>新規登録</h1>
    <form method="POST" action="login.php">
        user:<br>
        <input type="text" name="name" id="name" value="<?php print $username ?>">
        <br>
        password:<br>
        <input type="password" name="password" id="password" value="<?php print $password ?>"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>