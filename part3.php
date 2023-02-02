<?php
/*
$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください
*/
function count_array($arr){
    $result = 1;

    foreach($arr as $a){
        $result *= $arr;
    }
        return $result;
}
 echo count_array(array(1,3,5,7,9));
