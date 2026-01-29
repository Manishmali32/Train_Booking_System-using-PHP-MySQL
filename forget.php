<?php 
session_start();
include('DBConnection.php'); 
$user_id = $_SESSION["uname"];
if(!isset($user_id)){
    header("location:login.php");
    }
   if(isset($_POST['submit'])){
    $current_password = $_POST['password'];
    $newpass= $_POST['newpass'];
    $cpass= $_POST['cpass'];
   $select = "select password from user where id='$user_id'";
   $result = mysqli_query($conn, $select);
   $row = mysqli_fetch_assoc($result);
   if($row['password']!=$current_password){
    $error = "Please enter your current valid password!";
   }else
   if( $newpass != $cpass){
    $error = "Please enter same password";
 }
  else {
    $upd = "update user set password='$newpass',cpassword='$cpass' where id = '$user_id'";
    $chang = mysqli_query($conn,$upd);
   $msg ="Password updated succesfully!";
     }
    }
   
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
         body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        i{
            cursor:pointer;
            margin-left:5%;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 400px;">
            <!-- display message -->
            <?php if (isset($error)) {
                echo "<div class='alert alert-danger'>$error<i class='fas fa-x' onclick='this.parentElement.remove()'></i></div>";
            } ?>
            <?php if (isset($msg)) {
                echo "<div class='alert alert-success'>$msg<i class='fas fa-x' onclick='this.parentElement.remove()''></i></div>";
            } ?>
            <h3 class="text-center my-3">Chanage Password</h3>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Current password</label>
                    <input type="text" name="password" class="form-control" id="current_password">
                </div>
                <span class="field_error" id="current_password_error"></span>
                <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input type="password" name="newpass"  class="form-control" id="new_password" >
                </div>
                <span class="field_error" id="new_password_error"></span>
                <div class="mb-3">
                    <label class="form-label">Confirm New Password</label>
                    <input type="password" name="cpass" id="confirmpassword" class="form-control" id="confirm_new_password" >
                </div>
                <span class="field_error" id="confirm_new_password_error"></span>
                <button type="submit" name="submit" class="btn btn-primary w-100" onclick="update_password()" id="btn_update_password">Reset Password</button>
                <div class="text-center mt-3">
                    <a href="index2.php">Back to Home</a>
                </div>
            </form>
        </div>
    </div>
</body>
<!-- <script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
//     function update_password(){
// 			// jQuery('.field_error').html('');
// 			var current_password=jQuery('#current_password').val();
// 			var new_password=jQuery('#new_password').val();
// 			var confir…