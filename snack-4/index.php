<?php 

$students = [

    "Class 1" => [
    [     
        "name" => "Alessio",
        "surname" => "Rossi",
        "votes" => [5,8,9,4,3,10]
    ],
    [
        "name" => "Mario",
        "surname" => "Verdi",
        "votes" => [9,4,3,4,8,10]
    ]
],

    "Class 2" => [
    [
        "name" => "Martina",
        "surname" => "Grigi",
        "votes" => [10,9,8,7,6,5]
    ],
    [
        "name" => "Alessandro",
        "surname" => "Neri",
        "votes" => [2,2,2,2]  
    ]
],

    "Class 3" => [
    [
        "name" => "Marco",
        "surname" => "Gialli",
        "votes" => [1,2,10,9,10]
    ],
    [
        "name" => "Valerio",
        "surname" => "Viola",
        "votes" => [5,6,5,7,9]  
    ]
]
];

    foreach ($students as $key => $element){
        
        foreach($element as $value){     
        $avg_value = array_sum($value['votes']) / count($value['votes']);
        echo ($key) . ' ' . $value['name'] . ' ' . $value['surname'] . ' ' . $avg_value . '<br>';
        }
        
    }


?>