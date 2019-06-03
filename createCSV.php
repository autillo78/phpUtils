<?php

$header = ['date', 'location', 'event'];

$handler = fopen(__DIR__.'/../../downloads/test.csv', "w") or die("Unable to open file!");
fputcsv($handler, $header); //arrays
fputcsv($handler, ['15-04-1978', 'madrid', 'born']);
fclose($handler);

