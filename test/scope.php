<h1>변수의 범위</h1>
<?php
/*
 * 1. 지역 변수 (local)
 * 2. 전역 변수 (global)
 * 3. 정적 변수 (static)
 */
?>

<h2>지역 변수 (local variable)</h2>
<?php

function varFunc()
{
    $var = 10; // 지역변수
    echo "함수 내부에서 호출한 지역변수 {$var}";
}

varFunc();
var_dump($var);
// 밖에서 호출한 지역변수
?>

<h2>전역 변수 (global variable)</h2>
<?php

$ttt = 12;
function varFunc1()
{
    $ttt = 20; // 전역변수
    echo "함수 내부에서 호출한 지역변수 {$ttt}";
    var_dump($GLOBALS['ttt']);
}

var_dump($GLOBALS['ttt']);
varFunc1();
// 밖에서 호출한 전역변수
?>

<h2>정적 변수 (static variable)</h2>
<?php
function counter() {
    static $count = 0;
    echo "함수 내부에서 호출한 static 변수 count의 값은 {$count}입니다.<br>";
    $count++;
}

counter();
counter();
counter();
?>