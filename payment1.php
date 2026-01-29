<?php 

session_start();
include("DBConnection.php"); 
include("Details.php");

if (!isset($_SESSION["uname"])) {
    header("location: ./index.php?logout=1");
    exit();
}

$uname = $_SESSION["uname"];

if (isset($_SESSION["pnr"])) {
    $pnr = $_SESSION["pnr"];
}

include("header2.php");

if (isset($_POST['continue1'])) {
    $src = $_POST['src'];
    $dest = $_POST['dest'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $station_no = $_POST['station_no'];
    $train_name = $_POST['train_name'];
    $train_no = $_POST['train_no'];
    $dep_time = $_POST['dep_time'];
    $arr_time = $_POST['arr_time'];
    $duration = $_POST['duration'];
    $email = $_POST['email'];

    // Fetch ticket details from database
    $sql = "SELECT pnr, ticket_no, status FROM ticket WHERE pnr = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $pnr);
    $stmt->execute();
    $result = $stmt->get_result();
    $ticket = $result->fetch_assoc();

    if ($ticket) {
        // Prepare ticket details for email
        $ticketDetails = "
            PNR: {$ticket['pnr']}
            Ticket No: {$ticket['ticket_no']}
            Train No: {$train_no}
            Train Name: {$train_name}
            Source: {$src}
            Destination: {$dest}
            Class: {$class}
            Journey Date: {$date}
            Departure: {$dep_time}
            Arrival: {$arr_time}
            Duration: {$duration}
            Status: {$ticket['status']}
        ";

        // Send email
        $subject = "Train Ticket Confirmation - PNR: {$ticket['pnr']}";
        $headers = "From: no-reply@trainticket.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($email, $subject, $ticketDetails, $headers)) {
            echo "<p>Ticket confirmation email sent successfully to $email.</p>";
        } else {
            echo "<p>Failed to send email. Please check email settings.</p>";
        }
    } else {
        echo "<p>Ticket not found!</p>";
    }
}
?>
