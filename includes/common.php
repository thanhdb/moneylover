<?php

session_start();

require 'db.php';
require ROOT . DS . 'models/model.php';

function model($model) {
    static $models = array();
    $model = strtolower($model);
    if (!isset($models[$model])) {
        include FC_DIR . DS . 'models' . DS . $model . '.php';
    }
        
        $model_name = ucfirst($model);
        $models[$model] = new $model_name();
    
    return $models[$model];
}

function isLogged() {
    if (empty($_SESSION['logged'])) {
        return false;
    }
    
    return $_SESSION['logged'];
}

function admin_logged() {
    if (empty($_SESSION['admin_logged'])) {
        return false;
    }
    
    return $_SESSION['admin_logged'];
}

function render($file, $data) {
    extract($data);
    // var_dump($data); die();
    ob_start();
    
    include FC_DIR . DS . 'views' . DS . $file;
    
    ob_end_flush();
    // ob_clean();
}

function isPostRequest() {
    return (strtolower($_SERVER['REQUEST_METHOD']) == 'post');
}

function postData() {
    return $_POST;
}

function redirect($to_url) {
    header('Location: ' . $to_url);
    exit();
}
