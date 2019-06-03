<?php


$file_url = __DIR__.'/../../downloads/plainFile.txt';


header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");
//header("Content-Description: File Transfer");

header('Content-Type: application/octet-stream');
//header("Content-Type: application/zip");
//header("Content-type: text/plain");
//header("Content-Type: application/msword");

// clean the output buffer, (empty memory)
ob_clean();
echo readfile($file_url); 