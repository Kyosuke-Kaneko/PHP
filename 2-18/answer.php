<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$answer1 = $_POST['answer1'];
$answer2 = $_POST['answer2'];
$answer3 = $_POST['answer3'];
$choice1 = $_POST['choice1'];
$choice2 = $_POST['choice2'];
$choice3 = $_POST['choice3'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judgement($correctAnswer,$yourChoice) {
  if($correctAnswer === $yourChoice) {
    echo "正解！";
  } else {
    echo "残念・・・";
  }
}
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($answer1, $choice1) ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($answer2, $choice2) ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgement($answer3, $choice3) ?>
<style>
  body {
    margin-top:100px;
    background-color: grey;
    text-align: center;
    color:white;
  }
</style>