<!-- continue & breaks -->

<?php 

$users = [
    ['name'=>'User1', 'Job'=>'Job1', 'age'=>12],
    ['name'=>'User2', 'Job'=>'Job2', 'age'=>43],
    ['name'=>'User3', 'Job'=>'Job3', 'age'=>23],
    ['name'=>'User4', 'Job'=>'Job7', 'age'=>41],
    ['name'=>'User5', 'Job'=>'Job3', 'age'=>9],
    ['name'=>'User6', 'Job'=>'Job1', 'age'=>17]
];

foreach($users as $user){
    if($user['Job'] === 'Job7'){
        break;
    }
    if($user['age'] > 18){
        continue;
    }
    
    echo $user['name']. '<br />';
}


?> 

<!DOCTYPE html>
<html>
<head>
    <title>PHP Leraning</title>
</head>
<body>


</body>
</html>

