<!-- loops -->


<?php 

    $people = ['person1','person2','person3','person4'];

    // for ($i=0; $i < count($people) ; $i++) { 
    //     echo $people[$i] . '<br />' ;
    // }

    // foreach($people as $person){
    //     echo $person . '<br />' ;
    // } 

    $users = [
        ['name'=>'User1', 'Job'=>'Job1', 'age'=>12],
        ['name'=>'User2', 'Job'=>'Job2', 'age'=>43],
        ['name'=>'User3', 'Job'=>'Job3', 'age'=>23],
        ['name'=>'User4', 'Job'=>'Job4', 'age'=>41]
    ];

    // foreach($users as $user){
    //     echo $user['name'] . ' - ' .  $user['Job'] . ' - ' .  $user['age'];
    //     echo '<br />';
    // }

    // $i = 0;
    // while($i < count($users)){
    //     echo $users[$i]['name'];
    //     echo '<br />';
    //     $i++;
    // }




?> 

<!DOCTYPE html>
<html>
<head>
    <title>PHP Leraning</title>
</head>
<body>
    <h1>USERS</h1>
    <ul>
        <?php foreach($users as $user ){?>
        <h3> <?php echo $user['name']  ; ?></h3>
        <p> <?php echo $user['Job']  ; ?></p>
        <?php } ?>
    </ul>

</body>
</html>