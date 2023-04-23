<!DOCTYPE html>
<html>
<body>
<?php
$n = 30; // 생성할 랜덤 숫자 개수
$numbers = array(); // 랜덤 숫자들을 저장할 배열

// $n 개의 랜덤한 숫자를 생성하여 배열에 저장
for ($i = 0; $i < $n; $i++) {
    $numbers[] = rand(10, 100);
}

// 생성된 랜덤한 숫자들을 출력
echo "<br>생성된 랜덤한 숫자: ";
for ($i = 0; $i < $n; $i++) {
    echo $numbers[$i] . " ";
}
echo "\n";

// 배열을 오름차순으로 정렬
sort($numbers);

// 정렬된 숫자들을 출력
echo "<br>오름차순으로 정렬된 숫자: ";
for ($i = 0; $i < $n; $i++) {
    echo $numbers[$i] . " ";
}
echo "<br>";
?>
</body>
</html>