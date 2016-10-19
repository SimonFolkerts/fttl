<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fly to the Limit | Home</title>
    <meta name="author" content="name">
    <meta name="description" content="Fly to the Limit scenic flights in Queenstown and Wanaka.">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
    <div id="video-container">
    <video id="landing-video" width="100" autoplay loop>
            <source src="videos/mountainsky.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>
<section id="landing">    
    <img id="landing__logo" src="images/fttl-logo.png" alt="Fly to the Limit">
    <h1 id="landing__imperative">SOAR</h1>
    <div id="blurb" class="hide">
        <div id="blurb__circle">
            <div id="blurb__text-wrapper">
                <h3 id="blurb__h3">Placeholder</h3>
                <p id="blurb__p"><span id="blurb__span">Blueplaceholder</span>Placeholder</p>
            </div>
            <a href="services.php" id="blurb__button">FIND OUT MORE</a>
        </div>
    </div>
    <div id="canvas-wrapper">
        <canvas id="canvas" width="1200" height="600"></canvas>
    </div>
    <div id="mouseover-listener"></div>
    <div id="mouseover-cover"></div>
    <div class="icon-container-wrapper">
        <div class="icon-container">
            <div class="icon">
                <img src="images/caravan-icon.png" id="caravan-img" class="icon__img" alt="Caravan Amphibian">
            </div>
            <div class="icon">
                <img src="images/skyhawk-icon.png" id="skyhawk-img" class="icon__img" alt="Skyhawk">
            </div>
            <div class="icon">
                <img src="images/glider-icon.png" id="glider-img" class="icon__img" alt="Glider">
            </div>
            <div class="icon">
                <img src="images/jetranger-icon.png" id="jetranger-img" class="icon__img" alt="Jetranger Helicopter">
            </div>
            <div class="icon">
                <img src="images/extra-icon.png" id="extra-img" class="icon__img" alt="Extra 200">
            </div>
        </div>
    </div>
</section>
<?php include 'includes/nav.php';?>
<section id="index-section">
    <div id="page-container">
        <div class="index-text">
        <h2>Fly to the Limit</h2>
            <img class="index-text__icon" src="images/caravan-icon-blue.png" alt="Caravan Amphibian">
        <p>Operating out of Queenstown and Wanaka, FTTL offers tourists a range of scenic
        flights in both fixed wing aircraft and helicopters, as well as high adventure
        in a stunt plane, or the most peaceful flight experience possible in a glider
        high above the mountains. They specialise in one off charters, and delivery and
        pickup for trampers, also providing a provisioning service for fresh supplies
        during long excursions.</p>
        </div>
        <video width="100%" controls loop>
            <source src="videos/clouds.mp4" type="video/mp4">
            <img src="images/sky.jpg" alt="cloudy sky" title="Your browser does not support the <video> tag.">            
        </video>
        Stock footage by <a href="http://www.Videezy.com">Videezy</a>
    </div>
</section>
    <script src="js/icons.js"></script>
</body>
</html>
