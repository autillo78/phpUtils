<?php


$file_url = __DIR__.'/../../downloads/plainFile.txt';

header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");

// clena the output buffer, (empty memory)
ob_clean();
echo readfile($file_url); 