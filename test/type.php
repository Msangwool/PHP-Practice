<h1>기본 타입</h1>
<br>
<h2>불리언(boolean)</h2>
<?php

/*
 * 불리언에서 false 인 타입 값들
 * 불리언 : false
 * 정수 : 0
 * 실수 : 0.0
 * 빈 문자열과 문자열 "0"
 * 빈 배열
 * NULL
 *
 * 위 이외의 값은 모두 TRUE
 */

//function test()
//{
//    global array();
//}
// array()는 기본적으로 전역변수가 되기 때문에, global 을 쓰면 오류가 생김

var_dump((bool)false);   // false
var_dump((bool)"false"); // true
var_dump((bool)0);       // false
var_dump((bool)-100);    // true
var_dump((bool)0.0);     // false
var_dump((bool)"");      // false
var_dump((bool)"0");     // false
var_dump((bool)array()); // false
var_dump((bool)NULL);    // false
?>
<br>
<br>

<h1>정수(integer)</h1>
<?php

echo "integer 타입의 크기는 " . PHP_INT_SIZE . "바이트 입니다.<br>";
echo "integer 타입이 표현할 수 있는 가장 큰 수는 " . PHP_INT_MAX . " 입니다.<br>";
$int_01 = 100;
$int_02 = 2147483647; // integer가 표현할 수 있는 범위를 넘지 않는 값을 대입함.
$int_03 = 2147483648; // integer가 표현할 수 있는 범위를 넘는 값을 대입함.
// integer가 표현할 수 있는 범위를 넘어선 값을 대입하게 되면 자동으로 실수형(float)으로 인식된다.
?>
<br>
<br>

<h1>실수(float)</h1>
<?php

$float_01 = 3.14;
$float_02 = 1.23e-4;
$float_03 = 1.8E307; // float이 표현할 수 있는 범위를 넘지 않는 값을 대입함.
$float_04 = 1.8E308; // float이 표현할 수 있는 범위를 넘는 값을 대입함.

// float이 표현할 수 있는 범위를 넘는 값을 대입하게 되면, INF로 인식한다.
// INF는 infinite 라는 뜻이다.
echo "오류가 안 났으니 성공";
?>
<br>
<br>

<h1>배열(array)</h1>
<?php

/*
 * PHP에서의 배열은 한 쌍의 키와 값으로 이루어진 맵 형태
 * 그렇기에 출력될 때도, (1) => "1번" 이라고 나옴
 * 또한, 키 값으로는 정수와 문자열만이 가능하고, 하나의 배열에 두 가지 키 값을 같이 사용할 수 있다.
 *
 */

class Lecture
{

    function __construct()
    {
        $this->lecture1 = "php";
    }

    function lecture()
    {
        $this->lec_01 = "lec_01";
        $this->lec_02 = "lec_02";
    }
}

$lecture = new Lecture();

$arr = array(
    1 => "첫번째 값",
    "1" => "두 번째 값",
    $lecture->lecture1 => "tttt",
    2 => $lecture,
);

var_dump($arr);
echo "<br>";
var_dump($lecture->lecture1);
echo "<br>";
var_dump($arr[$lecture->lecture1]);
echo "<br>";

$lecture->lecture1 = "1234";
echo "<br>";
var_dump($lecture->lecture1);
echo "<br>";
var_dump($arr["php"]);
// var_dump($arr[$lecture->lecture1]);
// 위 코드 오류발생
echo "<br>";


$arr_2 = array(
    0 => "숫자 0입니다.",
    "0" => "문자열 0입니다.",
);

var_dump($arr_2[0]);
echo "<br>";
var_dump($arr_2["0"]);
echo "<br>";

echo "PHP의 배열에서 숫자의 값과 문자열 내부의 값이 같으면, 같은 키로 간주하고 더 나중에 할당되는 값으로 대체된다. "
?>
<br>
<br>


<h1>문자형(string)</h1>
<?php

$str_01 = "PHP";

$str_02 = "자바스크립트";

// UTF-8 인코딩 환경에서는 영문자는 한 글자당 1바이트, 한글은 한 문자당 3바이트

echo strlen($str_01); // 3
echo "<br>";

echo strlen($str_02); // 18
echo "<br>";
?>

<br>
<br>

<h1>객체(object)</h1>
<?php

$var = new Lecture; // 객체 생성
$var->lecture();
echo $var->lec_01;  // 객체의 속성 접근
echo "<br>";
echo $var->lec_02;
?>

<br>
<br>

<h1>NULL</h1>
<?php

$tar_1;
var_dump($tar_1);
echo "초기화되지 않은 변수를 참조할 때<br>";

$tar_2;
var_dump($var_2);

echo "<br>unset 함수 실행(메모리에 할당된 공간 제거)";
unset($var_2);
var_dump($var_2);
echo "<br>제거 했음에도 NULL이 출력되는 것을 확인할 수 있음.<br>";
echo "그냥 흔한 스크립트 언어이다? 타입의 불안전성을 갖고 있는..";

?>
