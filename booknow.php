<?php
    include("DBconnection.php");
    session_start();
    
    $email = $_SESSION["email"];
    $roomname = $_GET['roomname'];

    if (isset($_POST['submit'])) { 
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $firstname = $_POST['fn'];
        $phone = $_POST['pn'];
        $status="Booked";

        if (empty($checkin) || empty($checkout) || empty($firstname) || empty($phone)) {
            echo "<script>alert('All fields are required');</script>";
        } else {
            // Secure SQL query using prepared statement
            $stmt = $conn->prepare("INSERT INTO `hotel` (`status`,`check_in`, `check_out`, `full_name`, `phone_no`, `booked_by`) VALUES (?,?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss",$status,$checkin, $checkout, $firstname, $phone, $email);
            $result = $stmt->execute();

            if ($result) {
                echo "<script>alert('Booking successful!');</script>";
            } else {
                echo "<script>alert('Booking failed. Please try again.');</script>";
            }
        }
    }
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
    <link rel="stylesheet" href="admin/css/reg.css" type="text/css">
    
    <!-- jQuery UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Disable Past Dates -->
    <script>
        $(function() {
            $(".datepicker").datepicker({
                dateFormat: 'yy-mm-dd',
                minDate: 0 // Disable past dates
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            let today = new Date().toISOString().split("T")[0];
            document.getElementById("checkin").setAttribute("min", today);
            document.getElementById("checkout").setAttribute("min", today);
        });
    </script>
</head>

<body>
    <div class="container">
        <img class="img-responsive" src="images/home_banner.jpg" style="width:100%; height:180px;">

        <div class="well">
            <h2>Book Now: <?php echo htmlspecialchars($roomname); ?></h2>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="checkin">Check In:</label>
                    <input type="date" id="checkin" class="form-control datepicker" name="checkin" required>
                </div>

                <div class="form-group">
                    <label for="checkout">Check Out:</label>
                    <input type="date" id="checkout" class="form-control datepicker" name="checkout" required>
                </div>

                <div class="form-group">
                    <label for="name">Enter Your Full Name:</label>
                    <input id="fn" type="text" class="form-control" name="fn" placeholder="John Wick" required>
                </div>

                <div class="form-group">
                    <label for="phone">Enter Your Phone Number:</label>
                    <input id="pn" type="text" class="form-control" name="pn" placeholder="018XXXXXXX" required>
                </div>

                <button type="submit" class="btn btn-lg btn-primary" name="submit">Book Now</button>
                <br>
                <div id="click_here">
                    <a href="index.php">Back to Home</a>
                </div>
            </form>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>
