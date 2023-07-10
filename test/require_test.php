<?php
header('Content-type:image/png');
require "./image_test.php";

$instance = new Image();

$instance->getImage();
?>

<?php

//echo "<h1>다른 파일 이미지 테스트</h1>";
require "./image_test.php";

$instance = new Image();

$instance->getImage();
?>