<!-- variable scope -->

<?php 

// local vars
function myFunc(){
    $price = 10;
    echo $price;
}
// myFunc();

function myFunc2($age){
    echo $age;
}
// myFunc2(44);

// global variables
$name = 'zany';
function myFunc3(){
    global $name;
    $name = 'zany2';
    echo "Hi Guys and you $name";
}
// myFunc3();
// echo $name; 
// when i call myFunc3 function name's value changed to zany2 whic i change in function.
//but if i dont call myFunc3 function, name equal to zany. so it doesnt change

function sayBye(&$name){
    $name = 'zany2';
    echo "bye $name";
}
// sayBye($name);
// echo $name;
?> 


<!DOCTYPE html>
<html>
<head>
    <title>PHP Leraning</title>
</head>
<body>


</body>
</html>

