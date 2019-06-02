<?php

//__DIR__ full path from the /
// without __DIR__ we are in the file folder

//strings
$file = fopen(__DIR__.'/../../downloads/plainFile.txt', "w") or die("Unable to open file!");
fputs($file, "string here\n");
fputs($file, "hi there:\n");
fclose($file);