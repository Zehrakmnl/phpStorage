<!-- ternary operators -->

<?php


$score = 50;
//instade of below 
// if($score > 40){
//     echo 'high score!';
// }else{
//     echo 'low score';
// }
//we use below
echo $score > 40 ? 'high score!':'low score';

?>

<!DOCTYPE html>
<html>
<head>
    <title>php tutorial</title>
</head>
<body>

<p><?php echo $score > 40 ? 'high score!':'low score';?></p>    

</body>
</html>