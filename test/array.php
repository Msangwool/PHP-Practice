<h1>배열</h1>

<?php

echo "제일 중요한건, php에서 배열은 맵 형식이라는 것!<br>";
echo "1차원 배열<br>";
echo "다차원 배열<br>";
echo "연관 배열<br>";


echo "<h2>for each 문</h2>";

echo "array() 내장 함수를 사용해서 배열 생성<br>";
echo "배열 요소에 접근하기 위해서는 인덱스를 사용<br>";
echo "여기서, 숫자와 문자열로 인덱스를 만들고, 여기서 문자열을 인덱스로 사용한다면 이는 연관배열(associative array)가 되는 것!";

// 방법 1
$arr = array();     // 배열 생성
$arr[0] = "apple";  // 배열 요소 추가
$arr[1] = "banana";
$arr[2] = "orange";

// 방법 2
$arr1 = array("apple", "banana", "orange");  // 배열 생성과 동시에 초기화

// 방법 3
$arr2[0] = "apple";  // 배열이 존재하지 않으므로, 먼저 배열을 생성한 후에 요소가 추가됨.
$arr2[1] = "banana";
$arr2[2] = "orange";

// 방법 4
$arr[] = "apple";  // 배열 인덱스를 생략하여, 순서대로 배열에 추가됨.
$arr[] = "banana";
$arr[] = "orange";

echo "<br>";

echo "<h2>배열의 홀(hole)</h2>";
echo "PHP에서는 배열의 특정 인덱스에만 배열 요소를 추가할 수 있습니다.<br>";

$arr = array();            // 배열의 생성
$arr[10] = "banana";       // 인덱스 10에만 배열 요소를 추가함.

var_dump($arr);
// var_dump($arr[0]);         // NULL
var_dump(isset($arr[0]));  // false
var_dump(isset($arr[10])); // true

echo "위 예제에서 배열 요소가 존재하는 인덱스는 10이고, 나머지 인덱스에는 배열 요소가 존재하지 않음..<br>";
echo "이렇게 인덱스에 대응하는 배열 요소가 없는 부분을 배열의 홀(hole)이라고 한다.<br>";

$arr = array(); // 배열의 생성 
$arr[2] = "apple";
$arr[3] = "banana";
$arr[4] = "orange";

// $arr[0]과 $arr[1]은 배열의 홀(hole)이 됨.
for ($i = 0; $i < count($arr); $i++) {

    echo "\$arr[{\$i}] : ".$arr[$i]."<br>";
}

foreach ($arr as $element){

    echo $element."<br>";
}

echo "<h2>다차원 배열</h2>";

$arr = array(
    array(1, 2),
    array(1, 2, 3),
    array(1, 2, 3, 4),
);

for ($i = 0; $i < count($arr); $i++) {

    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j];
    }
    echo "<br>";
}
?>