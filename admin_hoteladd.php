<?php


// this page helps admin to add trains in db
session_start();

include('DBConnection.php');

// checked whther user login or logout
if(isset($_SESSION["admin_uname"])){
        header("location: ./Adminlogin.php?logout=1");
}
include("adminheader2.html"); 

if(isset($_POST['add'])){
    $hotel_name = $_POST['hotel_name'];
    $location  =$_POST['hotel_location'];
    $hotel_image = $_FILES['image']['name'];
  
    $hotel_tmp = $_FILES['image']['tmp_name'];
    $folder="./uplode/".$hotel_image;

    $inserthotel="INSERT INTO `hotel_add`(`id`, `hotel_name`, `hotel_location`, `hotel_image`) VALUES ('','$hotel_name','$location','$hotel_image')";
    $result=mysqli_query($conn,$inserthotel);
    move_uploaded_file($hotel_tmp, $folder);

    if($result){
        echo "<script>alert('Hotel Add Succesfully');</script>";
    }
    else{
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="row">
<div class="col-12 col-sm-3">    
    	   <?php include("adminmenu.html"); ?>
        </div>
        <div class="col-12 col-sm-9">
            <form action=""enctype="multipart/form-data" method="post" name="train" onsubmit="return(validtrain())">
                <div class="row bg-light m-3 p-4 border-radius">
                    <!-- 1st row -->
                    <div class="col-sm-6 col-md-3">
                        <div class="text-main ">
                            <h5>Hotel Name<span class="text-red text-strong">&nbsp;*&nbsp;</span>:</h5>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="text-main input-group">
                            <input class="form-control" type="text" id="trainnoid" name="hotel_name" maxlength="5">
                        </div>
                        <!-- er_pass1 code -->
                        <div  class="text-red">
                            <span id="er_trainno"></span>
                        </div>
                    </div>
                    <!--  -->
                    <div class="col-sm-6 col-md-3">
                        <div class="text-main ">
                            <h5>location<span class="text-red text-strong">&nbsp;*&nbsp;</span>:</h5>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="text-main input-group">
                            <input name="hotel_location" type="text" id="trainnameid" class="form-control" >
                        </div>
                        <!-- er_pass1 code -->
                        <div  class="text-red">
                            <span id="er_trainname"></span>
                        </div>
                    </div>

                    <!--  -->
                    <div class="col-12"><hr></div>
                    <div class="col-sm-6 col-md-3">
                        <div class="text-main ">
                            <h5>Image<span class="text-red text-strong">&nbsp;*&nbsp;</span>:</h5>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="text-main input-group">
                            <input type="file" id="seatid" name="image" class="form-control" >
                        </div>
                        <!-- er_pass1 code -->
                        <div  class="text-red">
                            <span id="er_seat"></span>
                        </div>
                    </div>

                    
                        <div class="text-main input-group">
                            <input class="btn btn-success" type="submit" value="Add Details" name="add">
                        </div>
                    </div>

                    

                </div> <!-- row ends -->
                    
            </form>
        </div>
    </div></div>
</body>
</html>
