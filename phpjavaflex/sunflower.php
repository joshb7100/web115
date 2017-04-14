<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flowers</title>
    <link rel="stylesheet" href="style.css">
    <script src="sunflower.js"></script>
</head>

<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <h2>Sunflowers</h2>
        <div class="column-reverse">
            <img src="sunflowerimg/sunflower1.jpg" alt="Sunflower" class="box-flex" onclick="change01()">
            <img src="sunflowerimg/sunflower2.jpg" alt="Sunflower" class="box-flex" onclick="change02()">
            <img src="sunflowerimg/sunflower3.jpg" alt="Sunflower" class="box-flex" onclick="change03()">
            <img src="sunflowerimg/sunflower4.jpg" alt="Sunflower" class="box-flex" onclick="change04()">
            <img src="sunflowerimg/sunflower5.jpg" alt="Sunflower" class="box-flex" onclick="change05()">
            <img src="sunflowerimg/sunflower6.jpg" alt="Sunflower" class="box-flex" onclick="change06()">
            <img src="sunflowerimg/sunflower7.jpg" alt="Sunflower" class="box-flex" onclick="change07()">
            <img src="sunflowerimg/sunflower8.jpg" alt="Sunflower" class="box-flex" onclick="change08()">
            <img src="sunflowerimg/sunflower9.jpg" alt="Sunflower" class="box-flex" onclick="change09()">
        </div>
        <div class="main-image left">
            <img src="sunflowerimg/sunflower1.jpg" alt="Sunflower images" id="large">
        </div>
        <p style="clear:both;"></p>
    </main>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</body>

</html>