<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Day from Date</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 50px; }
        input, button { margin: 10px; padding: 10px; }
    </style>
</head>
<body>
    <h2>Find the Day of the Week</h2>
    <label for="dateInput">Select a Date:</label>
    <input type="date" id="dateInput">
    <button onclick="findDay()">Find Day</button>
    <p id="result"></p>

    <script>
        function findDay() {
            let dateValue = document.getElementById("dateInput").value;
            if (dateValue) {
                let day = new Date(dateValue).toLocaleDateString('en-US', { weekday: 'long' });
                document.getElementById("result").innerText = "The selected date falls on a " + day;
            } else {
                document.getElementById("result").innerText = "Please select a date.";
            }
        }
    </script>
</body>
</html>