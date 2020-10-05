<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php
    $matches = [
        [
        "casa" => "Atlanta Hawks",
        "ospiti" => "Boston Celtics",
        "punteggioCasa" => 50,
        "punteggioOspiti" => 48    
        ],
        [
        "casa" => "Chicago Bulls",
        "ospiti" => "Miami Heats",
        "punteggioCasa" => 64,
        "punteggioOspiti" => 43    
        ],
        [
        "casa" => "Detroit Pistons",
        "ospiti" => "Orlando Magic",
        "punteggioCasa" => 46,
        "punteggioOspiti" => 51    
        ],
        [
        "casa" => "Toronto Raptors",
        "ospiti" => "Charlotte Hornets",
        "punteggioCasa" => 72,
        "punteggioOspiti" => 47    
        ]
    ];
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
    <div>    
        <?php
            for ($i = 0; $i < count($matches); $i++) {
                echo $matches[$i]["casa"]." - ".$matches[$i]["ospiti"]." | ".$matches[$i]["punteggioCasa"]." - ".$matches[$i]["punteggioOspiti"];
            }
        ?>
    </div>
</body>
</html>
