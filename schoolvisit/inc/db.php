<?php
    $db['db_host']= 'localhost';
    $db['db_user']= 'diecpdna_pgi';
    $db['db_pass']= 'Orange_2611';
    $db['db_name']= 'diecpdna_pgi';
    

    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }

    $con = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    
    
?>