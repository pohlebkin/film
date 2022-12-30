<?php

$years_arr = select_many( "SELECT *
FROM `year`
ORDER BY `id`
ASC" );

print_ok([
    'list' => $years_arr,
]);
