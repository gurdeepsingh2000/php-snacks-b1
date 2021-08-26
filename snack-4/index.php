<?php 

$students = [

    "Class1" => [     
        "name" => "Alessio",
        "surname" => "Rossi",
        "votes" => [5,8,9,4,3,10]
    ],
    [
        "name" => "Mario",
        "surname" => "Verdi",
        "votes" => [9,4,3,4,8,10]
    ],

    "Class2" => [
        "name" => "Martina",
        "surname" => "Grigi",
        "votes" => [10,9,8,7,6,5]
    ],
    [
        "name" => "Alessandro",
        "surname" => "Neri",
        "votes" => [2,2,2,2]  
    ],

    "Class3" => [
        "name" => "Marco",
        "surname" => "Gialli",
        "votes" => [1,2,10,9,10]
    ],
    [
        "name" => "Valerio",
        "surname" => "Viola",
        "votes" => [5,6,5,7,9]  
    ]
];

    foreach ($students as &$element){
        for($i = 0; count($element["votes"]) > $i; $i++){
            $avg_vote = array_sum($element["votes"]) / count($element["votes"]);
        }
        echo(key($students) . ' ' . $element['name'] . ' ' . $element['surname']  . $avg_vote . '<br>');
    }


?>