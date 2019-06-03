<?php

$header = ['date', 'location', 'event'];

$file = fopen(__DIR__.'/../../downloads/test.csv', "w") or die("Unable to open file!");
fputcsv($file, $header); //arrays
fputcsv($file, ['15-04-1978', 'madrid', 'born']);
fclose($file);

