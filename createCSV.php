<?php

$header = ['date', 'location', 'event'];

//arrays
$file = fopen(__DIR__.'/../../downloads/test.csv', "w") or die("Unable to open file!");
fputcsv($file, $header);
fputcsv($file, ['15-04-1978', 'madrid', 'born']);
fclose($file);

