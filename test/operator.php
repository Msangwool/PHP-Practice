<h1>연산자</h1>


<h2>산술 연산자(arithmetic operator)</h2>
<?php

/*
 * 산술 연산자는 사칙 연산을 다루는 가장 기본적이면서도 많이 사용하는 연산자
 * 모두 두 개의 피연산자를 가지는 이항 연산자이고, 피연산자들의 결합 방향은 왼쪽에서 오른쪽
 */

$num_01 = 10;
$num_02 = 4;

echo "+ 연산자에 의한 결괏값은 ".($num_01 + $num_02)."입니다.<br>"; // 14
echo "- 연산자에 의한 결괏값은 ".($num_01 - $num_02)."입니다.<br>"; // 6
echo "* 연산자에 의한 결괏값은 ".($num_01 * $num_02)."입니다.<br>"; // 40
echo "/ 연산자에 의한 결괏값은 ".($num_01 / $num_02)."입니다.<br>"; // 2.5
echo "% 연산자에 의한 결괏값은 ".($num_01 % $num_02)."입니다.";     // 2
?>

<h3>우선순위 및 결합 방향</h3>
<?php
echo "연산자의 우선순위는 하나의 수식 내에 여러 연산자가 함께 등장할 때, 어떤 연산자가 먼저 처리될 것인가를 결정한다.";
echo "<br>연산 식이 여러개가 있을 때, 괄호는 당연히 우선 순위 이고, 오른쪽에서 왼쪽으로 진행된다.";
echo "<br>이렇게 때문에, $$$$$\$HTML 이런게 가능했던것";

?>

<br><br>

<h2>대입 연산자(assignment operator)</h2>
<?php

echo "대입 연산자는 변수에 값을 대입할 때 사용하는 이항 연산자이고, 피연산자들의 결합 방향은 오른쪽에서 왼쪽이다.";
echo "<br>복합 대입 연산자(특이한 것만)";
echo "<br>문자열 추가 -> .= ";
echo "<br>";

echo "<br>";

$num_01 = 7;
$num_02 = 7;
$num_03 = 7;

echo "- 연산자에 의한 결괏값은 ".($num_01 = $num_01 - 5)."입니다.<br>"; // 2
echo "-= 연산자에 의한 결괏값은 ".($num_02 -= 5)."입니다.<br>";         // 2
echo "=- 연산자에 의한 결괏값은 ".($num_03 =- 5)."입니다.<br>";             // -5
echo "위 =- 연산은 단순히 대입 연산으로 바뀐것..! = 띄고 -5 라고 생각하면 편하다.";
?>

<br><br>

<h2>증감 연산자(increment and decrement operator)</h2>

<?php
echo "증감 연산자는 피연산자를 1씩 증가 or 1씩 감소시킬 때, 사용하는 연산자이다.";

$num_01 = 7;
$num_02 = 7;

echo "<br>연산식 -> ++\$num_01 - 5 and \$num_02++ - 5<br>";
echo "++\$num_01 에 의한 결괏값은 ".(++$num_01 - 5)."이고, 변수의 값은 {$num_01}로 변했습니다.<br>";
echo "\$num_02++ 에 의한 결괏값은 ".($num_02++ - 5)."이고, 변수의 값은 {$num_02}로 변했습니다.";
?>

<br><br>

<h2>비교 연산자(comparison operator)</h2>

<?php

/*
 * 비교 연산자는 피연산자 사이의 상대적인 크기를 판단해, 참 or 거짓 값을 도출함
 * 모두 피연산자를 가지는 이항 연자이고 피연산자들의 결합 방향은 왼쪽에서 오른쪽이다.
 */

$compare_1 = "15";
$compare_2 = 15;
$compare_3 = 15;

echo "타입까지 같은면 참<br>";
echo "1. \"15\" === 15<br>";
var_dump($compare_1 !== $compare_2);
echo "<br>2. 15 === 15<br>";
var_dump($compare_2 === $compare_3);

echo "<br>";
echo "<br>";

echo "값 또는 타입 다르면 참<br>";
echo "3. \"15\" !== 15<br>";
var_dump($compare_1 !== $compare_2);
echo "<br>4. 15 !== 15<br>";
var_dump($compare_2 !== $compare_3);

echo "<br>";
echo "<br>";

echo "다르면 참<br>";
echo "3. \"15\" != 15<br>";
var_dump($compare_1 != $compare_2);
echo "<br>4. 15 <> 15<br>";
var_dump($compare_2 <> $compare_3);
?>

<h3>다양한 타입 비교</h3>

<?php

/*
 * 비교시, 타입 변환 순위
 * 1. bool and null -> 모두 : 둘다 boolean
 * 2. string, resource, integer, float -> " : 숫자로 시작하는 문자열과 리소스는 숫자로 변환 후, 비교
 * 3. object -> object : 내장 클래스는 자신의 비교 함수를 정의할 수 있지만, 다른 클래스끼리 비교 불가
 * 4. array -> array : 배열끼리 비교는 같은 키를 가지는 값끼리 비교, 크고 작음은 배열 요소의 수로 계산
 * 5. array -> 모두 : 배열이 항상 큼
 * 6. object -> 모두 : 객체가 항상 큼
 */

echo "<br>";

var_dump(0 < true);           // true
echo "<br>";
var_dump("123abc" == 123);    // true
echo "<br>";
var_dump("123abc" === 123);   // false
echo "<br>";


$arr_01 = array("a" => 10);
$arr_02 = array("a" => 5);
$arr_03 = array("a" => 5, "c" => 7);


echo "<br>";
var_dump($arr_01 >= $arr_02); // true
echo "<br>";
var_dump($arr_01 >= $arr_03); // false
echo "<br>";
var_dump("문자열" < $arr_01); // true
echo "<br>";

echo "논리 연산자(logical operator)<br>";

var_dump(true xor false);
?>
