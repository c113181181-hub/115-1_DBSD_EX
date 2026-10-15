<?php
function printHeader()
{
    echo "<h3>SID: C113181181</h3>";
    echo "<h3>Name: 葉育晉 </h3>";
    echo "<h3>Ex06</h3>";
}
printHeader();
$weight = 75;
$bmi = function ($height) use ($weight) {
    $height = $height / 100.0;
    return $weight/$height/$height;
};

$h=175;
echo"BMI =" . $bmi($h) ."<br/>";