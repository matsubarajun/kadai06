<?php
/*
引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
*/
function int($max){
    $result = 0;
    $result = $max*2;
    return $result;
}
echo int(30);
