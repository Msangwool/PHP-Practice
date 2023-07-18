<?php
declare(strict_types = 1);
?>
<h1>function</h1>

<br><br>

<?php

/*
 * 사용자 정의 함수 (user defined function) 
 */


echo "1. 함수의 이름은 문자와 숫자, 언더스코어(_)만 사용할 수 있다.<br>";
echo "2. 함수의 이름은 숫자로 시작할 수 없다.<br>";
echo "3. 여러 함수가 같은 이름을 사용할 수 없다. (오버로딩을 지원하지 않기 때문에)<br>";

echo "함수 이름의 대소문자를 구분하지 않는다. (그래도 이름 지켜서 호출하는게 best)<br>";

echo "매개변수는 인수로 전달받은 값을 함수에서 사용하기 위해 사용한다.<br>";
?>

<h2>함수의 호출</h2>

<?php

echo "PHP의 모든 함수와 클래스는 전역 범위(global scope)를 가진다.<br>";
echo "즉, 같은 스크립트 내에서는 함수가 내부에서 정의 되었더라도 외부에서 호출할 수 있고, 반대로 외부에서 정의됐어도 내부에서 호출할 수 있다.<br>";

function sum($a, $b) {
    return $a + $b;
}

$sum = sum(1, 2);

var_dump($sum);


// 위는 약한 강도로 함수 반환 타입을 설정한 예제,,

// 아래는 강한 강도로 함수 반환 타입을 설정하는 예제,,

function sum1($x, $y) : float {
    return $x + $y;
}

var_dump(sum1(1.0, 2.0));
var_dump(sum1(1, 2)); // 오류 발생; 타입이 지켜지지 않았기 때문
?>