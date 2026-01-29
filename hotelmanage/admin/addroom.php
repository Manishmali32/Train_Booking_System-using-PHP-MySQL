<?php
include_once 'include/class.user.php'; 
$user = new User(); 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Get and sanitize form inputs
    $roomname = trim($_POST['roomname']);
    $room_qnty = intval($_POST['room_qnty']);
    $no_bed = intval($_POST['no_bed']);
    $bedtype = trim($_POST['bedtype']);
    $facility = trim($_POST['facility']);
    $price = trim($_POST['price']);

    // Validate numeric fields
    if (!is_numeric($price) || $price < 0) {
        echo "<script>alert('Invalid price entered');</script>";
    } else {
        $result = $user->add_room($roomname, $room_qnty, $no_bed, $bedtype, $facility, $price);
        if ($result) {
            echo "<script>alert('Room Added Successfully');</script>";
        } else {
            echo "<script>alert('Error: " . htmlspecialchars($result) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reg.css" type="text/css">
</head>

<body>
    <div class="container">
        <div class="well">
            <h2>Add Room Category</h2>
            <hr>
            <form action="" method="post" name="room_category">
                <div class="form-group">
                    <label for="roomname">Room Type Name:</label>
                    <input type="text" class="form-control" name="roomname" placeholder="super deluxe" required>
                </div>
                <div class="form-group">
                    <label for="room_qnty">No of Rooms:</label>
                    <select name="room_qnty" class="form-control">
                        <?php for ($i = 1; $i <= 10; $i++) echo "<option value='$i'>$i</option>"; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_bed">No of Bed:</label>
                    <select name="no_bed" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bedtype">Bed Type:</label>
                    <select name="bedtype" class="form-control">
                        <option value="single">single</option>
                        <option value="double">double</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="facility">Facility:</label>
                    <textarea class="form-control" rows="5" name="facility" placeholder="e.g. WiFi, AC, TV, Breakfast included"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price Per Night:</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Room">Add</button>
                <br><br>
                <div id="click_here">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
