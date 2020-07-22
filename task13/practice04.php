<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
 function sum($max){
   $result = $max * 2;
  
   return $result;
      
 }
 
 echo sum(500);
 echo "\n";
 
 // 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
 function total($a, $b){
   $result = $a + $b;
  
   return $result;
  
 }
  
  echo total(5, 15);
  echo "\n";
  
// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。 
 function times($arr){
  $result = 1;
  
  foreach($arr as $a){
   $result *= $a;
   
  }
 
  return $result;
  
 }
  
  echo times(array(1, 3, 5, 7, 9));
  echo "\n";
  
  // 4.【応用】　次のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
 
 function max_array($arr){
   
// とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
 //どうしたらいいかわからない・・・・
  if ($max_number < $a){
   $max_number = $a;
  }
 
 }
  return $max_number;
 
 }
  echo max_array(array(5, 10, 3, 2, 4));
  echo "\n";
 
 
//  5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

// strip_tags — 文字列から HTML および PHP タグを取り除く
 $text = '<p>Test</p>';
 echo strip_tags($text);
 echo "\n";

// array_push - 1つ以上の要素を配列の最後に追加する
$array = ["apple", "orange", ];
$arrayLength = array_push($array, "lemon", "banana", "strawberry");

var_dump($array);
echo "\n";

// array_merge - 配列を結合する
$fruits1 = ["apple", "melon"];
$fruits2 = ["lenon", "banana"];
$fruits3 = ["orange", "strawberry"];

$fruits = array_merge($fruits1, $fruits3, $fruits2);

var_dump($fruits);

// time, mktime - 現在、指定日時の取得
echo time();
echo "\n";

 //         (時, 分, 秒, 月, 日, 年);
echo mktime (17, 00, 00, 7, 22, 2020);
echo "\n";

// date 
// 現在の年, 月,日時
date_default_timezone_set('Asia/Tokyo');
echo date('Y-m-d H時i分s秒');

?>
