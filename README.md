# php-htmlspecialchars
phpのhtmlspecialchars関数を使うタイミング

## 概要

『詳細! PHP7 + MySQL 入門ノート』という本がある。
その中での htmlspecialchars関数の使い方に関して疑問がある。

著者は、以下のようなコードを読者にすすめている。

***
``` php
function es($data, $charset='UTF-8'){
  if (is_array($data)){
    return array_map(__METHOD__, $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}

$_POST = es($_POST);
```
***

これはさすがにまずいのではないか？

『詳細! PHP7 + MySQL 入門ノート』大重美幸 \ ソーテック 2019年5月31日 初版 第4刷

<!-- 修正時刻: Tue Feb 15 07:13:28 2022 -->
