<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flowers</title>
    <link rel="stylesheet" href="style.css">
    <script src="lily.js"></script>
</head>

<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <main>
        <h2>Lilies</h2>
        <div class="row">
            <img src="lilyimg/lily1.jpg" alt="spotted white lily" onclick="change01()" class="box-auto">
            <img src="lilyimg/lily2.jpg" alt="yellow lily" onclick="change02()" class="box-auto">
            <img src="lilyimg/lily3.jpg" alt="white lily" onclick="change03()" class="box-auto">
            <img src="lilyimg/lily4.jpg" alt="two yellow lilies" onclick="change04()" class="box-auto">
            <img src="lilyimg/lily5.jpg" alt="red lily" onclick="change05()" class="box-auto">
            <img src="lilyimg/lily6.jpg" alt="red-orange lily" onclick="change06()" class="box-auto">
            <img src="lilyimg/lily7.jpg" alt="pink lily" onclick="change07()" class="box-auto">
            <img src="lilyimg/lily8.jpg" alt="pink-white lily" onclick="change08()" class="box-auto">
            <img src="lilyimg/lily9.jpg" alt="yellow-orange lily" onclick="change09()" class="box-auto">
        </div>
        <div class="main-image lilyimg">
            <img src="lilyimg/lily1.jpg" alt="Lily images" id="large">
        </div>
        <p style="clear:both;"></p>
    </main>
    <footer>
        <?php include 'footer.php';?>
    </footer>
</body>

</html>