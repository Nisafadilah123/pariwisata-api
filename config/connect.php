<?php

    define('HOST','localhost');
    define('USER', 'root');
    define('PASS','');
    define('DB','pariwisata_tubes');

    $con = mysqli_connect(HOST,USER,PASS,DB) or die('unable to connect');
    
?>