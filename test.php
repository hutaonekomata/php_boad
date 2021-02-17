<?php
// 読み込みモードでファイルを開く
$fp = fopen("./fgets.txt", "r");

// ファイルを1行ずつ取得する
while ($line = fgets($fp)) {
  echo "$line<br>";
}

// ファイルを閉じる
fclose($fp);
?>