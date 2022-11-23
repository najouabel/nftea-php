<?php
try{
    $db = new PDO('mysql:host=127.0.0.1;dbname=nftea;charset=utf8','root','');
}catch(Exception $e){
    die('msg dyali'.$e->getMessage());
}
?>