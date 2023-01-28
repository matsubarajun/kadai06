<?php
/*5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

strip_tags
array_push
array_merge
time, mktime
date
*/


// strip_tags...文字列のHTMLタグ PHPタグを削除する
// strip_tags(対象となる文字列,"取り除かないタグ"):

/*(使用例)
$text ='<p>hello</p><br><span><a href="">html</a></span>';
  echo strip_tags($text);
//   htmlのタグのみ削除
 
 
$text2 = '<?php "hello" echo "php"';
echo strip_tags($text2);
// phpタグを消すとそれ以降の要素が消える
*/


// array_push...配列へ変数を追加する
// array_push($配列名,'追加する内容１','追加する内容２');

 /*(使用例)
$fruits = array('apple', 'orange', 'melon');

array_push($fruits,'banana','lemon');

foreach($fruits as $fruits){

echo $fruits;
echo "\n";
}
*/


// array_merge...複数の配列結合
// $結合後の配列 = array_merge($配列a,$配列b);

 /*(使用例)
$drink1 = array('wine', 'milk', 'cola');
$drink2 = array('beer', 'water');
$drinks = array_merge($drink1, $drink2);
foreach($drinks as $drinks){
    echo $drinks;
    echo "\n";
}
*/


// time...現在時刻のUNIXタイムスタンプを取得する
// $time = time();
// mktime...対象の時間からUNIXタイムスタンプを取得する
// $time = mktime(時,分,秒,月,日,年);
// ※UNIXタイムスタンプは1970/01/01から経過時間。

/*(使用例)
$time = time();
$oldtime = mktime(4,20,50,1,28,2023);
echo $time;
echo "\n";
echo $oldtime;
*/


// date...タイムスタンプを対象に日時を出力する

/*(使用例)
$timestanp = time();
echo date( "Y/m/d");
// ↑日付の出力方法はたくさんある
*/
