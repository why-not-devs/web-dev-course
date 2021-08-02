<?php

include_once ('app/Student.php');

$array = array( 1, "hello");
print_r($array);
echo $array[1] . PHP_EOL;
$array2 = array();
print_r($array2);
$data = array(
    "name" => "Nicolas",
    "lastName" => "Machuca"
);
print_r($data);

$data["phone"] = "+13456890123";
//array_push($array3, "Hello");
print_r($data);

$test = array_pop($data);
var_dump($test);
print_r($data);
echo count($data) . PHP_EOL . PHP_EOL;

// Stacks (LIFO), Queue(FIFO), Tree, Maps, Hash

$integers = array();


// for loop
for( $i = 0; $i <= 9; $i++) {
    //echo $i + 1 . PHP_EOL;
    $integers[$i] = 2*$i + 1;
}

for( $i = 9; $i >=0; $i--) {
    $integers[$i] = 2*$i +1;
}
print_r($integers);

function factorial( $number )
{
    if($number < 2) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}
  #1,1,2,3,5,8,13,21
function fibonacci( $index ) {
    if($index < 2) {
        return 1;
    } else {
        return fibonacci($index -1) + fibonacci($index - 2);
    }
}

echo factorial(4) . PHP_EOL;

echo fibonacci(7) . PHP_EOL;

$fibonacci = array();
for($i = 1; $i <=20; $i++) {
    array_push($fibonacci, fibonacci($i));
}

print_r($fibonacci);

$student = new Student("Ricardo");
$score1 = new Evaluation(5.5);
$score2 = new Evaluation(6.0);
$score3 = new Evaluation(6.2);
$student->addScore($score1);
$student->addScore($score2);
$student->addScore($score3);
echo $student->calcAverage() . PHP_EOL;