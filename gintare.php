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
        $salotuk = 1; 
        $braskiuk = 4.2;  
        $mandarinok = 0.2; 
        $avokadok = 1.2; 
        $obuoliok = 0.4; 
        $kiekis3 = 3; 
        $kiekis9 = 9; 
        $kiekis20 = 20;
        $kiekis2 = 2;
        echo "<h1>Gintares pirktu prekiu sarasas</h1>;
        <table>
            <tr>
            <th>Preke</th>
            <th>Vieneto kaina</th>
            <th>Prekiu kiekis</th>
            </tr>
                <td>Aisbergo salotos</td>
                <td>".number_format($salotuk, 2)."€</td>
                <td>".$kiekis2."</td>
            </tr>
            <tr>
                <td>Braskes</td>
                <td>".number_format($braskiuk, 2)."€</td>
                <td>".$kiekis3."(kg)</td>
            </tr>
            <tr>
                <td>Mandarinai</td>
                <td>".number_format($mandarinok, 2)."€</td>
                <td>".$kiekis20."</td>
            </tr>
            <tr>
                <td>Obuoliai</td>
                <td>".number_format($obuoliok, 2)."€</td>
                <td>".$kiekis9."</td>
            </tr>
            <tr>
                <td>Avokadai</td>
                <td>".number_format($avokadok, 2)."€</td>
                <td>".$kiekis3."</td>
            </tr>
        </table>";
        $suma = ($avokadok + $braskiuk) * $kiekis3 + $obuoliok * $kiekis9 + $mandarinok * $kiekis20 + $salotuk * $kiekis2;
        echo "<h6>Gintarei visos prekes kainavo: ".number_format($suma, 2)."€</h6>";
    ?>
</body>
</html>