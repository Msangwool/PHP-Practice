<h1>상수</h1>

<?php

/*
 * define(상수이름, 상숫값, 대소문자구분여부)
 */

define("PHP", "PHP 수업에 잘 오셨습니다!!<br>");
echo PHP;

//define("PHP", "<br>PHP 수업에 잘 오셨습니다.", true);
//echo php;
// 위 코드 오류 있음, true 가 문제가 되는 것 같음
?>

<?php
function defFunc()

{

    echo PHP; // PHP
    define("PHP", "PHP 수업에 잘 오셨습니다!");
    // 위 줄은 오류 발생,, 상수는 변할 수 없기 때문

    echo PHP; // PHP 수업에 잘 오셨습니다!
}

defFunc();
echo PHP;     // PHP 수업에 잘 오셨습니다!

echo "<h3>php에 존재하는 모든 상수 출력</h3>";
echo "<pre>";
print_r(get_defined_constants(true));
echo "</pre>";
?>

<?php
echo "<h1></h1>";
function magicCons() {
echo __LINE__;     // 파일의 현재 줄 번호를 반환함.
echo __FUNCTION__; // 함수의 이름을 반환함.
echo __METHOD__;   // 클래스의 메소드 이름을 반환함.
}
magicCons();
?>
