<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flowers</title>
    <link rel="stylesheet" href="style.css">
    <script src="orchid.js"></script>
</head>

<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <h2>Orchids</h2>
        <div class="column">
            <img src="orchidimg/orchid1.jpg" alt="Orchid" class="box-zero" onclick="change01()">
            <img src="orchidimg/orchid2.jpg" alt="Orchid" class="box-zero" onclick="change02()">
            <img src="orchidimg/orchid3.jpg" alt="Orchid" class="box-zero" onclick="change03()">
            <img src="orchidimg/orchid4.jpg" alt="Orchid" class="box-zero" onclick="change04()">
            <img src="orchidimg/orchid5.jpg" alt="Orchid" class="box-zero" onclick="change05()">
            <img src="orchidimg/orchid6.jpg" alt="Orchid" class="box-zero" onclick="change06()">
            <img src="orchidimg/orchid7.jpg" alt="Orchid" class="box-zero" onclick="change07()">
            <img src="orchidimg/orchid8.jpg" alt="Orchid" class="box-zero" onclick="change08()">
            <img src="orchidimg/orchid9.jpg" alt="Orchid" class="box-zero" onclick="change09()">
        </div>
        <div class="main-image right">
            <img src="orchidimg/orchid1.jpg" alt="Orchid images" id="large">
        </div>
        <p style="clear:both;"></p>
    </main>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</body>

</html>