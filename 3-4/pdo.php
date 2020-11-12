<?php
// DB名
define('DB_DATABASE', 'checktest4');
// MySQLのユーザー名
define('DB_USERNAME', 'root');
// MySQLのログインパスワード
define('DB_PASSWORD', 'root');
// DSN
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

/**
 * DBの接続設定をしたPDOインスタンスを返却する
 * @return object
 */
function db_connect() {
    try {
        // PDOインスタンスの作成
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        // エラー処理方法の設定
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }
}

// 実行したいSQL文を準備
$sql = "INSERT INTO users (name, password) VALUES ('Taro Yamada', 'taro')";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}