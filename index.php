<?php

// This is Simple MVC for Intership of Phuong Nam Corps
// Author : KhanhND (khanh.nd A_Cong` phuongnamcorps Cham' com)
//       _   _   _    ___    _____             ___     ___              ___    _____              _    
//    _ | | | | | |  / __|  |_   _|    o O O  |   \   / _ \     o O O  |_ _|  |_   _|    o O O   | |   
//   | || | | |_| |  \__ \    | |     o       | |) | | (_) |   o        | |     | |     o        |_|   
//   _\__/   \___/   |___/   _|_|_   TS__[O]  |___/   \___/   TS__[O]  |___|   _|_|_   TS__[O]  _(_)_  
// _|"""""|_|"""""|_|"""""|_|"""""| {======|_|"""""|_|"""""| {======|_|"""""|_|"""""| {======|_| """ | 
// "`-0-0-'"`-0-0-'"`-0-0-'"`-0-0-'./o--000'"`-0-0-'"`-0-0-'./o--000'"`-0-0-'"`-0-0-'./o--000'"`-0-0-' 
//
define('FC_DIR', __DIR__);
// include 'bootstrap.php';
error_reporting(E_ALL ^ E_DEPRECATED);
define('DS', DIRECTORY_SEPARATOR);
define("ROOT", __DIR__ );

require ROOT . DS . 'includes' . DS . 'common.php';


$controller = empty($_GET['c']) ? 'index' : strtolower($_GET['c']);
$method = empty($_GET['m']) ? 'index' : strtolower($_GET['m']);

$c_file = ROOT . DS . 'controllers' . DS . $controller . '.php';
$m_func = $controller . '_' . $method;

if (is_readable($c_file)) {
    include $c_file;
    call_user_func($m_func);
} else {
    die("Page not found !");
}

