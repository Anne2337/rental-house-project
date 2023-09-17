<?php
include 'database/connection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9e43b5fe15.js" crossorigin="anonymous"></script>

    <title>Admin Add House</title>
    <link rel="stylesheet" href="../all.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./admin.css">
    <!-- <link rel="stylesheet" href="../pages/pages.css"> -->

</head>
<body>
    <header>
        <div class="logo">
            <a href="#">
            <span>HouziLo</span>
            </a>
            <span class="admin">ADMIN</span>
        </div>
        <div class="menu">
            <ul class="menu-items">
                <li><a href="./index.php">Home</a></li>
                <li><a href="./addhouse.php">Add House</a></li>
                <li><a href="./bookings.php">Bookings</a></li>
                <li><a href="./messages.php">Messages</a></li>
                <a href="../"><button>LogOut</button></a>
            </ul>
        </div>
    </header>

    <main>
        <div class="maintitler">
            <p>Add a house</p>
        </div>
        <div class="">
            <div class="left-login red">
                <div class="maintitler">
                </div>

                <div class="loginform">
                    <form action="save_house.php" method="post" class="realform">
                        <label for="">House Name</label>
                        <input type="text" name="house-name" id="house-name">
                        <label for="">House Location</label>
                        <input type="text" name="location" id="location">
                        <label for="">House Price</label>
                        <input type="text" name="price" id="price">
                        <label for="">House amenities</label>
                        <input type="text" name="amineties" id="amineties">
                        <label for="">Tags</label>
                        <input type="text" name="tag" id="tag">
                        <label for="">House Images</label>
                        <input type="file" name="file"  accept=".jpg, .jpeg, .png, .gif, .pdf" required>

                        <br>
                        <br>
                        <label for="">Details</label>
                        <label class="checkbox-container">Swiming Pool
                            <input type="checkbox" name="option1">
                            <span class="checkmark"></span>
                        </label>
                        <label class="checkbox-container">Garden
                            <input type="checkbox" name="option2">
                            <span class="checkmark"></span>
                        </label>

                        <label class="checkbox-container">Parking
                            <input type="checkbox" name="option2">
                            <span class="checkmark"></span>
                        </label>

                        <label class="checkbox-container">Basketball
                            <input type="checkbox" name="option2">
                            <span class="checkmark"></span>
                        </label>

                        <label class="checkbox-container">Gym
                            <input type="checkbox" name="option2">
                            <span class="checkmark"></span>
                        </label>

                        <br><br><br>
                        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="comment"></textarea>
                        <input type="submit" value="Add House">
                    </form>
                </div> 
            </div>
            <div class="right">        
            </div>
        </div>
    </main>    

    <footer>
        Copyright © 2023 | anne. All rights reserved.
    </footer>
</body>
</html>