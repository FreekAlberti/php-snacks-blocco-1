<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
    $matches = [
        [
        "casa" => "Atlanta Hawks",
        "ospiti" => "Boston Celtics",
        "punteggio-casa" => 50,
        "punteggio-ospiti" => 48    
        ],
        [
        "casa" => "Chicago Bulls",
        "ospiti" => "Miami Heats",
        "punteggio-casa" => 64,
        "punteggio-ospiti" => 43    
        ],
        [
        "casa" => "Detroit Pistons",
        "ospiti" => "Orlando Magic",
        "punteggio-casa" => 46,
        "punteggio-ospiti" => 51    
        ],
        [
        "casa" => "Toronto Raptors",
        "ospiti" => "Charlotte Hornets",
        "punteggio-casa" => 72,
        "punteggio-ospiti" => 47    
        ]
    ];

    for ($i = 0; $i < count($matches); $i++) {
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Matches giornata odierna</h1>
    
</body>
</html>
