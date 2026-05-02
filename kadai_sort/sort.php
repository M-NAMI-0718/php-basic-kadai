<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>

<p>
<?php

// 独自関数
function sort_2way($array, $order) {

  if ($order === TRUE) {
    echo "昇順にソートします。<br>";
    sort($array); // 昇順
  } else {
    echo "降順にソートします。<br>";
    rsort($array); // 降順
  }

  // 配列を1行ずつ出力
  foreach ($array as $value) {
    echo $value . "<br>";
  }

  echo "<br>"; // 見やすく改行
}

// 配列
$nums = [15, 4, 18, 23, 10];

// 呼び出し（昇順 → 降順）
sort_2way($nums, TRUE);
sort_2way($nums, FALSE);

?>
</p>

</body>
</html>