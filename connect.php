<?php

    
    error_reporting(0);
    
    $connection = new mysqli("localhost", "codecafe", "password", "codecafe");
    
    if($connection->connect_errno) {
        
        die("Sorry, we are having some problems!");
        
    }
    
    

?>
