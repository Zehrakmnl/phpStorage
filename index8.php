<!-- funcitons -->

<?php 

$users = [
    ['name'=>'User1', 'Job'=>'Job1', 'age'=>12],
    ['name'=>'User2', 'Job'=>'Job2', 'age'=>43],
    ['name'=>'User3', 'Job'=>'Job3', 'age'=>23],
    ['name'=>'User4', 'Job'=>'Job7', 'age'=>41],
    ['name'=>'User5', 'Job'=>'Job3', 'age'=>9],
    ['name'=>'User6', 'Job'=>'Job1', 'age'=>17]
];
    function saySomething(){
        echo "something";    
    }
    // saySomething();

    function saySomething1($input){
        // echo "something to " . $input; 
        echo "something to $input";    
    }
    // saySomething1('zany');

    function saySomething2($input = 'zany2'){
        // echo "something to " . $input; 
        echo "something to $input";    
    }
    // saySomething2();

    function saySomething3($input = 'zany', $time = 'anythime'){
        echo "something to $input at $time";    
    }
    // saySomething3('me', 'every time');

    function whatsItsJob($user){
        echo "{$user['name']} 's job is {$user['Job']}. <br /";    
    }
    // whatsItsJob( ['name'=>'User1', 'Job'=>'Job1', 'age'=>12]);   
    // $jobFounder =  whatsItsJob( ['name'=>'User1', 'Job'=>'Job1', 'age'=>12]);   
    // echo $jobFounder;

?> 


<!DOCTYPE html>
<html>
<head>
    <title>PHP Leraning</title>
</head>
<body>


</body>
</html>

