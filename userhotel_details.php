<?php 
session_start();
include('DBConnection.php');
include('Details.php');

// Check if user is logged in
if (!isset($_SESSION["uname"])) {
    header("location: ./index.php?logout=1");
    exit();
}

$email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";
include("header2.php");

$result = null;

// Check if 'show' button is clicked
if (isset($_GET['show'])) {
    $email = isset($_GET['email']) ? $_GET['email'] : "";

    $stmt = $conn->prepare("SELECT * FROM hotel WHERE booked_by = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
}

// Check if 'update' (cancel booking) is clicked
if (isset($_GET['update']) && !empty($_GET['update'])) {
    $id = intval($_GET['update']);
    $upd = $conn->prepare("UPDATE hotel SET status='cancelled' WHERE id=?");
    $upd->bind_param("i", $id);
    
    if ($upd->execute()) {
        echo "<script>alert('Hotel booking cancelled successfully');</script>";
    } else {
        echo "<script>alert('Cancellation failed!');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Hotel Booking Status</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="asset/img/logo/rail_icon.png">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/hover-min.css">
    <link rel="stylesheet" type="text/css" href="asset/css/custom.css">
    <script src="asset/js/jquery-3.4.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/validation.js"></script>
    <style>
        .bg-black { background-color: black; }
    </style>
</head>
<body class="alert-light">
    <div class="container">
        <form name="payForm" class="m-5 p-5 border bg-light" action="" method="get">
            <div class="row">
                <div class="col-12">
                    <h4 class="navbar-brand text-primary">Enter Email:</h4>
                </div>
                <div class="col-8">
                    <input class="form-control" type="email" placeholder="Enter your email" name="email" id="email" maxlength="100" required>
                </div>
                <div class="col-4">      
                    <input type="submit" class="btn btn-dark text-light" value="Get Status" name="show">
                </div>
            </div>
        </form>
    </div>

    <div class="container">
        <table class="table table-bordered text-center">
            <?php 
            if (isset($_GET['show']) && $result && $result->num_rows > 0) { ?>
                <tr class="table-primary">
                    <th>ID</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Details</th>
                    <th>Action</th>
                </tr>
                <?php while($data = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['check_in']; ?></td>
                        <td><?php echo $data['check_out']; ?></td>
                        <td><?php echo $data['full_name']; ?></td>
                        <td><?php echo $data['phone_no']; ?></td>
                        <td><?php echo $data['booked_by']; ?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td>
                            <?php
                            $sql = "SELECT * FROM room_category";
                            $room_result = mysqli_query($conn, $sql);

                            if ($room_result && mysqli_num_rows($room_result) > 0) {
                                while ($row = mysqli_fetch_assoc($room_result)) {
                                    echo "
                                    <div class='row border p-2 m-1'>
                                        <div class='col-md-12'>
                                            <h5 class='text-primary'>" . $row['roomname'] . "</h5>
                                            <p>No of Beds: " . $row['no_bed'] . " " . $row['bedtype'] . " bed(s)</p>
                                            <p>Facilities: " . $row['facility'] . "</p>
                                            <p>Price: " . $row['price'] . " tk/night</p>
                                        </div>
                                    </div>
                                    ";
                                }
                            } else {
                                echo "No room details found.";
                            }
                            ?>
                        </td>
                        <td>
                            <a href="userhotel_details.php?update=<?php echo $data['id']; ?>" 
                               class="btn btn-danger text-light" 
                               onclick="return confirm('Are you sure you want to cancel this booking?');">
                                Cancel Booking
                            </a>
                        </td>
                    </tr>
                <?php } 
            } else {
                echo "<tr><td colspan='9' class='text-center text-danger'>No records found or invalid email</td></tr>";
            }
            ?>
        </table>
    </div>

    <?php include('footer.html'); ?>
</body>
</html>
