<?php
// http://localhost/phpinfo.php
// http://localhost/xdebug_info.php
// http://localhost/index.php
// http://localhost/index.php?XDEBUG_TRIGGER
// http://localhost/?name=some&XDEBUG_TRIGGER

//register_shutdown_function(function () {
//    $error = error_get_last();
//});
//set_error_handler(function ($errno, $errstr, $errfile, $errline) {
//    $error = [$errstr, 0, $errno, $errfile, $errline];
//});

//echo $wrong_var["missing"];
//throw new Exception(''); // 500

$name = $_GET['name'] ?? " John doe";

//some dump sample.
//file_put_contents('dump', serialize($_GET));
//$_GET = unserialize(file_get_contents('dump'));

$dt = new DateTimeImmutable("now", new DateTimeZone('Asia/Tokyo'));
echo htmlspecialchars(
    "hello {$name}, it's {$dt->format('Y-m-d H:i:s')}" . PHP_EOL,
    ENT_QUOTES,
    'UTF-8'
);

