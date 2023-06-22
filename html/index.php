<?php
// http://localhost/phpinfo.php
// http://localhost/xdebug_info.php
// http://localhost/
// http://localhost/hello/fukuoka?XDEBUG_TRIGGER
// http://localhost/clock&XDEBUG_TRIGGER

//register_shutdown_function(function () {
//    $error = error_get_last();
//});
//set_error_handler(function ($errno, $errstr, $errfile, $errline) {
//    $error = [$errstr, 0, $errno, $errfile, $errline];
//});

//echo $wrong_var["missing"];
//throw new Exception(''); // 500

// escape echo function
$ee = function (string $str) {
    echo htmlspecialchars(
        $str . PHP_EOL,
        ENT_QUOTES,
        'UTF-8'
    );
};

// parse URI
$path = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

// Old school App
if (preg_match('#\A/hello/([a-z]+)\z#u', $path, $matches)) {
    $ee("hello {$matches[1]}");

} elseif (preg_match('#\A/clock\z#u', $path)) {
    $dt = new DateTimeImmutable("now", new DateTimeZone('Asia/Tokyo'));
    $ee($dt->format('Y-m-d H:i:s'));

} else {
    $ee("index page");

}

//some dump sample.
//file_put_contents('dump', serialize($_GET));
//$_GET = unserialize(file_get_contents('dump'));


