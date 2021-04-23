<!-- Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo  
schema: Olimpia Milano - Cantù | 55-60

Snack 2

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non 
conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga 
un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
 altrimenti “Accesso negato”. -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $matches = [
        [
            "firstTeam" => "Armani Exchange Milano",
            "secondTeam" => "Happy Casa Brindisi",
            "firstTeamPt" => 50,
            "secondTeamPt" => 40
        ],
        [
            "firstTeam" => "Virtus Segafredo Bologna",
            "secondTeam" => "Umana Reyes Venezia",
            "firstTeamPt" => 75,
            "secondTeamPt" => 35,
        ],
        [
            "firstTeam" => "Pallacanestro Trieste",
            "secondTeam" => "Basket Cremona",
            "firstTeamPt" => 80,
            "secondTeamPt" => 85
        ],
        [
            "firstTeam" => "Basket Varese",
            "secondTeam" => "Auxilium Torino",
            "firstTeamPt" => 65,
            "secondTeamPt" => 60
        ],
        [
            "firstTeam" => "De Longhi Treviso",
            "secondTeam" => "Dolomini Energia Trentino",
            "firstTeamPt" => 80,
            "secondTeamPt" => 20
        ]
    ];

    for ($i = 0; $i < count($matches); $i++) {
        echo ($matches[$i]["firstTeam"]);
        echo " - ";
        echo ($matches[$i]["secondTeam"]);
        echo " | ";
        echo ($matches[$i]["firstTeamPt"]);
        echo "-";
        echo ($matches[$i]["secondTeamPt"]);
        echo "<br><br>";
    };

    
    ?>

    


</body>

</html>