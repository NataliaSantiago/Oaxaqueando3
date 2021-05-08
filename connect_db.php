<?php

define('USER', 'uuj4csglerc2av4og');
define('PASSWORD', 'gYS4I9XHBlpTdnLUMUPt');
define('HOST', 'bttlrstie3bco4jbshqr-mysql.services.clever-cloud.com');
define('DATABASE', 'bttlrstie3bco4jbshqr');
    
    
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>