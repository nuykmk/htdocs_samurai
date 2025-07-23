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
    // クラスを定義する
    class Product
    {
      // プロパティを定義する
      public $name;

      // メソッドを定義する
      public function set_name(string $name)
      {
        $this->name = $name;
      }
      public function show_name()
      {
        echo $this->name . '<br>';
      }
    }

    // インスタンス化する
    $coffee = new Product();

    // メソッドにアクセスして実行する
    $coffee->set_name('コーヒー');
    $coffee->show_name();

    // インスタンス化する
    $shampoo = new Product();

    // プロパティにアクセスし、値を代入する
    $shampoo->name = 'シャンプー';

    // プロパティにアクセスし、値を出力する
    echo $shampoo->name;
    ?>
  </p>

  <p>
    <?php
    // クラスを定義する
    class User
    {
      // プロパティを定義する  
      private $name;
      private $age;
      private $gender;

      // コンストラクタを定義する
      public function __construct(string $name, int $age, string $gender)
      {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
      }
    }

    // インスタンス化する
    $user = new User('侍太郎', 36, '男性');

    // インスタンス$userの各プロパティの値を出力する
    print_r($user);
    ?>
  </p>

  <!-- 
  // クラスの定義（例：class Product { …… }）
  class クラス名 {
  // プロパティの定義（例：public $name;）
  アクセス権 $プロパティ名;

  // コンストラクタの定義
  public function __construct() {
  初期化の内容
  }

  // メソッドの定義（例：public show_name() { …… }）
  アクセス権 メソッド名() {
  一連の処理
  }
  }

  // インスタンス化（例：$shampoo = new Product();）
  $インスタンス名 = new クラス名();

  // プロパティへのアクセス（例：$shampoo->name;）
  $インスタンス名->プロパティ名;

  // メソッドへのアクセス（例：$shampoo->show_name();）
  $インスタンス名->メソッド名(); -->
</body>

</html>