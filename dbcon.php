<?php
$con= new mysqli('localhost','root','','haris');
if($con){
    echo 'connection is successful';
}else{
        echo 'connection is not successful';
}
?>
