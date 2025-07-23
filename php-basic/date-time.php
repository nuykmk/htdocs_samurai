<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <!-- date()関数 -->
  <!-- date(日時のフォーマット, UNIXタイムスタンプ); -->
  <p>
    <?php
    // 使用するデフォルトのタイムゾーンを指定する
    date_default_timezone_set('Asia/Tokyo');

    // 現在の日時を指定したフォーマットで出力する
    echo date('Y年n月j日H時i分s秒') . '<br>';


    // <!-- UNIXタイムスタンプ -->
    // <!-- strtotime(日時, 基準となるUNIXタイムスタンプ); -->
    // 現在を基準として1週間後の日時のUNIXタイムスタンプを出力する
    echo strtotime('+1 week') . '<br>';

    // date()関数とstrtotime()関数を組み合わせて使ってみよう
    // 現在を基準として3年前の日時を指定したフォーマットで出力する
    echo date('Y/m/d H:i:s', strtotime('-3 year'));

    ?>
  </p>

  <!-- DateTimeクラス -->
  <?php
  // 指定した日時のインスタンスを作成する
  $date_time = new DateTime('2015-03-19 12:15:30');

  // インスタンス$date_timeの日時を特定のフォーマットで出力する
  echo $date_time->format('Y年n月j日H時i分s秒') . '<br>';

  // 2つの日時の差を比較

  // 現在の日時のインスタンスを作成する
  $now = new DateTime();

  // diff()メソッドで2つのインスタンスの日時の差を取得し、変数$intervalに代入する（interval＝間隔）
  $interval = $now->diff($date_time);

  // 取得した日時の差を特定のフォーマットで出力する
  echo $interval->format('%y年と%m月と%d日の差があります。総日数は%a日です。') . '<br>';


  // 日時を加算・減算
  // 加算・減算してもインスタンス$nowの日時が変わらないように、DateTimeImmutableクラスを使って作成する
  $now = new DateTimeImmutable();

  // 現在の日時に1年を加算し、変数$addに代入する
  $add = $now->modify('+1 year');

  // 現在の日時から3日を減算し、変数$subに代入する（sub＝「減算」を意味するsubtractionの略）
  $sub = $now->modify('-3 day');

  // 加算・減算した日時を特定のフォーマットで出力する
  echo $add->format('現在から1年後はY年n月j日H時i分s秒です。') . '<br>';
  echo $sub->format('現在から3日前はY年n月j日H時i分s秒です。');


  ?>


</body>

</html>