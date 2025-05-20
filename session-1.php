<?php
/**
 * DATEL 19 May 2025
 */

// $path = getcwd(); //get real path
$path = '/var/www/html/php-tuts';
$dir = scandir($path); //list of files and directories, return array|bool(false)

/**
 * foreach loop
 */
// foreach ($dir as $key => $value) 
// {
//     /**
//      * if statement
//      */
//     if( $value!='.' && $value!='..' )
//     {
//         echo "Key: " . $key." => Value: ". $value. "<br />";
//     }
// }

// if($dir)
// {
//     $count_of_files = count($dir);

//     for($i=0; $i<$count_of_files; $i++)
//     {
//         echo $dir[$i] ."<br />";
//     }
// } else{
//     echo "Dir: ".$path." non exists";
// }

if(!$dir)
{
    echo "Dir: ".$path." non exists";
    exit;
}

$count_of_files = count($dir);

for($i=0; $i<$count_of_files; $i++)
{
    echo $dir[$i] ."<br />";
}

// $array = [
//     0 => 'A',
//     1 => 'B',
//     2 => 'C',
// ];

// echo $array[0] . $array[1] . $array[2];

// for($i=0; $i<count($array); $i++)
// {
//     echo $array[$i];
// }

#ASSIGNMENT:
#1. Another examples
#2. Another way to count an array