<form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  ご希望商品 : <input type ="ratio" name="choices"/>
  <br>
  個数：<select name="number">
      <?php for ($i=1;$i<=10;$i++){ ?>
        <option value="<?php echo $i; ?>">
          <?php echo $i; ?>
        </option>
      <?php } ?>
    </select>
  <br>
  <input type="submit" value="申込" />
</form>
<p>
<ul><li>1. モジュール
機器やシステムの一部を構成するひとまとまりの機能を持った部品で、容易に追加や交換ができるようなもののことを指す。</li>
<li>2. バージョン管理システム
ファイルの変更履歴の保存・管理を行うソフトウェアで理するファイルの内容をいつ誰がどのように変更したのか時系列で記録に残し、過去のある時点の内容を参照したり、現在の版を破棄してその時点の状態に戻したり、別の時点の版との違い（差分）を調べたりすることができる</li>
<li>3. サブクエリ
データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文のことでサブクエリの結果を反映した実行結果を条件や対象を記述する際の値として利用する</li>
</ul>
</p>