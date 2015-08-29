<?php 
define('FC_DIR', __DIR__);
require '../bootstrap.php';

$controller = empty($_GET['c']) ? 'index' : strtolower($_GET['c']);
$method = empty($_GET['m']) ? 'index' : strtolower($_GET['m']);

$c_file = __DIR__ . DS . 'controllers' . DS . $controller . '.php';
$m_func = $controller . '_' . $method;


if (is_readable($c_file)) {
    include $c_file;
    call_user_func($m_func);
} else {
    die("Page not found !");
}
?>




