<?php
echo "Q1:---------------------------------------------------------- <br>";
echo '<br>';
$colors = array('red', 'green', 'white');
// $random_keys = array_rand($colors, 3);

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the " . $colors[0] . " carpet, the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $paragraph;
echo '<br>';

?>
<?php

echo "Q2:---------------------------------------------------------- <br>";
echo '<br>';
$colors1 = array('red', 'green', 'white');

echo "<ul>";
foreach ($colors1 as $color) {
    echo "<li> " . $color . "</li>";
}
echo "</ul>";

?>
<?php
echo "Q3:---------------------------------------------------------- <br>";
echo '<br>';
$cities= array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid"
);
asort($cities);

foreach ($cities as $country => $capital) {
    echo "The capital of " . $country . " is " . $capital . "<br>";
}
echo '<br>';
echo "Q4:---------------------------------------------------------- <br>";
echo '<br>';
?>
<?php
$color = array (4 => 'white', 6 => 'green', 11=> 'red');



echo $color[4];

?>
<?php
echo '<br>';
echo "Q5:---------------------------------------------------------- <br>";
echo '<br>';
// define an array
$numbers = array(1, 2, 3, 4, 5);

// define the position where the new item should be inserted
$position = 3;

// define the new item to be inserted
$newItem = '$';

// insert the new item at the specified position in the array
array_splice($numbers, $position, 0, $newItem);

// print out the modified array
foreach ($numbers as $number) {
    echo $number . ' ';
}

?>
<?php
echo '<br>';
echo "Q6:---------------------------------------------------------- <br>";
echo '<br>';
// define an array
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"
);
asort($fruits);
foreach ($fruits as $fruites => $word){
    echo  $fruites . "=". $word ."<br>";
}



?>
<?php
echo '<br>';
echo "Q7:---------------------------------------------------------- <br>";
echo '<br>';
// define an array
$number = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
65, 64, 68, 73, 75, 79, 73);
$average =  array_sum($number)/count($number);
sort($number);
$first = array_slice($number , 0 ,5);
$last= array_slice($number , -5);

echo"Average Temperature is:".$average."<br>";
echo'List of five lowest temperatures: ' . implode(', ', $first) . '<br>';
echo 'List of five highest temperatures: ' . implode(', ', $last). '<br>';
?>
<?php
echo '<br>';
echo "Q8:---------------------------------------------------------- <br>";
echo '<br>';
// define an array
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo"<pre>";
print_r(array_merge($array1,$array2));
?>
<?php
echo '<br>';
echo "Q9:---------------------------------------------------------- <br>";
echo '<br>';
function uppercaseArray($array) {
    $uppercaseArray = array_map('strtoupper', $array);
    return $uppercaseArray;
}

$colors = array("red", "blue", "white", "yellow");
$uppercaseColors = uppercaseArray($colors);
print_r($uppercaseColors);




?>
<?php
echo '<br>';
echo "Q10:---------------------------------------------------------- <br>";
echo '<br>';
function lowercassarray($array) {
    $uppercaseArray = array_map('strtolower', $array);
    return $uppercaseArray;
}

$colors = array("RED","BLUE", "WHITE","YELLOW");
$lowercassarrays = lowercassarray($colors);
print_r($lowercassarrays);

?>

<?php
echo '<br>';
echo "Q11:---------------------------------------------------------- <br>";
echo '<br>';
for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . ", ";
    }
}
?>



<?php
echo '<br>';
echo "Q12:---------------------------------------------------------- <br>";
echo '<br>';
$words = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $words);
echo " the shortest length " .min($new_array) . "tle longest length " .max($new_array) . '.';

?>

<?php
echo '<br>';
echo "Q13:---------------------------------------------------------- <br>";
echo '<br>';
$n = range(11,20);
shuffle($n) ;
for($x=0; $x<10; $x++)// 10 numbers needed
{
  echo $n[$x].' ';
  }
  echo "\n"
?>


<?php
echo '<br>';
echo "Q14:---------------------------------------------------------- <br>";
echo '<br>';
$values=array(2, 0, 10, 12, 6);
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print(min_values_not_zero($values));

?>

<?php
echo '<br>';
echo "Q15:---------------------------------------------------------- <br>";
echo '<br>';
function bubble_sort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

$input_array = array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3);
echo "Input array : ";
print_r($input_array);

$sorted_array = bubble_sort($input_array);
echo "Sorted array : ";
print_r($sorted_array);
?>

<?php
echo '<br>';
echo "Q15:---------------------------------------------------------- <br>";
echo '<br>';
function columns($uarr)
{
$n=$uarr;
if (count($n) == 0)
 return array();
else if (count($n) == 1)
 return array_chunk($n[0], 1);
array_unshift($uarr, NULL);
 $transpose = call_user_func_array('array_map', $uarr);
return array_map('array_filter', $transpose);
}
function bead_sort($uarr)
{
foreach ($uarr as $e)
 $poles []= array_fill(0, $e, 1);
return array_map('count', columns(columns($poles)));
}
echo 'Original Array : '.'
';
print_r(array(5,3,1,3,8,7,4,1,1,3));
echo '
'.'After Bead sort : '.'
';
print_r(bead_sort(array(5,3,1,3,8,7,4,1,1,3)));
?>
<?php
echo '<br>';
echo "Q16:---------------------------------------------------------- <br>";
echo '<br>';

function floorDec($number, $precision, $separator)
// $number: The number to be rounded.
// $precision: The number of decimal places to round to.
// $separator: The decimal separator to use.
{
$number_part=explode($separator, $number);//The $number is first split into two parts, the integer part and the decimal part, using the explode() function.
$number_part[1]=substr_replace($number_part[1],$separator,$precision,0);//The $separator is then inserted into the decimal part at the specified precision using the substr_replace() function.
if($number_part[0]>=0)
{$number_part[1]=floor($number_part[1]);}//The floor() or ceil() function is then used to round the decimal part depending on whether the integer part is positive or negative.
else
{$number_part[1]=ceil($number_part[1]);}

$ceil_number= array($number_part[0],$number_part[1]);
return implode($separator,$ceil_number);// the integer and decimal parts are concatenated back using the implode() function and the rounded number is returned.
}
print_r(floorDec(1.155, 2, ".")."\n");
print_r(floorDec(100.25781, 4, ".")."\n");
print_r(floorDec(-2.9636, 3, ".")."\n");
?>


<?php
echo '<br>';
echo "Q17:---------------------------------------------------------- <br>";
echo '<br>';

$list1 = "4, 5, 6, 7";
$list2 = "4, 5, 7, 8";

$list = explode(",", $list1 . "," . $list2);// Combine the two lists and split into an array
$result = array_unique($list);// Remove any duplicates
sort($result);//and sort the resulting array

 echo implode("," , $result);// Print the final sorted list as a comma-separated string
?>

<?php
echo '<br>';
echo "Q18:---------------------------------------------------------- <br>";
echo '<br>';
$input =array(4, 5, 6, 7, 4, 7, 8);
print_r(array_unique($input));

?>
<?php
echo '<br>';
echo "Q19:---------------------------------------------------------- <br>";
echo '<br>';
$array1 = array('a','1','2','3','4');
$array2 = array('a','3');
 if (array_intersect($array2,$array1)=== $array2)// the intersect order is important
 {
  echo"array2 is asubset array of array 1";
 }else{
 echo"its not asubset";
 }