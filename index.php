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
    <h1>Seimos biudzetas</h1>
    <div class="container">
        <div>
        <?php echo '
            <div id="myslide">
                <div id="one">
                    <img src="images/ar.jpg" alt="">
                </div>
                <div id="two">
                    <img src="images/ma.jpg" alt="">
                </div>
            </div>'
        ?>
        <p>Vardas: Loreta</p>
        <p>Pirkiniu apzvalga: 
        <?php $link_address1 = 'loreta.php';
            echo "<a href ='".$link_address1."'>spausti cia</a>"
        ?></p>
        <p>Papildoma informacija: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed ante enim. Aenean lacinia in nisi eget commodo.</p>
        </div>
        <div>
        <?php 
            echo "<img src=\"images/te.jpg\" alt=\"man fishing\">" 
        ?>
        <p>Vardas: Gediminas</p>
        <p>Pirkiniu apzvalga: 
        <?php 
        $link_address2 = 'gediminas.php';
            echo "<a href ='".$link_address2."'>spausti cia</a>"
        ?>
        </p>
        <p>Papildoma informacija: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed ante enim. Aenean lacinia in nisi eget commodo.</p>
        </div>
        <div>
        <?php 
            echo "<img src=\"images/se.jpg\" alt=\"woman and a husky\">"?>     
        <p>Vardas: Gintare</p>
        <p>Pirkiniu apzvalga: 
        <?php 
        $link_address3 = 'gintare.php';
            echo "<a href ='".$link_address3."'>spausti cia</a>"
        ?></p>
        <p>Papildoma informacija: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed ante enim. Aenean lacinia in nisi eget commodo.</p>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>
