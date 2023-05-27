<?php
$x=2; //global scope
function test1(){
    global $x;
    echo $x;
}
function test2(){
// global $x;
// $x =5;
// echo $x;
}
test1();
test2();

?>