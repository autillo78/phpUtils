<?php

//__DIR__ full path from the /
// without __DIR__ we are in the file folder

//strings
$file = fopen(__DIR__.'/../../downloads/plainFile.txt', "w");
fputs($file, "string here\n");
fputs($file, "hi there:\n");
fclose($file);

// "a"
// Open a file for write only. The existing data in file is preserved. 
// File pointer starts at the end of the file. 
// Creates a new file if the file doesn't exist

$file = fopen(__DIR__.'/../../downloads/plainFile.txt', "a");
fputs($file, "\n");
fputs($file, "added later.");
fclose($file);