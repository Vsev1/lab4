<?php

$a = 100;
echo "a = " . $a . "<br>";
$str = "str" . "ing";
echo $str;

echo "<hr>";

$b=5;
$result = $a - $b;
echo $result . "<br>";
$result = "$a-$b";
echo $result . "<br>";
$result = '$a-$b';
echo $result;

echo "<hr>";

$a = 3;
echo $a ** 2 / 4;

echo "<hr>";

$numbers = [1, 2, 3, 4, 5, 6, 7];
$num = count($numbers);
echo "В массиве $num чисел <br>";
foreach($numbers as $i)
{
    echo "$i <br>";
}

echo "<hr>";

$numbers = [1 => 14, 2 => 32, 3 => 53, 4 => 78];
$count = count($numbers);
for($i = 1; $i <= $count; $i++)
{
    echo "$numbers[$i] <br>";
}

echo "<hr>";

$numbers = [1 => "first", 2 => "second", 3 => "third", 4 => "firth"];
foreach($numbers as $key => $value)
{
    echo "$key - $value<br>";
}

echo "<hr>";

$array = [1 => "red", 2 => "blue", 3 => "green", 4 => "yellow"];
foreach($array as $num => $color)
{
    echo "$num - $color<br>";
}

echo "<hr>";

$num = "1 2 3 4 5 6";
$array = explode(" ", $num);
$counter = 0;
while($counter < count($array))
{
    echo $array[$counter] . "<br>";
    $counter++;
}

echo "<hr>";

$new = implode(" + ", $array);
echo $new;

echo "<hr>";

function getArray(){
    return [13, 24, 36, 78];
}
echo getArray()[1];

echo "<hr>";

if (2 == "2" && 2 <= 3)
    echo "true" . "<br>";
else
    echo "false" . "<br>";

if (3 === "3" || 5 !== 5)
    echo "true" . "<br>";
else
    echo "false" . "<br>";

$a = 5;
if($a>5){
    echo "Переменная a > 5";
}
elseif($a < 5){
    echo "Переменная a < 5";
}
else{
    echo "Переменная a = 5";
}

echo "<hr>";

$float = 10.78;
echo $float  . "<br>";
$int = (int) $float;
echo $int  . "<br>";
$bool = (bool) $int;
echo $bool;


