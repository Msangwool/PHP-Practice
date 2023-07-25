<h1>함수의 활용</h1>

<?php

echo "<h3>조건적인 함수 (conditional function)</h3><br>";
echo "조건적인 함수는 특정 조건을 만족할 때만 선언되는 함수이다.<br>";
echo "설정된 조건을 만족하지 못했을 때는, 선언 자체가 되지 않아, 해당 함수를 호출할 수 없게 된다.<br>";

$makefunc = true;
// func() : 아직 함수가 선언되기 전이여서 호출 불가
if ($makefunc) {
    function func() {
        echo "이제 함수를 사용할 수 있다.<br>";
    }
    func(); // 이 곳에서는 함수 사용 가능
}

echo "<br>";

echo "함수안의 함수(function within function<br>";
echo "PHP에서는 함수 안에 또 다른 함수를 선언할 수 있다.<br>";
echo "왜 ? PHP의 모든 함수는 전역변수이므로 함수 내부에서 선언된 함수라도 해당 함수 외부에서 호출할 수 있다.<br>";

function out() {
    function in() {

        echo "in 함수 안 입니다.";
    }
}

echo "1. in() 이 부분은 아직 할당 전 즉, 함수 호출 불가<br>";
echo "2. out() 함수가 호출되면서 function in()이 할당 됨<br>";
echo "3. in() 이제 in 함수 사용 가능<br>";

echo "<h3>재귀함수(recursive function)</h3>";
echo "재귀 함수란, 함수 내부에서 함수가 자기 자신을 또 다시 호출하는 함수를 의미한다.<br>";
echo "핵심은, 함수 내에서 재귀 호출이 중단되는 지점이 반드시 필요하다는 것이다.<br>";

function factorial($num)
{
    if($num > 1)                           // 1이 될 때까지
        return $num * factorial($num - 1); // 1씩 감소시킨 값을 전달하여 자기 자신을 계속 호출함.
    else
        return 1;
}
echo factorial(4);


echo "<h3>가변 함수(variable function)</h3>";
echo "변수를 사용해 함수를 호출하는 것을 말한다.<br>";
echo "PHP에서는 변수 이름에 괄호 (())를 붙이면, 해당 변수의 값과 같은 이름을 가지는 함수를 호출한다.<br>";
echo "즉, 변수에 함수의 이름을 별도로 지정할 수 있다.<br>";

function first()

{
    echo "first() 함수입니다.<br><br>";
}
function second($para)

{
    echo "second() 함수입니다.<br>";

    echo "함수 호출 시 전달받은 인수의 값은 {$para}입니다.";
}
$func = "first";
$func();    // first() 함수를 호출함.
$func = "second";
$func(20);  // second() 함수를 호출함.

echo "<h3>변수 관련 함수</h3>";
echo "변수의 타입 변경<br>";
echo "gettype() 함수는 전달받은 변수의 타입을 반환한다.<br>";

echo "settype() 함수는 전달받은 변수의 타입을 변경한다.<br>";
echo "boolean, integer, string, array, object, float, null 가능<br>";

echo "<br>";
echo "<br>";

echo "<h3>배열 생성</h3>";
echo "배열 요소의 개수 구하는 법<br>";
echo "1. count() 2. sizeof()<br>";

$arr = array(1, 2, 3, 4, 5);
echo count($arr);
echo sizeof($arr);

$acv = array_count_values($arr);

echo $acv;

$arr = array(3, 4, 2, 1, 5, 7, 6);

sort($arr);

foreach($arr as $value) {
    echo $value." ";
}

echo "<br>문자열의 길이 구하기 strlen() <br>";
$str = "12345678";
echo strlen($str);

echo "문자열 비교하기<br>";

echo strcmp("abc", "ABC")."<br>";     // 양수
echo strcasecmp("abc", "ABC")."<br>"; // 0
echo strcmp("2", "10")."<br>";        // 양수
echo strnatcmp("2", "10")."<br>";     // 음수

echo "특정 문자열 검색<br>";

echo strstr("ABCabcDEFabc", "abc")."<br>";   // abcDEFabc
echo strrchr("ABCabcDEFabc", "abc")."<br>";  // abc
echo stristr("ABCabcDEFabc", "abc")."<br>";  // ABCabcDEFabc

echo "특정 문자열 검색<br>";

echo strpos("ABCabcDEFabc", "abc")."<br>";  // 3
echo strrpos("ABCabcDEFabc", "abc")."<br>"; // 9

echo "문자열 추출하기<br>";

$str = "Hello, World!";
echo substr($str, 3)."<br>";     // 네 번째 문자부터 끝까지 출력
echo substr($str, -3)."<br>";    // 끝에서부터 세 글자 출력
echo substr($str, 1, 5)."<br>";  // 두 번째 문자부터 다섯 글자 출력
echo substr($str, 1, -5)."<br>"; // 두 번째 문자부터 뒤에서 여섯 번째 문자까지 출력

echo "문자열 대소문자 바꾸기<br>";

echo strtolower("HELLO, WORLD!")."<br>"; // 모두 소문자로 바꿈.
echo strtoupper("hello, world!")."<br>"; // 모두 대문자로 바꿈.
echo ucfirst("hello, world!")."<br>";    // 문자열의 첫 번째 문자만 대문자로 바꿈.
echo ucwords("hello, world!")."<br>";    // 각 단어의 첫 번째 문자를 대문자로 바꿈.

echo "문자열 합치고 나누기<br>";

$str = "hello, beautiful, world!";

$array = explode(',', $str)."<br>";  // ','를 기준으로 문자열을 나눔.
echo $array[0]."<br>";               // hello

echo $array[1]."<br>";               // beautiful
echo $array[2]."<br>";               // world!

$str2 = implode('!', $array)."<br>"; // '!'를 기준으로 문자열을 결합함.
echo $str2."<br>";                   // hello! beautiful! world!

$token = strtok($str2, '!');  // '!'를 기준으로 토큰화
echo $token;                  // hello
while($token != ""){          // 문자열이 끝날 때까지
    $token = strtok('!');     // '!'를 기준으로 토근화하고 출력함.
    echo $token." ";              // beautiful, world
}

?>