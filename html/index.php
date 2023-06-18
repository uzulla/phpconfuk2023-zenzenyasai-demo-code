<?php
// http://localhost/phpinfo.php
// http://localhost/xdebug_info.php
// http://localhost/index.php
// http://localhost/index.php?XDEBUG_TRIGGER
// http://localhost/?name=some&XDEBUG_TRIGGER

session_start();

//register_shutdown_function(function () {
//    $error = error_get_last();
//});
//set_error_handler(function ($errno, $errstr, $errfile, $errline) {
//    $error = [$errstr, 0, $errno, $errfile, $errline];
//});

//echo $wrong_var["missing"];
//throw new Exception(''); // 500

$name = $_GET['name'] ?? " John doe";
echo htmlspecialchars("hello {$name}", ENT_QUOTES, 'UTF-8');

