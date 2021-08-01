<?php

/*
 * Variables:
 *  - variables are 'containers' for storing data.
 *  - variables start with a '$' symbol, followed by the name of the variable
 *  - variables name must start with a letter or the underscore character (numbers or others symbols are not allowed as start character)
 *  - variables are case sensitive
 *  - variable naming conventions suggest multiple words variable names to be written in camel case( see Glossary ).
 *
 *  Glossary:
 *  - Camel case: The practice of writing compound words or phrases such that each word in the middle of the phrase begins with a capital letter, with no intervening spaces or punctuation.
 *    (e.g. camel case => camelCase)
 */
$variable = 'value'; // we are creating a variable of name variable and assigning a text ('value') as the stored data.
$thisIsOtherVariable = 'otherValue'; // this is another variables of name thisIsOtherVariable. Note the camel case use in the naming of the variable.
$Variable = 'value'; // this variable and the one in lowercase are actually two different variables holding the same data, a text with the word 'value'
$variable = 'anotherValue'; // variables stored data can be updated by a re assignment. Here the first variable ($variable) is assign a text with the word 'anotherValue'. The previous held data is now lost.

/*
 * Data Types:
 *  - PHP supports ten primitive types. Of those ten, four are scalar
 *  - The scalar data types are bool, int, float and string.
 *  - boolean expresses a truth value. It can be either true or false.
 *  - int is a non-decimal number between -2,147,483,648 and 2,147,483,647. int values can be written in decimal, hexadecimal, octal and binary.
 *  - float is a number with a decimal point or a number in exponential form.
 *  - string is a sequence of characters. A string can be any text inside quotes(single or double ones).
 *
 * Notes: PHP is a loosely typed languages. PHP automatically associates a data type to the variable, depending on its value.
 */
$boolVariable = true; # example of a bool variable. The value 1 is also interpreted as true. The value 0 is also interpreted as false.
$intVariable = 3; # example of a int variable;
$floatVariable = 3.2; # example of a float variable.
$floatVariable = 3.2e3; # another example of a float variable.
$floatVariable = 7E-10; # yet another example of a float variable.
$stringVariable = 'Hello world!'; # example of a string variable.

/*
 *  Constants:
 *  - constants are identifiers of a scalar data type value
 *  - once a constant is defined, it can never be changed or undefined
 *  - PHP_EOL is a native constant that represents a string break line
 */
const CONSTANT = 'Hello world!'; # example of definition of a constant

/*
 * Operators:
 * - There are many kind of operators in PHP.
 * - Arithmetic operators are useful to do arithmetic operations. These are +, -, *, /, %, ** *
 * - Assignment operators are useful to value assignment to a variable. These are =, +=, -=, *=, /=, %=
 * - Comparison operators returns a truth value. These are ==, ===, !=, <>, !==, >, <, >=, <=, <=>
 * - Increment/decrement operators return a variable and increment its value. These are ++$variable, $variable++, --$variable, $variable--
 * - Logical operators are used to combine comparison operators. These are and, &&, or, ||, xor, !
 * - String operators are used in string processing. These are ., .=
 */
$numberOne = 3;
$numberTwo = 4;
$stringOne = "Hello ";
$stringTwo = "world";
$numberThree = $numberOne + $numberTwo; # arithmetic operator + is addition.
$numberThree = $numberOne - $numberTwo; # arithmetic operator - is subtraction.
$numberThree = $numberOne * $numberTwo; # arithmetic operator * is multiplication.
$numberThree = $numberOne / $numberTwo; # arithmetic operator / is division.
$numberThree = $numberOne % $numberTwo; # arithmetic operator % is modulus.
$numberThree = $numberOne ** $numberTwo; # arithmetic operator ** is exponentiation.
$numberThree = 5; # assignment operator = assign the left operand to the value of the right variable.
$numberThree += $numberOne; # assignment operator += it is the same as expanding to the right operand add the left operand and the result assign it to the left operand (e.g. $x +=$y; => $x = $x + $y;).
$numberThree -= $numberOne; # assignment operator -= it is the same as expanding to the right operand subtracts the left operand and the result assign it to the left operand (e.g. $x -=$y; => $x = $x - $y;).
$numberThree *= $numberOne; # assignment operator *= it is the same as expanding to the right operand multiply the left operand and the result assign it to the left operand (e.g. $x *=$y; => $x = $x * $y;).
$numberThree /= $numberOne; # assignment operator /= it is the same as expanding to the right operand divide the left operand and the result assign it to the left operand (e.g. $x /=$y; => $x = $x / $y;).
$numberThree %= $numberOne; # assignment operator /= it is the same as expanding to the right operand mod the left operand and the result assign it to the left operand (e.g. $x %=$y; => $x = $x % $y;).
$truthValue = $numberOne == $numberTwo; # comparison operator == returns true if both operands hold the same value (both operands are equal).
$truthValue = $numberOne === $numberTwo; # comparison operator === returns true if both operands hold the same value and data type (both operands are identical).
$truthValue = $numberOne != $numberTwo; # comparison operator != returns true if both operands hold different values.
$truthValue = $numberOne <> $numberTwo; # comparison operator <> returns true if both operands hold different values.
$truthValue = $numberOne !== $numberTwo; # comparison operator !== returns true if both operands hold different values or if both operands are not of the same data type.
$truthValue = $numberOne > $numberTwo; # comparison operator > returns true if the left operand value is greater than the right operand value.
$truthValue = $numberOne >= $numberTwo; # comparison operator >= returns true if the left operand value is greater or equal than the right operand value.
$truthValue = $numberOne < $numberTwo; # comparison operator < returns true if the left operand value is lesser than the right operand value.
$truthValue = $numberOne <= $numberTwo; # comparison operator <= returns true if the left operand value is lesser or equal than the right operand value.
$anotherTruthValue = $numberOne <=> $numberTwo; # comparison operator <=> returns a value in (-1,0,1) depending if the left operand is lesser, equal o greater value than the left operand, respectively.
++$numberOne; # increments the operand by one, then returns the operand.
$numberOne++; # returns the operand, then increments the operand by one.
--$numberOne; # decrements the operand by one, then returns the operand.
$numberOne--; # returns the operand, then decrements the operand by one.
$truthValue and $anotherTruthValue; # logical operator and returns true if both operands are true.
$truthValue && $anotherTruthValue; # logical operator && returns true if both operands are true.
$truthValue or $anotherTruthValue; # logical operator || returns true if either one operand is true.
$truthValue || $anotherTruthValue; # logical operator || returns true if either one operand is true.
$truthValue xor $anotherTruthValue; # logical operator xor returns true if either operand is true, but not both.
!$truthValue; # logical operator ! returns true if operand is not true
$stringOne . $stringTwo; # string operator . concatenates two strings.
$stringOne .= $stringTwo; # string operator .= it is the same as expanding to the right operand add the left operand and the result assign it to the left operand (e.g. $x .=$y; => $x = $x . $y;).

/*
 * Output:
 *  - In PHP are several ways to show output in the console
 *  - echo has no return value and can take multiple parameters.
 *  - print has a return value of 1 and can take one argument.
 *  - echo and print can contain HTML markup. Both can be called just with or without parentheses.
 *  - echo is marginally faster than print
 *  - echo and print are used in scalar data type variables.
 *  - using echo can render variables in a double quoted string using {}
 *  - var_dump displays structured information about one or more expressions that includes its type and value.
 */
echo "Hello world!" . PHP_EOL; # example of echo single parameter
echo $stringVariable . PHP_EOL; # example of echo a variable
echo CONSTANT . PHP_EOL; #example of echo a constant
echo "Can you read this?: {$stringVariable}" . PHP_EOL; # render variable inside a double quoted string
echo("Hello world!") . PHP_EOL; # example of echo single parameter with parentheses
echo "Hello ", "world!", PHP_EOL; # example of multi parameter echo
print "Hello world!" . PHP_EOL; # example of print
print("Hello world!") . PHP_EOL; # example of print with parentheses
var_dump($floatVariable) . PHP_EOL; # example of var_dump. This shows the data type and value of the parameter

/*
 * Conditionals
 *  - conditionals statements are used to perform different actions based on different conditions.
 *  - conditionals statements can be used in assignment operators.
 *  - The main conditional statements are if(elseif, else) and switch
 *  - if statements can be nested.
 *  - if statements can have as many elseif as needed.
 *  - match is a conditional assignment function implemented in PHP v.8.0.0
 *  - conditions are expressions that returns a truth value (use of comparison operators)
 */

echo "if statement:" . PHP_EOL;
if($numberOne > $numberTwo) { # PHP will resolve the truth value of the logical operator and if this value is true will proceed
    echo "The variable $numberOne is greater than the variable $numberTwo" . PHP_EOL; # these command gets executed only if the truth value is equal to true.
}
echo "if else statement" . PHP_EOL;
if($numberOne > $numberTwo) { # PHP will resolve the truth value of the logical operator and if this value is true will proceed
    echo "The variable $numberOne is greater than the variable $numberTwo" . PHP_EOL; # these command gets executed only if the truth value is equal to true.
} else { # this will get called if the truth value is false
    echo "The variable $numberOne is lesser or equal than the variable $numberTwo" . PHP_EOL; # these command will get called in any combination if the main if is not true
}
echo "if elseif else statement" . PHP_EOL;
if($numberOne > $numberTwo) { # PHP will resolve the truth value of the logical operator and if this value is true will proceed
    echo "The variable $numberOne is greater than the variable $numberTwo" . PHP_EOL; # these command gets executed only if the truth value is equal to true.
} elseif ($numberOne == $numberTwo) {
    echo "The variable $numberOne is equal than the variable $numberTwo" . PHP_EOL; # these command will get called in any combination if the second condition return a truth value of true and if the first condition did not match.
} else { # this will get called if the previous truths values are false
    echo "The variable $numberOne is lesser than the variable $numberTwo" . PHP_EOL; # these command will get called if both previous conditions returned a truth value of false.
}

echo "Switch statement:" . PHP_EOL;
switch($numberOne <=> $numberTwo) { # evaluate the return value in the condition or variable or the return of a function
    case -1: # this compares the return value with -1. If they are equal then the indented code gets executed
        echo "The variable $numberOne is lesser than the variable $numberTwo" . PHP_EOL;
        break; # this tells PHP to stop processing the switch statement and follow the script normally.
    case 0: # this compares the return value with 0. If they are equal then the indented code gets executed
        echo "The variable $numberOne is equal than the variable $numberTwo" . PHP_EOL;
        break;
    case 1: # this compares the return value with 1. If they are equal then the indented code gets executed
        echo "The variable $numberOne is greater than the variable $numberTwo" . PHP_EOL;
        break;
    default: # this handles every case not considered previously
        break;
}

$response = match($numberOne <=> $numberTwo) { # match accepts comparison operators and expressions (variables and functions)
    -1 => "The variable $numberOne is lesser than the variable $numberTwo", # this compares the return value with -1. If they are equal this string is assigned to the variable response.
    0 => "The variable $numberOne is equal than the variable $numberTwo", # this compares the return value with 0. If they are equal this string is assigned to the variable response.
    1 => "The variable $numberOne is greater than the variable $numberTwo",  # this compares the return value with 1. If they are equal this string is assigned to the variable response.
    default => "" # this string is assigned only if all previous comparisons fail.
};
echo "Match statement = " . $response . PHP_EOL;

/*
 * Functions
 * - A PHP function is similar than the math concept of a function.
 * - A function can be thought as a part of machinery in a factory process. The machine receives input and outputs a result which allows to continue the process.
 * - The idea of the function is the application of abstraction and DRY (Don't repeat yourself). Abstraction is referred as a parametrization of a process.
 *   We will see this concept often in the future. If in our scripting we notice we repeat the same code with different details or variables that code can be, and it is recommended,
 *   to write as a function.
 * - A function is a subprocess of your scripting. In order to be used you need to define it before calling it.
 * - A function can be called multiple times.
 * - A function input are called parameters.
 * - A function variable has its own scope (local).
 * - PHP natively have many built-in functions which we will learn in progress across this course.
 */

// Let's assume you are challenged with calculate the average score in 3 test of a students and output the result.
// You will need variables to hold the score result of each test and then calculate the average.
// The following could be your code.
// Example 1:
$scoreOne = 60; # test 1 score
$scoreTwo = 55; # test 2 score
$scoreThree = 62; # test 3 score
$averageScore = ($scoreOne + $scoreTwo + $scoreThree) / 3; # calc average score
echo "Example 1 average score = " . $averageScore . PHP_EOL; # output result
// We have successfully completed the task but now we need to repeat it with 2 more students.
// This means nine scores (3 per student) and to output the score average of each student.
// The following could be your code
// Example 2
$scoreOneStudentOne = 60; # test 1 score student 1
$scoreTwoStudentOne = 55; # test 2 score student 1
$scoreThreeStudentOne = 62; # test 3 score student 1
$averageScoreStudentOne = ($scoreOneStudentOne + $scoreTwoStudentOne + $scoreThreeStudentOne) / 3; # calc average score student 1
$scoreOneStudentTwo = 80; # test 1 score student 2
$scoreTwoStudentTwo = 40; # test 2 score student 2
$scoreThreeStudentTwo = 42; # test 3 score student 2
$averageScoreStudentTwo = ($scoreOneStudentTwo + $scoreTwoStudentTwo + $scoreThreeStudentTwo) / 3; # calc average score student 2
$scoreOneStudentThree = 70; # test 1 score student 3
$scoreTwoStudentThree = 65; # test 2 score student 3
$scoreThreeStudentThree = 42; # test 3 score student 3
$averageScoreStudentThree = ($scoreOneStudentThree + $scoreTwoStudentThree + $scoreThreeStudentThree) / 3; # calc average score student 3
echo "Example 2 student 1 average score = " . $averageScoreStudentOne . PHP_EOL; # output result student 1
echo "Example 2 student 2 average score = " . $averageScoreStudentTwo . PHP_EOL; # output result student 2
echo "Example 2 student 3 average score = " . $averageScoreStudentThree . PHP_EOL; # output result student 3
// The previous script works just fine but we find that we are repeating the same process over and over for the number of students required
// One thing in programming is scalability. This concept means that we need to think, as programmers, what if tomorrow a fourth student is included.
//  This would mean to create variables for that hypothetical student and write in short four lines of code. One for each score and one for the output.
// What we will do is create a function which simplify things for us.
// Example 3
function calcAverage($scoreOne, $scoreTwo, $scoreThree): float { # function is a reserved word used to define functions.
    return ($scoreOne + $scoreTwo + $scoreThree) / 3;
}
echo "Example 3 student 1 average score = " . calcAverage(60,55,62) . PHP_EOL; # output result student 1
echo "Example 3 student 2 average score = " . calcAverage(80, 40, 42). PHP_EOL; # output result student 2
echo "Example 3 student 3 average score = " . calcAverage(70, 65, 42) . PHP_EOL; # output result student 3
// The previous example holds new information so lets take our time and look at it by parts.
// We have created a function with the name of calcAverage. This function requires three parameters (the three scores)
// In between the curly brackets "{}" is the process which this function do. In this case sum all three parameters and the result divide it by 3.
// The reserved word return means to define the output of this function.
// The input of this function are the three scores and the output is the average.
// In the first line we can see the parameters are defined between parentheses. The order is not important in the definition but it is in the call.
// The call of a function occurs when we use it like in line 219 where we use calcAverage. Here the order of parameters is important. In the same line 60 would be the $scoreOne; 55, the $scoreTwo; 62, the $scoreThree.
// The variables $scoreOne, $scoreTwo and $scoreThree are created when calling the function, the value of the parameters is assigned to the function variables. Once the function process is finished these variables are deleted.
// This is another reason to use functions. The creation of multiple variables can heighten the memory consumption in the script execution.
// When we echo the call function we are echoing the output of that function process.
// In the function definition (line 216) at the end of the parameters is the syntax ": float". This defines the data type of the output.
// In this case because we are calculating average could happen (in most cases) that we are not returning an integer.
// Let's change the code once more
// Example 4
function calcAverageOutput(string $studentName,int $scoreOne,int $scoreTwo,int $scoreThree): void { # function is a reserved word used to define functions.
    echo "Example 4 " . $studentName . " average score = " . calcAverage($scoreOne, $scoreTwo, $scoreThree) . PHP_EOL;
}
calcAverageOutput('student 1', 60,55,62);
calcAverageOutput('student 2', 80, 40, 42);
calcAverageOutput('student 3', 70, 65, 42);
// Let's talk about the example 4
// Functions can be called inside other functions.
// We added a fourth parameter as the student name
// We added a data type for each parameter. This in not necessary but it is recommended.
// The return type is void because we are not using the return reserved word. Void means that the function does not return a value. This is different returns a null value.
// If we are asked to add a fourth student now it would only be add one line.
// What we did through all these examples is abstract the functionality. By our definition abstraction as a parametrization of a process.
// In this case we had four variables for each process/student: student name, score one, score two, score three.
// What we did is parametrize the process in the shape of a function.
// Remembers that this outputs the same result as the example 2 but is more concise, readable and scalable.
// NOTE: constant have global scope. This means that a constant can be accessed inside a function without having them defined as a parameter.

// In functions you can pass parameters by value (what we have been doing so far) and by reference.
// In the case of parameters by value the global variable does not change based in the function process.
// In the case of parameters by reference the global variable does change based in the function process.
// Example parameters by value
function increase($num): void {
    $num +=2;
}
$numberOne = 3;
increase($numberOne);
echo "Parameter by value => " . $numberOne . PHP_EOL; # The variable $numberOne does not get affected. Output is 3.
// Example parameters by value
function decrease(&$num): void { # The symbol & is prefixed to the variable
    $num -=2;
}
$numberOne = 3;
decrease($numberOne);
echo "Parameter by reference => " . $numberOne . PHP_EOL; # The variable $numberOne does get affected. Output is 1.

/*
 * Native string functions
 * - We will see some of the native functions (built-in in PHP) to work with strings.
 * - There are many functions but we will see them in time.
 * - The native functions are the most efficient ones in time and memory consumption. Try to use them above user defined functions.
 */

// str_repeat => repeats a string a specified number of times
$stringOne = "Hello ";
echo "str_repeat => " . str_repeat($stringOne, 2) . PHP_EOL;
// strlen => returns the length of a string.
echo "strlen => " . strlen($stringOne) . PHP_EOL;
// strrev => reverses a string.
echo "strrev => " . strrev($stringOne) . PHP_EOL;
// strtolower => converts a string to lowercase.
echo "strtolower => " . strtolower($stringOne) . PHP_EOL;
// strtoupper => converts a string to uppercase.
echo "strtoupper => " . strtoupper($stringOne) . PHP_EOL;
// ucfirst => converts the first character of a string to uppercase
$stringTwo = "hello world!";
echo "ucfirst => " . ucfirst($stringTwo) . PHP_EOL;
// ucwords => converts the first character of each word in a string to uppercase
echo "ucwords => " . ucwords($stringTwo) . PHP_EOL;
// Like we previously state, functions can be nested
echo "str_repeat->strrev->ucwords => " . str_repeat(strrev(ucwords($stringTwo)), 2) . PHP_EOL;

/*
 * Native numeric functions
 * - We will see some of the native functions (built-in in PHP) to work with numbers.
 * - There are many functions but we will see them in time.
 * - The native functions are the most efficient ones in time and memory consumption. Try to use them above user defined functions.
 */

// sqrt => returns the square root of a number.
$numberOne = 16;
echo "sqrt => " . sqrt($numberOne) . PHP_EOL;
// round => rounds a floating-point number.
$numberTwo = 16.49;
echo "round => " . round($numberTwo) . PHP_EOL;
// ceil => rounds a number UP to the nearest integer, if necessary.
echo "ceil => " . ceil($numberTwo) . PHP_EOL;
// floor => rounds a number DOWN to the nearest integer, if necessary.
$numberTwo = 16.87;
echo "floor => " . floor($numberTwo) . PHP_EOL;

/*
 * Exceptions
 * - Exceptions are a way to control and prevent PHP errors. When a script encounters one error the script stops.
 * - Exception are a class (we will see about that in the future) and have many types of Exception. When unsure you can use Exception as the type which includes all others.
 * - Exceptions are thrown by functions. Let's revisit our example 4 function code to make a final version.
 * - We know we need a positive integer as a score value. So we could edit our function to validate this using a exception.
 * - Exceptions are caught in a try catch statement
 */

// Example 4
function calcAverageOutputWithExceptions(string $studentName, int $scoreOne, int $scoreTwo, int $scoreThree): void {
    if( $scoreOne <= 0 || $scoreTwo <= 0 || $scoreThree <= 0) {
        throw new Exception('Score values must be positive integers.'); # if any score is less or equal than 0 then we will throw an exception
    }
    echo "Example 4 " . $studentName . " average score = " . calcAverage($scoreOne, $scoreTwo, $scoreThree) . PHP_EOL;
}
calcAverageOutput('student 1', 60,55,62);
calcAverageOutput('student 2', 80, 40, 42);
try{ # we are trying to call a function who throws an exceptions (or multiple)
    calcAverageOutputWithExceptions('student 3', -3, -5, -7);
} catch (Exception $e) { # if the exception is found the message is shown
    echo $e->getMessage() . PHP_EOL;
}
calcAverageOutput('student 4', 70, 65, 42); # if the exception is catch this is shown as usual
calcAverageOutputWithExceptions('student 5', -3, -5, -7); # call to the exception function without try catch
calcAverageOutput('student 6', 80, 40, 42); # These is not shown because an unhandled exception was found

