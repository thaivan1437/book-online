<?php
session_start();
$session = session_id();
error_reporting(0);
@define('_lib', '../libraries/');
@define(_upload_folder, 'media/upload/');
@define('_source', '../sources/');

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'vi';
}
$lang = $_SESSION['lang']; //Lấy ngỗn ngữ
include_once _source . "lang_$lang.php";
include_once _lib . "config.php";
include_once _lib . "constant.php";
include_once _lib . "functions.php";
include_once _lib . "functions_giohang.php";
include_once _lib . "class.database.php";
include_once _lib . "file_requick.php";
include_once _source . "counter.php";
include_once _source . "useronline.php";
$d= new database($config['database']);