<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4章チェックテスト</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>ログイン画面</h1>
  <br />
  <div class="form-box">
    <a href="user_add.php" class="add-user">新規ユーザー登録</a>
    <form method="post" action="login_done.php">
    <input type="text" name="name" placeholder="ユーザー名"><br /> 
    <input type="password" name="password" placeholder="パスワード"><br /> 
    <br />
    <input type="submit" name="submit" value="ログイン">
    </form>
    </div>
</body>
</html>