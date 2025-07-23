<?php
session_start();

// 乱数が未設定なら生成してセッションに保存
if (!isset($_SESSION['target'])) {
  $_SESSION['target'] = mt_rand(1, 100);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $guess = isset($_POST['guess']) ? intval($_POST['guess']) : null;

  // 入力バリデーション
  if ($guess < 1 || $guess > 100) {
    $message = "数字は1から100の間で入力してください";
  } elseif ($guess < $_SESSION['target']) {
    $message = "もっと大きいです！";
  } elseif ($guess > $_SESSION['target']) {
    $message = "もっと小さいです！";
  } else {
    $message = "正解です！おめでとうございます！🎉";
    // 正解したらゲームリセット
    unset($_SESSION['target']);
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>数字当てゲーム</title>
</head>

<body>
  <h1>1〜100の数字を当ててください！</h1>

  <form method="post" action="">
    <input type="number" name="guess" min="1" max="100" required>
    <button type="submit">送信</button>
  </form>

  <?php if (!empty($message)): ?>
    <p><?php echo htmlspecialchars($message); ?></p>
  <?php endif; ?>
</body>

</html>