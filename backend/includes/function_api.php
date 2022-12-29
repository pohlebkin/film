<?php


function print_ok( $arr = FALSE ){
    
    if( $arr === FALSE ){
        $arr = [];
    }

    echo json_encode( [
        'status' => 'ok',
    ] + $arr, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT );

    exit;
}


function print_error( $error_str = 'неизвестная ошибка' ){
    
    echo json_encode( [
        'status' => 'error',
        'error'  => $error_str,
    ], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT );

    exit;
}


