<?php 
session_start();
//  echo $email = $_SESSION['EMAIL'];

include("DBConnection.php");
// $type=$_POST['type'];
// if($type=='email'){
$err1='';
$err2='';
if(isset($_POST['email_verify_otp'])){
	 $otp = $_POST['OTP'];
     $select = mysqli_query($conn,"select * from  user where otp='$otp' and exp_otp>NOW()");
     $res = mysqli_num_rows($select);
   if($res==True){
    $err1="Email is verified.You can login now";
    header("location:login.php");
}else{
    $err2="Please Enter valide OTP";
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
    body{
        background-image: url("image/bg.jpg"); 
    background-size: cover;
    background-position:center;
   /* background:#f0f0f0; */
   /* object-fit:cover; */
   /* height:120%; */
     margin: 0;
     /* display:flex; */
     justify-content:center;
     padding:0;
     align-items:center;
    height: 100vh;
}
        .field_error{
    color:red;
    font-size:18px;
    position:relative;
    
}
i{
            cursor:pointer;
            margin-left:5%;
        }
        /* .bg-black{
            background-color:black;
        } */
        .bg-img{
            background-image: url('asset/img/7.jpg');
            /*background-repeat: no-repeat;*/
            background-size: 100%;
            /* max-width: 1300px; */
            /* min-height: 700px; */
            background-repeat:no-repeat;
            /*opacity: 0.8;*/
        }
        
       
    </style>
</head>

<body class="bg-black">
<?php include('navbar1.html')?>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow bg-img" style="width: 400px;">
       
            <?php if (isset($msg)) {
                echo "<div class='alert alert-success'>$msg<i class='fas fa-x' onclick='this.parentElement.remove()''></i></div>";
            } ?>
            <h3 class="text-center text-light">Verify email</h3>
            <form method="POST" action="" class="update-container">
            <div class="mb-3">
             <label class="form-label">Enter OTP</label>
                    <input type="text" id="otp" name="OTP" class="form-control email_verify_otp" placeholder="Enter OTP " required>
             <div class="field_error"><?php echo $err2 ?></div>
                    </div>
             <button type="submit" class="btn btn-primary w-100 email_verify_otp" name="email_verify_otp">Verify OTP</button>
             <div class="field_error"><?php echo $err1 ?></div>
             </form>
                
            
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   
</body>
</html>