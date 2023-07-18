<h1>Parameter</h1>

<?php

echo "매개변수의 전달 방식<br>";
echo "1. 값 전달 방식<br>";
echo "2. 참조 전달 방식<br>";

echo "<h2>1. 값 전달</h2><br>";
function increment($para)
{
    $para++; // $value의 값을 복사하여 increment() 함수에 인수로 전달함.
}
$value = 1;
increment($value);

var_dump($value); // 증가되지 않는다.

echo "<br><h2>2. 참조 전달</h2><br>";
function increment1(&$para) // 인수로 전달되는 값의 원본을 참조함.
{
    $para++;
}
$value = 1;
increment1($value);

var_dump($value);

echo "<br><h2>default parameter(디폴트 매개변수)</h2><br>";

function sum($value1, $value2 = 0, $value3 = 0) {

}

echo "디폴트 매개변수의 특징은 명시된 매개변수에 값이 들어오지 않았을 때, 설정될 초기화 값이라고 생각하면 된다.<br>";
echo "함수를 호출할 때, 함수의 정의에서 명시된 매개변수의 수만큼 인수가 전달되지 않으면, PHP 파서는 오류를 낸다.<br>";
echo "즉, defalut 매개변수를 설정하여, 함수 호출 시 전달할 인수의 수를 유연하게 설정할 수 있다.<br><br>";

echo "PHP에서 함수를 호출할 때, 전달된 인수는 매개변수의 왼쪽부터 차례대로 대입된다.<br>";
echo "즉, 맨 오른쪽에 있는 매개변수에 값을 넣기 위해서는 그보다 왼쪽에 존재하는 모든 매개변수에 값이 들어가야 하므로,<br>";
echo "디폴트 매개변수의 설정은 매개변수 리스트의 맨 오른쪽 끛 매개변수부터 시작해야 한다.<br>";


echo "<h2>가변 길이 인수 목록(variable-length argument list)</h2><br>";
echo "이는 함수를 선언할 때, 전달받을 인수의 개수를 미리 정하지 않고, 호출할 때마다 유동적으로 인수를 넘기는 기능이다.<br>";
echo "PHP 5.5 이하<br>";

function sum1()
{
    $sum = 0;
    foreach(func_get_args() as $n) { // PHP 5.5 이하
        $sum += $n;
    }
    return $sum;
}

echo "<br>";

function sum3(...$num) // PHP 5.6 이상
{
    $sum = 0;
    foreach($num as $n) {
        $sum += $n;
    }
    return $sum;
}

echo "1.<br>";
var_dump(sum1(1, 2, 3, 4, 5, 6, 7, 8, 9));
echo "<br>";
echo "2.<br>";
var_dump(sum3(1, 2, 3, 4, 5, 6, 7, 8, 9));
echo "<br>";
echo "<br>";


?>