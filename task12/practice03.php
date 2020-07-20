<?php
 $name = "daisuke";
 if ($name == "kousuke") {
    echo "あなたの名前です。";
 } else {
    echo "あなたの名前ではありません。";
 } 

?>

<?php
 $total = 0;
 
 for($i = 1; $i <=10000; $i++) {
     $total += $i;
 }
 echo $total;

?>

<?php
 $fruits = array("apple", "orange", "lemon", "banana", "strawberry");

 foreach($fruits as $value){
     echo $value;
     echo "\n";
 }
 
 ?>
 
<?php
// for文の始めの値を定義する 
 $start = 1;
//  for文の終わりの値を定義する 
 $end = 101;

 for($i = $start; $i < $end ; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

?>