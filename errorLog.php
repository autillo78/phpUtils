<?php


//https://www.w3schools.com/Php/func_error_log.asp


//create/write file in a location
error_log("starting proccess", 3, "/var/tmp/error.log");

error_log(getcwd());
error_log(exec('pwd'));
error_log(__DIR__);
error_log('file created: size -> '.filesize(__DIR__.'/../../downloads/plainFile.txt'));

