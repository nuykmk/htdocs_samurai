<?php
// 多次元配列
$data = [
  0 => ['name' => '侍太郎', 'age' => 30, 'gender' => '男性'],
  1 => ['name' => '侍花子', 'age' => 36, 'gender' => '女性'],
];

// echo $data[1]['name'];

$num = count($data);
for ($i = 0; $i < $num; $i++) {

  // print_r($data[$i]);
  foreach ($data[$i] as $key => $value) {
    echo $key . ':' . $value . '　';
  }
  echo '<br>';
}
