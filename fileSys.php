<?php

    // file system - part 1

    // $quotes = readfile('readme.txt');
    // echo $quotes;

    // $file = 'lyrics.txt';
    // if(file_exists($file)){

    //     // echo readfile($file) . '<br />';

    //     // copy($file, 'quote.txt');

    //     // echo realpath($file)  . '<br />';

    //     // echo filesize($file) . '<br />';

    //     // rename($file, 'imagineDr.txt');
    //     }else{
    //     echo 'file does not exist';
    // }

    // mkdir('lyrics');


    // ROUND 2
    $file = 'lyrics.txt';

    $handle = fopen($file, 'a+');

    // echo fread($handle, filesize($file));
    // echo fread($handle, 112);

    // read a single line
    // echo fgets($handle);
    // echo fgets($handle);
    // if i use twice it wil shown different lines
    
    // read a single character
    // echo fgetc($handle);
    
    fwrite($handle, "\n IMAGINE DRAGON");

    fclose($handle);
    
    unlink($file);

?>
