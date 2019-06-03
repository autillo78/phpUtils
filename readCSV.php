<?php

//there are 2 ways
// 1- whole doc (don't use with big files)
// 2- line by line

// getting whole doc
$file = __DIR__.'/../../downloads/test.csv';
$handler = fopen($file, "r") or die('error');
//fread ( resource $handle , int $fileLength ) : string (return string)
$doc = fread($handler, filesize($file));
error_log($doc);
fclose($handler);


//line by line
$file = __DIR__.'/../../downloads/test.csv';
$handler = fopen($file, "r") or die('error');

// feof() function checks if the "end-of-file" (EOF)
// fgets() function is used to read one line from the file, and move the pointer to the next line. 
while(!feof($handler)) {
  error_log( fgets($handler) );
}
fclose($handler);




