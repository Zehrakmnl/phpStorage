<!-- conditional statements -->

<?php 

// $salary = 15;
// if($salary < 10){
//     echo 'the condition is met';
// }elseif($salary < 30){
//     echo 'elseif condition is met';
// }else {
//     echo 'condition not met';
// }

$users = [
    ['name'=>'User1', 'Job'=>'Job1', 'age'=>12],
    ['name'=>'User2', 'Job'=>'Job2', 'age'=>43],
    ['name'=>'User3', 'Job'=>'Job3', 'age'=>23],
    ['name'=>'User4', 'Job'=>'Job1', 'age'=>41],
    ['name'=>'User5', 'Job'=>'Job3', 'age'=>9],
    ['name'=>'User6', 'Job'=>'Job1', 'age'=>17]
];
// echo '<h1>' . 'accepted users' . '</h1>'. '<br />';
// foreach($users as $user){
//     if($user['age']>18 && $user['Job']='Job1'){
//         echo $user['name'] . ' - '. $user['age']. ' - ' .$user['Job'] . '<br />';
//     }
// }
// echo '<h1>' . 'unaccepted users' . '</h1>'. '<br />';
// foreach($users as $user){
//     if($user['age']<18 || $user['Job']='Job3'){
//         echo $user['name'] . ' - '. $user['age']. ' - ' .$user['Job'] . '<br />';
//     }
// }

?> 

<!DOCTYPE html>
<html>
<head>
    <title>PHP Leraning</title>
</head>
<body>
    <?php foreach($users as $user){ ?>
        <?php if($user['age']>18){?>
        <li> <?php echo $user['name']; ?> </li>
        <?php }?>
    <?php }?>

</body>
</html>

