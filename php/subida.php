<?php
    $dir = "../galeria/";
    $archivo = $_FILES["archivo"];
    move_uploaded_file($archivo["tmp_name"], $dir . $archivo["name"]);
    chdir("../galeria/");
    if (file_exists('1.jpg')){
        $A = true; 
    }
    else{
        $A = false;
    }
    if (file_exists('2.jpg')){
        $B = true; 
    }
    else{
        $B = false;
    }
    if (file_exists('3.jpg')){
        $C = true; 
    }
    else{
        $C = false;
    }
    if (file_exists('4.jpg')){
        $D = true; 
    }
    else{
        $D = false;
    }

    if ($A == false){
        rename($archivo["name"], '1.jpg');
    }
    else if ($B == false){
        rename($archivo["name"], '2.jpg');
    }
    else if ($C == false){
        rename($archivo["name"], '3.jpg');
    }
    else if ($D == false){
        rename($archivo["name"], '4.jpg');
    }
    else{
        echo "Todo ocupado.";
    }
?>