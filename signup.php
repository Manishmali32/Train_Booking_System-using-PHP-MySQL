<?php
$otp=rand(0000,9999);


?>

OTP verification 
<form action="otp.php">
    <input type="email" name="email" placeholder="Enter your Email" required>
    <input type="hidden" name="otp" value="<?php  echo $otp; ?>">
    <button type="submit">signup</button>
</form>