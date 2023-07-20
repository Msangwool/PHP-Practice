<h1>타입 변환</h1>

<br>
<br>

<h2>자동 타입 변환</h2>
<?php

/*
 * php에서는 변수를 선언할 때, 타입을 명시할 필요가 없다.
 * 자동으로 결정되기 때문!
 *
 * 이렇기 때문에, 타입 강도(type strength)는 매우 약하고, 타입이 동적으로 결정된다.
 */

$var = "string";    // string
$var = 10;          // int
$var = 3.14;        // float
?>

<br><br>

<h2>강제 타입 변환(type casting)</h2>
<?php

$var_01 = 10;
var_dump($var_01);

$var_02 = (boolean)$var_01;
var_dump($var_02);

$var_03 = 0;
var_dump($var_03);

$var_04 = (boolean)$var_03;
var_dump($var_04);
?>

<br><br>

<h2>가변 변수(variable variables)</h2>
<?php

$PHP = "HTML";

$HTML = "CSS";

$CSS = "JavaScript";

$JavaScript = "Ajax";

$Ajax = "PHP";



echo $PHP."<br>";       // HTML

echo $$PHP."<br>";      // $HTML -> CSS

echo $$$PHP."<br>";     // $$HTML -> $CSS -> JavaScript

echo $$$$PHP."<br>";    // $$$HTML -> $$CSS -> $JavaScript -> Ajax

echo $$$$$PHP."<br>";   // $$$$HTML -> $$$CSS -> $$JavaScript -> $Ajax -> PHP

echo $$$$$$PHP."<br>";  // $$$$$HTML -> $$$$CSS -> $$$JavaScript -> $$Ajax -> $PHP -> HTML

echo $$$$$$$PHP."<br>"; // $$$$$$HTML -> $$$$$CSS -> $$$$JavaScript -> $$$Ajax -> $$PHP -> $HTML -> CSS ...
?>
