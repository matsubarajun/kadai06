<?php
/*応用】　下記のプログラムは、配列の中で1番大きい値を返す 
max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
   とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
     ここで配列の中の1番大きい値を探したい
  }

  return $max_number;
}
*/
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($arr > $max_number){
            $max_number = $arr;
        }
    }
    return $max_number;
}
echo max_array(array(9,8,7,6,5));
