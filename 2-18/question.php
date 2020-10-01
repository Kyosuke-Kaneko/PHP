<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$port_num = [80, 22, 20, 21];
$languages = ["PHP", "Python", "JAVA", "HTML"];
$command = ["join", "select", "insert", "update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answer1 = $port_num[0];
$answer2 = $languages[3];
$answer3 = $command[1];
?>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
  <h2>①ネットワークのポート番号は何番？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php foreach ($port_num as $value) { ?>
    <input type="radio" name="choice1" value=<?php echo $value?>>
    <?php echo $value;} ?>
  <h2>②Webページを作成するための言語は？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php foreach ($languages as $value) { ?>
    <input type="radio" name="choice2" value=<?php echo $value?>>
    <?php echo $value;} ?>

  <h2>③MySQLで情報を取得するためのコマンドは？</h2>
  <!--③ 問題のradioボタンを「foreach」を使って作成する-->
  <?php foreach ($command as $value) { ?>
    <input type="radio" name="choice3" value=<?php echo $value?>>
    <?php echo $value;} ?><br>

  <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
  <input type="hidden" name="answer1" value=<?php echo $answer1 ?>>
  <input type="hidden" name="answer2" value=<?php echo $answer2 ?>>
  <input type="hidden" name="answer3" value=<?php echo $answer3 ?>>
  <input type="hidden" name="my_name" value = <?php echo $my_name ?>>
  <input type="submit" value="回答する" />
</form>
<?php echo $answer2; ?>

<style>
  body {
    margin-top:100px;
    background-color: grey;
    text-align: center;
    color:white;
  }
  