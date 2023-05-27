<?php
echo "q2-------------------------------------------------------------------------<br>";
$number=0;
for($x =1;$x <=30;$x++){
    $number+=$x;
    echo $x;
}
echo"the sum of the numbers is $number .<br> ";
?>
<?php
echo "Q3:---------------------------------------------------------- <br>";
echo '<br>';

$letters = range('A', 'E');

$row = 5;
$col = 5;

for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        if ($j < $col - $i - 1) {
            echo $letters[0] . ' ';
        } else {
            echo $letters[$i] . ' ';
        }
    }
    echo '<br>';
}
?>
<?php
echo "Q4:---------------------------------------------------------- <br>";
echo '<br>';


$row = 5;
$col = 5;
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        if ($j < $col - $i - 1) {
            echo  '1 ';
        } else {
            echo $i+ 1 . ' ';
        }
    }
    echo '<br>';
}
?>
<?php
echo "Q5:---------------------------------------------------------- <br>";
echo '<br>';


$row = 5;
$col = 5;
for ($i = 0; $i < $row; $i++) {
    for ($j = 0; $j < $col; $j++) {
        if ($i == $j) {
            echo $i+ 1 . ' ';
        } else {
            echo '0';
        }
    }
    echo '<br>';
}
?>
<?php
echo "Q6:---------------------------------------------------------- <br>";
echo '<br>';
$num = 5; // the number to calculate the factorial of
$factorial = 1; // initialize the factorial to 1

for ($i = 1; $i <= $num; $i++) {
  $factorial *= $i; // multiply the factorial by the current number
}

echo "The factorial of $num is: $factorial";
echo '<br>';
?>
<?php
echo "Q7:---------------------------------------------------------- <br>";
echo '<br>';
$num = 9; // the number of Fibonacci numbers to generate
$prev1 = 0; // initialize the first previous number to 0
$prev2 = 1; // initialize the second previous number to 1

echo "The first $num numbers in the Fibonacci sequence are: ";

for ($i = 0; $i < $num; $i++) {
  echo $prev1 . " "; // print the current number in the sequence
  $sum = $prev1 + $prev2; // calculate the next number in the sequence
  $prev1 = $prev2; // update the previous numbers for the next iteration
  $prev2 = $sum;
  echo '<br>';
}
?>
<?php
echo "Q8:---------------------------------------------------------- <br>";
echo '<br>';
$text = "Orange coding Academy"; // the text to search for "c" characters
$count = 0; // initialize the count to 0

for ($i = 0; $i < strlen($text); $i++) {
  if ($text[$i] == "c") { // if the current character is "c", increment the count
    $count++;
  }
}

echo "The number of 'c' characters in the text is: $count";
echo '<br>';
?>
<?php
echo "Q10:---------------------------------------------------------- <br>";
echo '<br>';
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } elseif ($i % 3 == 0) {
        echo "Fizz";
    } elseif ($i % 5 == 0) {
        echo "Buzz";
    } else {
        echo "$i";
    }
}

?>
<?php
echo "Q11:---------------------------------------------------------- <br>";
echo '<br>';
$n = 5; // set the number of lines to generate
$num = 1; // set the starting number

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}
?>
<?php
echo "Q12:---------------------------------------------------------- <br>";
echo '<br>';
$letters = range('A', 'E'); // create an array of letters from A to Z

$n = 5; // set the number of rows to generate

// Generate the top half of the pattern
for ($i = 1; $i <= $n; $i++) {
    // Print spaces before each row
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;";
    }
    // Print letters for each row
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }
    echo "<br>";
}

// Generate the bottom half of the pattern
for ($i = $n - 1; $i >= 1; $i--) {
    // Print spaces before each row
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;";
    }
    // Print letters for each row
    for ($j = 0; $j < $i; $j++) {
        echo $letters[$j] . " ";
    }
    echo "<br>";
}
?>
