<?php
require_once('util.php');

$_POST = [
  'name' => '<textarea>悪意</textarea>',
  'text' => '<script>alert("virus")</script>'
];

$_POST = es($_POST);
?>
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <title></title>
  </head>
  <body>
    <h1></h1>
    <h2>print_rで出力</h2>
    <pre><?php print_r($_POST); ?></pre>
    <h2>echoで出力</h2>
    <?php 
    foreach($_POST as $key => $value) {
      echo  $key, ' ', $value, '<br>', PHP_EOL;
    }
    ?>
    <script>
     'use strict';

    </script>
  </body>
</html>

<?php /* 修正時刻: Sat Feb 12 09:57:49 2022*/
