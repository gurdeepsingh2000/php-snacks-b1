<?php

$date = [
     
        "31/02/1997" => [ 
                          "title" => "randomized",
                          "author" => "Alessandro",
                          "post" => "test"
                        ],


     
        "29/04/2019" => [
                         "title" => "radomized second",
                         "author" => "Alessio",
                         "post" => "ciao"
        ],


        "25/12/2020" => [
                        "title" => "radomized third",
                        "author" => "word third",
                        "post" => "Typing..."
        ]
]; 

foreach ($date as &$element) {
    
    echo (key($date). ' ' .$element['title'] . ' ' . $element['author']. ' ' . $element['post'].'<br>');
};

?>