<?php

$header = ['date', 'location', 'event'];

//arrays
$file = fopen(__DIR__.'/../../downloads/test.csv', "w");
fputcsv($file, $header);
fputcsv($file, ['15-04-1978', 'madrid', 'born']);
fclose($file);

