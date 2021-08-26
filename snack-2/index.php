<?php
$Name = $_GET['name'];
$Mail = $_GET['mail'];
$Age = $_GET['age'];

if(strlen($Name) > 3 && strpos($Mail, '.') !== false && strpos($Mail, '@') !== false && (is_numeric($Age))){
    echo "Access Given!";
}else{
    echo "Access Denied";
}


?>