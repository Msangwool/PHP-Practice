<h1>반복문</h1>

<?php

echo "<h2>while 문</h2>";
$i = 0;
while ($i < 5) {
    echo ($i++)."<br>";
}
echo "<br>";
echo "";



echo "<h2>do / while 문</h2>";
$i = 0;
$j = 0;
while ($i < 5) {
    echo "변수 i의 값은 ".(++$i)."입니다.<br>";
}
do { // do / while문은 조건식과 상관없이 반드시 한 번은 루프를 실행함
    echo "변수 j의 값은 ".(++$j)."입니다.<br>";
} while ($j > 5);
echo "<br>";
echo "";



echo "<h2>for 문</h2>";
for ($i = 0; $i < 5; $i++)
    echo "{$i}<br>";

echo "<br>";
echo "";


echo "<h2>for each 문</h2>";

echo "예제 1)<br>";
$arr = array(2, 4, 6, 8);
foreach ($arr as $value) {
    echo "변수 \$value의 현재값은 {$value}입니다.<br>";
}
unset($value);

echo "<br>";

echo "예제 2)<br>";
$arr = array(
    "둘" => 2,
    "넷" => 4,
    "여섯" => 6,
    "여덟" => 8,
);
foreach ($arr as $key => $value) {
    echo "배열 \$arr에서 키값 '{$key}'에 대한 값은 {$value}입니다.<br>";
}
unset($value);

echo "<br>";
echo "";


echo "<h1>제어문</h1>";

echo "<h2>continue 문</h2>";
$exceptNum = 4;
for ($i=0; $i<=100; $i++) {
    if ($i % $exceptNum == 0)
        continue;
    echo "{$i} ";
}
echo "<br>";
echo "";


echo "<h2>break 문</h2>";
$sum = 0;
$startNum = 1;
$endNum = 100;
$i = $startNum;
while (true) { // 일부러 만든 무한 루프임.
    $sum += $i;
    if ($i == $endNum)
        break;
    $i++;
}
echo "{$startNum}에서부터 {$endNum}까지 더한 값은 {$sum}입니다.";
echo "<br>";
echo "";
?>