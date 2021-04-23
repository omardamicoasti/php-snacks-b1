<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Snack 1

    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
    Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
    casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo  
    schema: Olimpia Milano - Cantù | 55-60 -->

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
            "secondTeam" => "Dolomiti Energia Trentino",
            "firstTeamPt" => 80,
            "secondTeamPt" => 20
        ]
    ];

    for ($i = 0; $i < count($matches); $i++) {
        echo ("<li>".$matches[$i]["firstTeam"]." - ");
        echo ($matches[$i]["secondTeam"]." | ");
        echo ($matches[$i]["firstTeamPt"]."-");
        echo ($matches[$i]["secondTeamPt"]."</li>". "<br>");
    };
        
    ?>

    <!-- Snack 2

    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
    conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga
    un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
    altrimenti “Accesso negato”. -->
    
    <?php

        $name = $_GET["name"];
        $mail = $_GET["mail"];
        $age = $_GET["age"];
        // name
        echo "<br><br><br><br><br><br><br><br>";
        if (strlen($name) < 3) {
            echo "Name must be +3 characters"."<br>";
        } else {
            echo "<li>"."Name: ".ucwords($name)."<br>";
        };
        // mail
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "<li>"."Email: ".$mail."<br>";
        } else {
            echo "<li>" . "Mail: must contain . and @";
        }
        // age
        if (filter_var($age, FILTER_VALIDATE_INT)) {
            echo "<li>"."Age: ".$age."<br>";
        } else {
            echo "<li>"."Age: must be + 3";
        }

    ?>




</body>

</html>