<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9e43b5fe15.js" crossorigin="anonymous"></script>

    <title>Admin Page</title>
    <link rel="stylesheet" href="../all.css">
    <link rel="stylesheet" href="./admin.css">
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
            <p>Welcome Back Admin</p>
        </div>

        <div class="aboxes">
            <a href="./addhouse.php">
                <div class="abox abox-1">Add a house</div>
            </a>
            <a href="./bookings.php">
                <div class="abox abox-2">See all bookings</div>
            </a>
            <a href="./messages.php">
                <div class="abox abox-3">See all messages</div></a>
            <a href="../index.php">
                <div class="abox abox-4"> Logout</div>
            </a>
        </div>
    </main>
    
    <footer>
        Copyright © 2023 | anne. All rights reserved.
    </footer>
</body>
</html>