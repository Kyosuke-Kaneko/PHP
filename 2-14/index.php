<?php
$band = ["vocal", "guitar", "bass", "drum", "piano"];
echo count($band);
$func ="count（要素の数を数える）";
function funcName($func) {echo "\t$func<br>";}
funcName($func);
sort($band);
var_dump($band);
$func ="sort（要素の並べ替え）";
funcName($func);
if (in_array("key", $band)) {
  echo "キーボードがいるよ！";
} else {
  echo "キーボードはいないよ！";
}
$func = "in_array（配列に中にある要素が存在しているか）";
funcName($func);
$atstr = implode("@", $band);
var_dump($atstr);
$func ="implode（配列を結合して文字列に変換）";
funcName($func);
$re_band = explode("@", $atstr);
var_dump($re_band);
$func ="explode（文字列を指定の区切りで配列にする）";
funcName($func);
?>
<p>
<ul><li>1. 要件定義(要求仕様書)
要件定義とは、必要な機能や性能、要求される信頼性や保守性、そのほか実現すべき業務モデルや業務フローなどについて、クライアントの要望を詳しくヒアリングし、システムの仕様や範囲を決めること</li>
<li>2. 単体テスト・結合テスト
単体テストは単体機能、結合テストは機能間・他システム間をそれぞれテストの範囲を決めてテストすること</li>
<li>3. テスト仕様書(どのようなもの、項目)
システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめたドキュメント</li>
</ul>
</p>