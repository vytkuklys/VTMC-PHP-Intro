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
        $leduk = 4; 
        $vistienosk = 4.2;  
        $ryziuk = 2.5; 
        $sojosk = 2; 
        $paprikosk = 1; 
        $kiekis2 = 2; 
        $kiekis8 = 8; 
        $kiekis1 = 1;
        echo "<h1>Gedimino pirktu prekiu sarasas</h1>;
        <table>
            <tr>
            <th>Preke</th>
            <th>Vieneto kaina</th>
            <th>Prekiu kiekis</th>
            </tr>
                <td>Ledai</td>
                <td>".number_format($leduk, 2)."€</td>
                <td>".$kiekis1."</td>
            </tr>
            <tr>
                <td>Vistiena</td>
                <td>".number_format($vistienosk, 2)."€</td>
                <td>".$kiekis2."</td>
            </tr>
            <tr>
                <td>Ryziai</td>
                <td>".number_format($ryziuk, 2)."€</td>
                <td>".$kiekis8."(kg)</td>
            </tr>
            <tr>
                <td>Soja</td>
                <td>".number_format($sojosk, 2)."€</td>
                <td>".$kiekis1."</td>
            </tr>
            <tr>
                <td>Zalioji paprika</td>
                <td>".number_format($paprikosk, 2)."€</td>
                <td>".$kiekis2."</td>
            </tr>
        </table>";
        $suma = ($paprikosk + $vistienosk) * $kiekis2 + $ryziuk * $kiekis8 + $sojosk + $leduk;
        echo "<h6>Gediminui visos prekes kainavo: ".number_format($suma, 2)."€</h6>";
    ?>
</body>
</html>