<?php

$REQUEST_URI = $_SERVER['REQUEST_URI'];

if (preg_match("/(jpg|jpeg|png)$/i", $REQUEST_URI) == 1)
    return false;
else if (preg_match("/^\/pdf$/i", $REQUEST_URI) == 1) { 
 
    include("./testpdf.php");
    
 
    
}
