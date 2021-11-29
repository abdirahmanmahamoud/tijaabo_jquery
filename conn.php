<?php
$db = new mysqli('localhost','root','','jquery');

if($db->connect_error){
    echo $db->error;
}else{
}
?>