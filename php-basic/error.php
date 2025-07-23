<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>


  <p>
    <?php

    // 独自のエラーハンドラ関数
    function myErrorHandler($errno, $errstr, $errfile, $errline)
    {
      // エラーメッセージをログに記録する
      error_log("[$errno] $errstr $errfile($errline)\n", 3, '/Applications/MAMP/logs/error.log');

      // エラーを画面に表示しない
      return TRUE;
    }

    // エラーハンドラ関数を登録
    set_error_handler('myErrorHandler');



    error_reporting(0);
    echo '全エラー無効' . '<br>';

    // すべて無効のため警告が出ない
    echo $dummy1;

    error_reporting(E_ALL);
    echo '全エラー有効';

    // すべて有効のため警告が出る
    echo $dummy2;

    ?>
  </p>
</body>

</html>