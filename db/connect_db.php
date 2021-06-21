<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=posdb','root','mysql');
    //echo 'Connection Successfull';
}catch(PDOException $error){
    echo $error->getmessage();
}


?>