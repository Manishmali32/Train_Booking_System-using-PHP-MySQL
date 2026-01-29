<form action="add_train.php" method="POST">
    Train No: <input type="text" name="train_no" required><br>
    Train Name: <input type="text" name="train_name" required><br>
    Seat Availability: <input type="number" name="seat_avail" required><br>
    Class: <input type="text" name="class" required><br>

    <label>Operating Days:</label><br>
    <input type="checkbox" name="days[]" value="Monday"> Monday
    <input type="checkbox" name="days[]" value="Tuesday"> Tuesday
    <input type="checkbox" name="days[]" value="Wednesday"> Wednesday
    <input type="checkbox" name="days[]" value="Thursday"> Thursday
    <input type="checkbox" name="days[]" value="Friday"> Friday
    <input type="checkbox" name="days[]" value="Saturday"> Saturday
    <input type="checkbox" name="days[]" value="Sunday"> Sunday
    <br>

    <input type="submit" name="submit" value="Add Train">
</form>
