<?php


//https://www.php.net/manual/en/function.fopen.php

// 'w' 
// Open for writing only; place the file pointer at the beginning of the file and truncate the file to zero length. 
// If the file does not exist, attempt to create it. 
$handler = fopen(__DIR__.'/../../downloads/plainFile.txt', "w");
fputs($handler, "string here\n"); //strings
//fputs alias of fwrite
fputs($handler, "hi there:\n");
fclose($handler);

// "a"
// Open a file for write only. The existing data in file is preserved. 
// File pointer starts at the end of the file. 
// Creates a new file if the file doesn't exist
$handler = fopen(__DIR__.'/../../downloads/plainFile.txt', "a");
fputs($handler, "\n");
fputs($handler, "added later.");
fclose($handler);
