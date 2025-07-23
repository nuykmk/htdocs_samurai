<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <!-- 外部要因で不可抗力的に発生する例外に対しての処理 -->
  <!-- *条件分岐でスルーとは別物 -->

  <!-- 例外が発生しないケース -->
  <p>
    <?php
    try {
      // 現在の日付を取得
      $now = new DateTime();
      $my_date = new DateTime('2019-05-01');

      // 指定された日付が未来の場合は例外をスロー
      if ($now < $my_date) {
        throw new Exception('未来の日付は表示できません。');
      }
      // 日付を表示
      echo $my_date->format('Y-m-d') . '<br>';
    } catch (Exception $e) {
      // 例外が発生した場合はメッセージを表示
      echo '例外発生：' . $e->getMessage() . '<br>';
    } finally {
      echo '日付の表示処理が終了しました。';
    }
    ?>
  </p>

  <!-- 例外処理1：throw文によらない例外 -->
  <p>
    <?php
    try {
      // 現在の日付を取得
      $now = new DateTime();
      $my_date = new DateTime('dummy-date');

      // 指定された日付が未来の場合は例外をスロー
      if ($now < $my_date) {
        throw new Exception('未来の日付は表示できません。');
      }
      // 日付を表示
      echo $my_date->format('Y-m-d') . '<br>';
    } catch (Exception $e) {
      // 例外が発生した場合はメッセージを表示
      echo '例外発生：' . $e->getMessage() . '<br>';
    } finally {
      echo '日付の表示処理が終了しました。';
    }
    ?>
  </p>

  <!-- 例外処理2：throw文による例外 -->
  <p>
    <?php
    try {
      // 現在の日付を取得
      $now = new DateTime();
      $my_date = new DateTime('3000-12-31');

      // 指定された日付が未来の場合は例外をスロー
      if ($now < $my_date) {
        throw new Exception('未来の日付は表示できません。');
      }
      // 日付を表示
      echo $my_date->format('Y-m-d') . '<br>';
    } catch (Exception $e) {
      // 例外が発生した場合はメッセージを表示
      echo '例外発生：' . $e->getMessage() . '<br>';
    } finally {
      echo '日付の表示処理が終了しました。';
    }
    ?>
  </p>

  <!-- try {
  // 例外が発生するかもしれないコード
  } catch (例外クラス名 $変数名) {
  // 例外が発生した場合の処理
  } finally {
  // 例外の発生有無にかかわらず、必ず実行する処理
  } -->

</body>

</html>