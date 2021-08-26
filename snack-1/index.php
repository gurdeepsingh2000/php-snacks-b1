

<?php
$teams = [
    [
     "nameHome" => 'Virtus Roma',
     "nameAway" => 'Virtus Bologna',
     "HomePoints" => 58,
     "AwayPoints" => 43
    ],

    [
     "nameHome" => 'Virtus Napoli',
     "nameAway" => 'Virtus Emilia', 
     "HomePoints" => 37,
     "AwayPoints" => 41
    ],
    [
      "nameHome" => 'Virtus Lazio',
      "nameAway" => 'Virtus Firenze',
      "HomePoints" => 12,
      "AwayPoints" => 34
    ]
];



for($x = 0; count($teams) > $x; $x++){
    echo "{$teams[$x]['nameHome']} - {$teams[$x]['nameAway']} | {$teams[$x]['HomePoints']} - {$teams[$x]['AwayPoints']} <br>"; 
}

?>

