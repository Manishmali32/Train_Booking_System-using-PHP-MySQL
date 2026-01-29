<?php
session_start();
ob_start(); // Prevent output issues before headers are sent

include_once 'admin/include/class.user.php';  

// Initialize the user object and database connection
$user = new User();
if (!isset($user) || !$user->db) {
    die("Database connection error.");
}

// Safely retrieve session variables (prevent warnings)
$roomname = $_SESSION['roomname'] ?? '';
$no_bed = $_SESSION['no_bed'] ?? '';
$facility = $_SESSION['facility'] ?? '';
$price = $_SESSION['price'] ?? '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel Booking</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"> <!-- Fixed HTTPS -->

    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        body {
            background-image: url('images/home_bg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        h4 {
            color: #ffbb2b;
        }
        h6 {
            color: navajowhite;
            font-family: monospace;
        }
    </style>
</head>
<body>
<div class="container">
    <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="room.php">Room &amp; Facilities</a></li>
                <li><a href="reservation.php">Online Reservation</a></li>
                <li><a href="review.php">Review</a></li>
                <li><a href="Adminlogin.php">Admin</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.facebook.com"><img src="images/facebook.png"></a></li>
                <li><a href="http://www.twitter.com"><img src="images/twitter.png"></a></li>
            </ul>
        </div>
    </nav>

    <?php
    // Fetch room categories
    $sql = "SELECT * FROM room_category";
    $result = mysqli_query($user->db, $sql);

    if (!$result) {
        die("Query Failed: " . mysqli_error($user->db));
    }

    if (mysqli_num_rows($result) > 0) {
        // Loop through each room category
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
            <div class='row'>
                <div class='col-md-3'></div>
                <div class='col-md-6 well'>
                    <h4>" . htmlspecialchars($row['roomname']) . "</h4><hr>
                    <h6>No of Beds: " . htmlspecialchars($row['no_bed']) . " " . htmlspecialchars($row['bedtype']) . " bed.</h6>
                    <h6>Facilities: " . htmlspecialchars($row['facility']) . "</h6>
                    <h6>Price: " . htmlspecialchars($row['price']) . " tk/night.</h6>
                </div>
                <div class='col-md-3'>
                    <a href='./booknow.php?roomname=" . urlencode($row['roomname']) . "'>
                        <button class='btn btn-primary button'>Book Now</button>
                    </a>
                </div>
            </div>";
        }
    } else {
        echo "<div class='alert alert-warning text-center'>No rooms available.</div>";
    }
    ?>

</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
