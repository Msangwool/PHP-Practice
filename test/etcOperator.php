<h1>비트 연산자</h1>

<br>

<h2>비트 연산자(bitwise operator)</h2>
<?php

/*
 * 비트 연산자는 논리 연산자와 비슷하지만, 비트(bit) 단위로 논리 연산을 수행한다.
 * 또, 비트 단위로 전체 비트를 왼쪽이나 오른쪽으로 이동시킬 때도 사용한다.
 */


?>

<br>
<br>

<h2>삼항 연산자(ternary operator)</h2>
<?php

/*
 * 삼항 연산자는 그냥 물음표 문법!
 */

$num_01 = 15;
$num_02 = 8;
$result = ($num_01 > $num_02) ? $num_01 : $num_02;



echo "둘 중에 더 큰수는 {$result}입니다.";
?>


<br>
<br>

<h2>문자열 연산자(string operator)</h2>
<?php

/*
 * .을 이용해서 문자열을 연결할 수 있다.
 */

$str_01 = "PHP 수업";
$str_02 = "에 오신것을 환영합니다!";


echo "두 문자열을 합친 문자열은 '".($str_01.$str_02)."'입니다.<br>";

echo $str_01, $str_02;
?>

<br>
<br>

<h2>배열 합집합 연산자(array union operator)</h2>
<?php

/*
 * 배열 합집합 연산자(+)는 피연산자로 오는 두 배열의 합집합을 반환한다.
 * 알고리즘은, 왼쪽 피연산자로 오는 배열의 키값은 유지하고, 거기에 맞춰 오른쪽 피연산자로 오는 배열을 덧붙이는 방식을 취한다.
 * 즉, 같은 키에 대한 값에는 왼쪽 피연산자로 오는 배열의 값이 저장된다.
 */

$arr_01 = array("1st" => "PHP", "2nd" => "MySQL");
$arr_02 = array("1st" => "HTML", "2nd" => "CSS", "3rd" => "JavaScript");

$result_01 = $arr_01 + $arr_02; // [PHP, MySQL, JavaScript]
var_dump($result_01);
echo "<br>";
$result_02 = $arr_02 + $arr_01; // [HTML, CSS, JavaScript]
var_dump($result_02);

echo "<br>위의 예제에서 두 배열의 첫 번재와 두 번째 요소의 키값은 서로 같다.<br>";
echo "이때, 어느 집합이 앞에 위치하는가에 따라서, 합집합 연산의 결과가 달라지는 것을 확인할 수 있다.<br>";

$arr_01 = array("PHP", "MySQL");
$arr_02 = array("HTML", "CSS", "JavaScript");

$result_01 = $arr_01 + $arr_02; // [PHP, MySQL, JavaScript]
var_dump($result_01);
echo "<br>";
$result_02 = $arr_02 + $arr_01; // [HTML, CSS, JavaScript]
var_dump($result_02);

echo "<br>위처럼 같은 인덱스를 가지는 배열도 같은 결과를 불러온다.<br>";
?>

<br>
<br>

<h2>instanceof 연산자</h2>
<?php

/*
1. 해당 변수가 어떤 클래스(class)에서 생성된 객체(object)인지를 확인할 때

2. 해당 변수가 부모 클래스(parent class)에서 상속받은 클래스인지를 확인할 때

3. 해당 변수가 클래스의 인스턴스(instance)인지 아닌지를 확인할 때

4. 해당 변수가 인터페이스(interface)로 구현한 클래스의 객체 인스턴스(object instance)인지 아닌지를 확인할 때
 */

interface Interface_1
{

}

class Class_1
{

}

class Class_2 extends Class_1 implements Interface_1
{

}

/* 어떤 클래스(class)에서 생성된 객체(object)인지 확인할 때 */

$var_1 = new Class_2();
var_dump($var_1 instanceof Class_1);
var_dump($var_1 instanceof Class_2);
var_dump($var_1 instanceof Interface_1);

/* 인터페이스(interface)로 구현한 클래스의 객체 인스턴스(object instance)인지 아닌지를 확인할 때, */
$var_4 = new Class_2();
var_dump($var_4 instanceof Class_2);
var_dump($var_4 instanceof Interface_1);

?>