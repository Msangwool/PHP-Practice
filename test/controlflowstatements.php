<h1>제어문</h1>

<?php

echo "PHP 표현식<br>";
echo "표현식이란, PHP에서 가장 중요한 구성요소!<br>";
echo "표현식이라는 뜻은, 모든 것이 값을 갖는다는 의미이고, PHP에서 사용하는 거의 모든게 표현식에 속한다.<br>";
echo "변수와 상수, 함수까지도 포함되고, 제어문이나 명령문도 모두 표현식에 속한다.<br>";

echo "<h2>if문</h2>";
$num_01 = 10;
$num_02 = 20;
if ($num_01 == $num_02) {
    echo "{$num_01}과 {$num_02}은 같은 수입니다.";
}
if ($num_01 < $num_02) {
    echo "{$num_01}은 {$num_02}보다 작은 수입니다.";
}
if ($num_01 > $num_02) // 실행될 명령문이 한 줄뿐이라면 중괄호({})를 생략할 수 있음.
    echo "{$num_01}은 {$num_02}보다 큰 수입니다.";


echo "<br>else 문<br>";
$num_01 = 20;
$num_02 = 20;
if ($num_01 == $num_02) {
    echo "{$num_01}과 {$num_02}은 같은 수입니다.";
}
else {
    if ($num_01 < $num_02)
        echo "{$num_01}은 {$num_02}보다 작은 수입니다.";
    else // $num_01 > $num_02
        echo "{$num_01}은 {$num_02}보다 큰 수입니다.";
}



echo "<br>elseif 문<br>";
$num_01 = 30;
$num_02 = 20;
if ($num_01 == $num_02) {
    echo "{$num_01}과 {$num_02}은 같은 수입니다.";
}
elseif ($num_01 < $num_02) {
    echo "{$num_01}은 {$num_02}보다 작은 수입니다.";
}
else { // $num_01 > $num_02
    echo "{$num_01}은 {$num_02}보다 큰 수입니다.";
}


echo "<br>";
echo "";


echo "<h2>case문</h2>";
$var = "아보카도";
switch ($var) {

    case "귤":
    case "사과":
    case "바나나":
    case "아보카도":
        echo "여기 있는 과일은 제가 먹어본 과일입니다.";
    case "아보카도":
        echo "여기 있는 과일은 제가 먹어보지 못한 과일입니다.";
    case "아보카도":
        echo "여기 있는 것은 과일이 아닙니다.";
    case "석가":
        echo "여기까지 오나연.";
        break;
    default:
        echo "여기 있는 것은 과일이 아닙니다.";
        break;
}
echo "<br>";
echo "";



echo "<h2>if문</h2>";
echo "<br>";
echo "";



echo "<h2>if문</h2>";
echo "<br>";
echo "";



echo "<h2>if문</h2>";
echo "<br>";
echo "";
?>