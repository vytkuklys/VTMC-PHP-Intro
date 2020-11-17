<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <?php
        $sokoladok = 1.5; 
        $pienok = 1;  
        $avizosk = 0.8; 
        $kavosk = 4.2; 
        $obuoliuk = 0.4; 
        $kiekis2 = 2; 
        $kiekis7 = 7; 
        $kiekis1 = 1;
        echo "<h1>Loretos pirktu prekiu sarasas</h1>;
        <table>
            <tr>
            <th>Preke</th>
            <th>Vieneto kaina</th>
            <th>Prekiu kiekis</th>
            </tr>
                <td>Sokoladas</td>
                <td>".number_format($sokoladok, 2)."€</td>
                <td>".$kiekis2."</td>
            </tr>
            <tr>
                <td>Pienas</td>
                <td>".number_format($pienok, 2)."€</td>
                <td>".$kiekis1."</td>
            </tr>
            <tr>
                <td>Avizos</td>
                <td>".number_format($avizosk, 2)."€</td>
                <td>".$kiekis2."</td>
            </tr>
            <tr>
                <td>Obuoliai</td>
                <td>".number_format($obuoliuk, 2)."€</td>
                <td>".$kiekis7."</td>
            </tr>
            <tr>
                <td>Kava</td>
                <td>".number_format($kavosk, 2)."€</td>
                <td>".$kiekis1."</td>
            </tr>
        </table>";
        $suma = ($sokoladok + $avizosk) * $kiekis2 + $obuoliuk * $kiekis7 + $kavosk + $pienok;
        echo "<h6>Loretai visos prekes kainavo: ".number_format($suma, 2)."€</h6>";
    ?>
</body>
</html>