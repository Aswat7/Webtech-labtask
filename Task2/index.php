<?php

$nameInput = $_GET['studentName'] ?? "Guest Student";

echo "<h2>Student Information System</h2>";
echo "Input Student Name: " . $nameInput . "<br><br>";


$number = array(87, 93, 64, 76, 90);


$totalStudent = count($number);

echo "Total Students = " . $totalStudent . "<br><br>";



$maxNumber = $number[0];
$minNumber = $number[0];

$passCount = 0;
$failCount = 0;

$total = 0;



function calculateAverage($sum, $count){


    $average = (float)$sum / $count;

    return $average;
}

foreach($number as $num){

    echo "Student Mark = " . $num . " : ";


    if($num >= 50){

        echo "Pass <br>";
        $passCount++;

    }

    else{

        echo "Fail <br>";
        $failCount++;

    }

    $total += $num;

    if($num > $maxNumber){

        $maxNumber = $num;

    }

    if($num < $minNumber){

        $minNumber = $num;

    }

}

$average = calculateAverage($total, count($number));

echo "<br>Total Marks = " . $total . "<br>";

echo "Average Marks = " . $average . "<br>";

echo "Highest Marks = " . $maxNumber . "<br>";

echo "Lowest Marks = " . $minNumber . "<br>";

echo "Total Pass Students = " . $passCount . "<br>";

echo "Total Fail Students = " . $failCount . "<br><br>";

$student = array(

    "name" => "Aswat Shahriar",
    "id" => "23-55250-3",
    "cgpa" => 3.75

);

echo "<h3>Associative Array Output</h3>";

foreach($student as $key => $value){

    echo $key . " : " . $value . "<br>";

}

echo "<br><h3>String Operations</h3>";

echo "Uppercase Name = " . strtoupper($student['name']) . "<br>";

echo "Name Length = " . strlen($student['name']) . "<br>";

sort($number);

echo "<br><h3>Sorted Marks</h3>";

foreach($number as $num){

    echo $num . " ";

}

?>