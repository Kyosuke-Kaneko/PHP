<p>数学に関する関数<br>
<?php 
$x = 7.8;
echo ceil($x);
echo "\tceil（切り上げ）<br>";
echo floor($x);
echo "\tfloor（切り捨て）<br>";
echo round($x);
echo "\tround（四捨五入）<br>";
echo pi();
echo "\tpi（円周率）<br>";
echo mt_rand(1, 100);
echo "\tmt_rand（乱数）<br>";
?></p>
<p>文字列に関する関数<br>
<?php
$name = "kanekokyosuke";
$age = 21;
echo strlen($name);
echo "\tstrlen（文字列の長さ）<br>";
echo strpos($name, "e");
echo "\tstrpos（検索）<br>";
echo substr($name, -8, 2);
echo "\tsubstr（文字列の切り取り）<br>";
echo str_replace("neko", "NEKO", $name);
echo "\tstr_replace（置換）<br>";
printf("%sの年齢は現在%dです", $name, $age);
echo "\tprintf（フォーマット化した文字列を出力）<br>";
$introduction = sprintf("現在%d歳の%sです", $age, $name);
echo $introduction;
echo "\tsprintf（変数に代入できるprintf）<br>";
?></p>
<p>
<ul><li>1.PostgreSQL・Oracle SQL
拡張性とSQL準拠を強調するフリーでオープンソースのリレーショナルデータベース管理システムがPostgreSQL。米国オラクル (Oracle) が開発・販売している世界初の商用RDBMSのこと
</li>
<li>2.TortoiseGit・TortoiseSVN
TortoiseGitはGitをより扱いやすくするために開発されたWindows用ソフトウェアで無料で利用できる。TortoiseSVN は、 Apache™ Subversion® バージョン管理システムの無料でオープンソースのWindowsで利用できるクライアント
</li>
<li>3. 外部設計・内部設計
要件定義を基に操作画面や操作方法、データ出力など、ユーザーから見えるインターフェース部分の仕様を決定したり、セキュリティや運用規定、システム開発のスケジュールや費用などを設計したりと、基本的にユーザーに向けた仕様を設計するのが外部設計。外部設計を基に、システム内部の動作や機能、物理データなど、ユーザーから見えにくい詳細な部分の設計を行うこと
</li>
</ul>
</p>


