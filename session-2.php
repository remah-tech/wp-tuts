<?php
/**
 * DATE 20 May 2025
 */

// $path = getcwd(); //get real path
$path = '/var/www/html/php-tuts';
$dir = scandir($path); //list of files and directories, return array|bool(false)

#basename()
/**
 * basename($path, $suffix(optional))
 */

$basename = basename($path);
// echo $basename;

#copy()
/**
 * copy(source(from), destination(to))
 */
// $file = "sources/test1.txt";
// $file_backup = "sources/destination/test1.txt";

// if( copy($file, $file_backup) )
// {
//     echo "Done";
// } else {
//     echo "Failed";
// }

// if( !copy($file, $file_backup) )
// {
//     echo "Failed";
// }

#fopen()
#fwrite()
#fclose()
/**
 * fopen(source_file(filename), mode): source|false
 * fclose(source)
 * fwrite(resource(stream), data): int|false
 */

 $file_2 = "sources/test1.txt";
 $mode = 'w';
 /**
  * r
  * r+
  * w
  * w+
  * a
  * a+
  */

 //open stream in (x) mode
 $fp = fopen($file_2, $mode);

if( !fwrite($fp, PHP_EOL . 'Hello again') )
{
    echo "Failed";
    exit;
}

// if( !fwrite($fp, "\nHello again\t\t\t\t\t\talaa") )
// {
//     echo "Failed";
//     exit;
// }

echo "Success";

//close stream
 fclose($fp);


# Assignment
#1. Use many ways (modes) to open or write the file
#2. Study file_exists
#3. file_get_contents
#4. file_put_contents