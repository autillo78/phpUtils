<?php

$string0 = 'hi there';
$string1 = 'how are you?';
$string2 = 'end';

$file = fopen(__DIR__.'/../../downloads/plainFile.txt', "w") or die("Unable to open file!");
fputs($file, "hi there:\n");
fputs($file, "hi there:\n");
fputs($file, "hi there:\n");
fclose($file);