<?php
$rest = 40;
for ($n = 1;$n <= 40; $n++) {
  $dice = mt_rand(1, 6);
  if ($rest < 0) {
    $n--; //1引かないと0以下になったときの次のnとしてこの中の処理が行われる。
    echo 'ゴール'.'<br>';
    echo '合計'.$n.'回で達成しました'.'<br>';
    break;
  }else {
    $rest = $rest - $dice;
    echo $n.'回目 = '.$dice.'<br>';
    echo  '残りは '.$rest.'<br>';
  }
}
?>
<!-- 自分にとってわかりやすいように"残りは"と加えました。 -->
<?php
// 現在時刻を取得
date_default_timezone_set('Asia/Tokyo');
echo '<p>', date('Y年m月d日 H時i分s秒'),' Asia/Tokyo', '</p>';

$time = intval(date('H'));//date内の変数を整数として使う
if (4 <= $time && $time <= 12) { // 4時～12時の時間帯のとき ?>
<p>おはようございます。</p>
<?php } elseif (12 <= $time && $time <= 18) { // 12時〜18時の時間帯のとき ?>
<p>こんにちは。</p>
<?php } else { // それ以外の時間帯のとき ?>
<p>こんばんわ。</p>
<?php } 
?>