<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include necessary files
include_once 'include/class.user.php'; 
$user = new User(); 

// Check if form is submitted
if (isset($_REQUEST['submit'])) { 
    extract($_REQUEST); 

    // Debugging: Check if form data is being sent
    echo "<pre>Form Data: ";
    print_r($_POST);
    echo "</pre>";

    // Insert room data
    $result = $user->add_room($roomname, $room_qnty, $no_bed, $bedtype, $facility, $price);

    if ($result) {
        echo "<script>alert('Room Added Successfully');</script>";
    } else {
        echo "<script>alert('Error adding room. Check error log.');</script>";
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
                    <input type="text" class="form-control" name="roomname" placeholder="super delux" required>
                </div>
                <div class="form-group">
                    <label for="qty">No of Rooms:</label>&nbsp;
                    <select name="room_qnty">
                        <?php for ($i = 1; $i <= 10; $i++) echo "<option value='$i'>$i</option>"; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bed">No of Bed:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="no_bed">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bedtype">Bed Type:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="bedtype">
                        <option value="single">single</option>
                        <option value="double">double</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Facility">Facility</label>
                    <textarea class="form-control" rows="5" name="facility"></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price Per Night:</label>
                    <input type="text" class="form-control" name="price" required>
                </div>
                <button type="submit" class="btn btn-lg btn-primary button" name="submit" value="Add Room">Add</button>
                <br>
                <div id="click_here">
                    <a href="../admin.php">Back to Admin Panel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
