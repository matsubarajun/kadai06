<?php
/*
$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
*/
function add($a,$b) {
    $result = 0;
    $result = $a + $b;
    return $result;
}
echo add(3,5);
