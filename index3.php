<!-- arrays --> <!-- multideimensional arrays -->

<?php 
    //  arrays 
    $people= ['person1','person2','person3','person4'];
    // echo $people[1];

    $people2 = array('person1','person2','person3','person4');
    // echo $people2[1];

    $ages = ['12','34','23','52'];
    // print_r($ages);

    $ages[1] = 22;
    // print_r($ages);

    $ages[] = 60;
    // print_r($ages);

    array_push($ages, 70); 
    // print_r($ages);

    // echo count($ages);

    $people3 = array_merge($people, $people2);
    // print_r($people3);

    $matches = ['room1'=>'black', 'room2'=>'white', 'room3'=>'violet'];
    // echo $matches['room2'];
    // print_r($matches);

    $matches2 = array('room4'=>'red','room5'=>'blue');
    // print_r($matches2);
    
    $matches2['room4']= 'pink';
    // print_r($matches2);

    // echo count($matches);

    $matches3 = array_merge($matches, $matches2);
    // print_r($matches3);


    // multideimensional arrays

    // $blogs = ['blog1','blog2','blog3'];

    $blogs = [
        ['name'=>'User1', 'Job'=>'Job1', 'age'=>12],
        ['name'=>'User2', 'Job'=>'Job2', 'age'=>43],
        ['name'=>'User3', 'Job'=>'Job3', 'age'=>23],
        ['name'=>'User4', 'Job'=>'Job4', 'age'=>41]
    ];
    // print_r($blogs);
    // print_r($blogs[1]);
    // print_r($blogs[0][1]);
    // print_r($blogs[2]['name']);
    // echo count($blogs);

    $blogs[] = ['name'=>'User5', 'Job'=>'Job5', 'age'=>54];
    // print_r($blogs);

    $pooped = array_pop($blogs);
    print_r($pooped);
    

?> 

<!DOCTYPE html>
<html>
<head>
    <title>PHP Leraning</title>
</head>
<body>
    

</body>
</html>