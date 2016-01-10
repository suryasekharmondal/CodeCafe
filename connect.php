<?php

    
    error_reporting(0);
    
    $connection = new mysqli("localhost", "cl58-codecafe", "hitwicks!1", "cl58-codecafe");
    
    if($connection->connect_errno) {
        
        die("Sorry, we are having some problems!");
        
    }
    
    

?>