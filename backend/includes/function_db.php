<?php



/*
выборка одной записи из бд
*/
function select_one( $sql ){
    $result = $connect->query( $sql );
    return $result->fetch_assoc();
}



/*
выборка нескольких записей из бд
*/
function select_many( $sql ){
    $arr = [];

    $result = $connect->query( $sql );

    while( $r = $result->fetch_assoc( ) ){
        $arr[ $r['id'] ] = $r;
    }

    return $arr;
}



/*
свободный sql запрос
*/
function query( $sql ){
    return $connect->query( $sql );
}

