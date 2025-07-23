<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編</title>
</head>

<body>
  <!-- preg_replace()：一致した文字列を他の文字列に置換する -->
  <!-- preg_replace(正規表現, 置換後の文字列, 検索対象); -->

  <!-- 正規表現のグループ化 -->
  <h2>
    <?php
    $personal_data = [
      'name' => '侍太郎',
      'address' => '侍町7-77',
      'mobile' => '090-0000-0000'
    ];

    echo '検索対象：';
    print_r($personal_data);
    ?>
  </h2>
  <p>
    <?php
    echo '携帯電話番号を検索し、一致すれば-（ハイフン）を削除したものに置換します。<br>';

    $no_hyphen = preg_replace('/\A(0[7-9]0)-([0-9]{4})-([0-9]{4})\z/', '$1$2$3', $personal_data);

    echo '>置換結果：';
    print_r($no_hyphen);
    ?>
  </p>



</body>

</html>