<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fly to the Limit | Booking</title>
    <meta name="author" content="name">
    <meta name="description" content="Fly to the Limit booking page.">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>
<body>
<header class="page-header">
    <a href="index.php"><img class="logo" src="images/fttl-logo.png" alt="Fly to the Limit"></a>
</header>
<div id="page-container">
<form id="booking-form" method="post" action="index.php" novalidate>
    <div id="top-row">
    
    <!--Passengers forms begin here-->
    <!--Primary-->

    <div id="passengers__form--primary">
        <h2>Passenger 1</h2>
        <p>This will be the contact person for the group</p>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <span id="firstname-error"></span>
            <input class="form-control" id="firstname" type="text" name="firstname" required minlength="2">
        </div>

        <div class="form-group">
            <label for="lastname">Last Name</label>
            <span id="lastname-error"></span>
            <input class="form-control" id="lastname" type="text" name="lastname" required>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <span id="age-error"></span>
            <input class="form-control" id="age" type="number" name="age" min="0" required>
        </div>

        <div class="form-group">
            <label for="weight">Weight</label>
            <span id="weight-error"></span>
            <input class="form-control" id="weight" type="number" name="weight" min="0" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <span id="email-error"></span>
            <input class="form-control" id="email" type="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone">Contact Number</label>
            <span id="phone-error"></span>
            <input class="form-control" id="phone" type="number" name="phone" required>
        </div>

    </div>
        
        <div class="package-details">
        <div class="form-group">
            <h2>Fly to the Limit Experiences</h2>
            <label for="service">Select Your Experience</label>
            <span id="service-error"></span>
            <select class="form-control" id="service" name="service" required>
                <option value="default" selected>Select Experience...</option>
                <option value="fixed">Fixed Wing Scenic Flight</option>
                <option value="heli">Helicopter Scenic Flight</option>
                <option value="glider">Sailplane Soaring Experience</option>
                <option value="scenic-one">One Hour Scenic</option>
                <option value="scenic-two">Two Hour Scenic</option>
                <option value="mountain">Sunset Mountain Tour</option>
                <option value="lake">Lake Trip</option>
                <option value="photo">Photographic</option>
            </select>
        </div>

        <div class="form-group">
            <label for="location">Departure Location</label>
            <span id="location-error"></span>
            <select class="form-control" id="location" name="location" required>
                <option value="default" selected>Select Departure Location...</option>
                <option value="queenstown">Queenstown</option>
                <option value="wanaka">Wanaka</option>
            </select>
        </div>
            
        <div class="form-group">
            <label for="day">Date (dd/mm/yyyy)</label>
            <span id="day-error"></span>
            <input class="form-control" id="day" type="text" name="day" required>            
        </div>
            
        <div class="form-group">
            <label for="time">Departure Time</label>
            <span id="time-error"></span>
            <select class="form-control" id="time" name="time" required>
                <option value="default" selected>Select Departure Time</option>
                <option value="nine">09:00</option>
                <option value="twelve">12:00</option>
            </select>
        </div>

        <div class="form-group">
            <label for="passengers">Select Number of Passengers</label>
            <input class="form-control" id="passengers" type="range" name="passengers" value="1" min="1" max="7">
            <h3 id="passengers-value">1</h3>
        </div>
    </div>
</div>


    <!--Secondary-->

    <div id="secondary-passengers">
        <div class="passengers__form hide">
            <h2>Passenger 2</h2>
            <div class="form-group">
                <label for="firstname2">First Name</label>
                <span id="firstname2-error"></span>
                <input class="form-control" id="firstname2" type="text" name="firstname2" required>
            </div>

            <div class="form-group">
                <label for="lastname3">Last Name</label>
                <span id="lastname2-error"></span>
                <input class="form-control" id="lastname2" type="text" name="lastname2" required>
            </div>

            <div class="form-group">
                <label for="age2">Age</label>
                <span id="age2-error"></span>
                <input class="form-control" id="age2" type="number" name="age2" min="0" required>
            </div>

            <div class="form-group">
                <label for="weight2">Weight</label>
                <span id="weight2-error"></span>
                <input class="form-control" id="weight2" type="number" name="weight2" min="0" required>
            </div>
        </div>
        <div class="passengers__form hide">
            <h2>Passenger 3</h2>
            <div class="form-group">
                <label for="firstname3">First Name</label>
                <span id="firstname3-error"></span>
                <input class="form-control" id="firstname3" type="text" name="firstname3" required>
            </div>

            <div class="form-group">
                <label for="lastname3">Last Name</label>
                <span id="lastname3-error"></span>
                <input class="form-control" id="lastname3" type="text" name="lastname3" required>
            </div>

            <div class="form-group">
                <label for="age3">Age</label>
                <span id="age3-error"></span>
                <input class="form-control" id="age3" type="number" name="age3" min="0" required>
            </div>

            <div class="form-group">
                <label for="weight3">Weight</label>
                <span id="weight3-error"></span>
                <input class="form-control" id="weight3" type="number" name="weight3" min="0" required>
            </div>
        </div>
        <div class="passengers__form hide">
            <h2>Passenger 4</h2>
            <div class="form-group">
                <label for="firstname4">First Name</label>
                <span id="firstname4-error"></span>
                <input class="form-control" id="firstname4" type="text" name="firstname4" required>
            </div>

            <div class="form-group">
                <label for="lastname4">Last Name</label>
                <span id="lastname4-error"></span>
                <input class="form-control" id="lastname4" type="text" name="lastname4" required>
            </div>

            <div class="form-group">
                <label for="age4">Age</label>
                <span id="age4-error"></span>
                <input class="form-control" id="age4" type="number" name="age4" min="0" required>
            </div>

            <div class="form-group">
                <label for="weight4">Weight</label>
                <span id="weight4-error"></span>
                <input class="form-control" id="weight4" type="number" name="weight4" min="0" required>
            </div>
        </div>
        <div class="passengers__form hide">
            <h2>Passenger 5</h2>
            <div class="form-group">
                <label for="firstname5">First Name</label>
                <span id="firstname5-error"></span>
                <input class="form-control" id="firstname5" type="text" name="firstname5" required>
            </div>

            <div class="form-group">
                <label for="lastname5">Last Name</label>
                <span id="lastname5-error"></span>
                <input class="form-control" id="lastname5" type="text" name="lastname5" required>
            </div>

            <div class="form-group">
                <label for="age5">Age</label>
                <span id="age5-error"></span>
                <input class="form-control" id="age5" type="number" name="age5" min="0" required>
            </div>

            <div class="form-group">
                <label for="weight5">Weight</label>
                <span id="weight5-error"></span>
                <input class="form-control" id="weight5" type="number" name="weight5" min="0" required>
            </div>
        </div>
        <div class="passengers__form hide">
            <h2>Passenger 6</h2>
            <div class="form-group">
                <label for="firstname6">First Name</label>
                <span id="firstname6-error"></span>
                <input class="form-control" id="firstname6" type="text" name="firstname6" required>
            </div>

            <div class="form-group">
                <label for="lastname6">Last Name</label>
                <span id="lastname6-error"></span>
                <input class="form-control" id="lastname6" type="text" name="lastname6" required>
            </div>

            <div class="form-group">
                <label for="age6">Age</label>
                <span id="age6-error"></span>
                <input class="form-control" id="age6" type="number" name="age6" min="0" required>
            </div>

            <div class="form-group">
                <label for="weight6">Weight</label>
                <span id="weight6-error"></span>
                <input class="form-control" id="weight6" type="number" name="weight6" min="0" required>
            </div>
        </div>
        <div class="passengers__form hide">
            <h2>Passenger 7</h2>
            <div class="form-group">
                <label for="firstname7">First Name</label>
                <span id="firstname7-error"></span>
                <input class="form-control" id="firstname7" type="text" name="firstname7" required>
            </div>

            <div class="form-group">
                <label for="lastname7">Last Name</label>
                <span id="lastname7-error"></span>
                <input class="form-control" id="lastname7" type="text" name="lastname7" required>
            </div>

            <div class="form-group">
                <label for="age7">Age</label>
                <span id="age7-error"></span>
                <input class="form-control" id="age7" type="number" name="age7" min="0" required>
            </div>

            <div class="form-group">
                <label for="weight7">Weight</label>
                <span id="weight7-error"></span>
                <input class="form-control" id="weight7" type="number" name="weight7" min="0" required>
            </div>
        </div>
        </div>


        <div class="form-group">
            <h2 id="total">Total Price = $0</h2>
            <button id="submit-btn" type="submit">Submit</button>
        </div>

</form>
</div>

<?php include 'includes/nav.php';?>
</section>
    <script src="js/booking.js"></script>
</body>
</html>