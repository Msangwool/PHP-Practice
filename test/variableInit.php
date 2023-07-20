<h1>변수의 초기화</h1>

<?php
// 선언되지 않은 변수의 기본값
var_dump($var);                         // NULL
echo "<br><br>";

// 선언되지 않은 불리언(boolean) 타입 변수의 기본값
echo $bool ? "true<br>" : "false<br>";  // false
echo "<br><br>";

// 초기화되지 않은 정수(integer) 타입 변수의 기본값
$int += 10;
var_dump($int);
echo "<br><br>";

// 초기화되지 않은 문자열(String) 타입 변수의 기본값
$flt += 3.14;
var_dump($flt);
echo "<br><br>";

$str .= "프로그래밍";
var_dump($str);
// ""."프로그래밍" = "프로그래밍"
echo "<br><br>";

// 초기화되지 않은 배열(array) 타입 변수의 기본값
$arr[2] = "2번째 배열 요소";
$arr[1] = "1번째 배열 요소";
var_dump($arr);
// array(1) { [2]=> string(21) "2번째 배열 요소" }
?>