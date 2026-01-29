<?php
// Get the current date in YYYY-MM-DD format
$currentDate = date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disable Previous Dates</title>
</head>
<body>
    <form action="your_form_processing_script.php" method="post">
        <label for="date">Select a Date:</label>
        <input type="date" id="date" name="date" min="<?php echo $currentDate; ?>" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
