<?php
header( "Content-Type: text/html;charset=utf-8" );

define( 'D_ROOT', $_SERVER['DOCUMENT_ROOT'] );

$env = parse_ini_file(D_ROOT . '/.env');

$connect = new mysqli(
    $env['db_host'],
    $env['db_user'],
    $env['db_pass'],
    $env['db_name']
);

if( mysqli_character_set_name( $connect ) !== 'utf8mb4' ){
    $connect->set_charset( 'utf8mb4' );
}

require_once D_ROOT . '/includes/function_db.php';
require_once D_ROOT . '/includes/function_api.php';

$url_path = parse_url($_SERVER['REQUEST_URI'])['path'];
$i = 0;
foreach( explode( '/', $url_path ) as $part ){
    if( ! preg_match('/^[a-zA-Z0-9_-]*$/', $part) ){
        print_error('неправильный запрос, в пути урла есть недопустимые символы');
    }
    define( 'URL'.$i, $part );
    $i++;
}

if( is_file( D_ROOT . '/url/' . URL1 . '/' . URL2 . '.php' ) ){
    require D_ROOT . '/url/' . URL1 . '/' . URL2 . '.php';
    exit;
}elseif( is_file( D_ROOT . '/url/' . URL1 . '.php' ) ){
    require D_ROOT . '/url/' . URL1 . '.php';
    exit;
}

print_error('неправильный запрос, урл пустой');
