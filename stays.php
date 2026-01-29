<?php 

    session_start();
    include("DBConnection.php");

    // checked whther user login or logout
    if(isset($_SESSION["uname"])){
        $uname = $_SESSION["uname"];
            // echo "<script> alert('$uname'); </script>";
            include("header2.php");
    }
    else{
            include("header.html");
    }


 ?>

<!doctype html>
<html lang="en">
<head>
	<title>IR</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="icon/png" href="asset/img/logo/rail_icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

   
    <style>

        .bg-black{
            background-color:black;
        }
        .bg-img{
            background-image: url('asset/img/stays/homebg.jpg');
            background-size: 100%;
            /*background-attachment: fixed;*/
        }
        .bg-img2{
            background-image: url('asset/img/stays/homebg.jpg');
            /*background-color: black;*/
            background-size: 100%;
            background-attachment: fixed;
        }
        .custom-img{    
            border: 1px solid white;
            border-radius: 5px;
            height: 200px;
            width: 300px;
        }
        .custom-mt{
            margin-top: 190px;
        }
        .carousel-inner {
            width: 100px;
        }
        .custom-text{
            font-size: 32px;
            margin-top: 100px;
            font-weight: bold;
            font-family: Arial Rounded MT Bold;
            color: #ddd;
        }

    </style>

</head>
<body class="bg-img">

	<!-- header navbar -->
  

<div class="container mb-5">

        <h5 class="text-center custom-text">IR Hotels</h5>

<!-- row -->
    <div class="row" >
        <div class="col-sm-12 custom-mt">
          <!-- *********************************** -->

            <div class="carousel slide" id="test" data-ride="carousel" data-interval="2000">
           

                <div class="carousel-inner pl-5">
                    
                    <div class="carousel-item active">
                        <div class="row">
                           
                            <div class="col-4">
                                <a href="" data-target="#delhi" data-toggle="collapse">
                                    <img class="custom-img" src="asset/img/stays/01delhi.jpg">
                                     
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="" data-target="#raipur" data-toggle="collapse">
                                    <img class="custom-img" src="asset/img/stays/02raipur.jpg">
                                </a>
                            </div>
                            
                            <div class="col-4">
                                <a href="" data-target="#digha" data-toggle="collapse">
                                    <img class="custom-img" src="asset/img/stays/03digha.jpg">
                                </a>                            
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                           
                            <div class="col-4">
                                <a href="" data-target="#haridwar" data-toggle="collapse">
                                    <img class="custom-img" src="asset/img/stays/04haridwar.jpg">
                                </a>
                            </div>

                            <div class="col-4">
                                <a href="" data-target="#indore" data-toggle="collapse">
                                    <img class="custom-img" src="asset/img/stays/05indore.jpg">
                                </a>
                            </div>
                            
                            <div class="col-4">
                                <a href="" data-target="#katra" data-toggle="collapse">
                                    <img class="custom-img" src="asset/img/stays/06katra.jpg">
                                </a>
                            </div>
                        </div>
                    </div>

                     <div class="carousel-item">
                        <div class="row">
                           
                            <div class="col-4">
                                <a href="">
                                    <img class="custom-img" src="asset/img/stays/05indore.jpg">
                                </a>
                            </div>

                            <div class="col-4">
                                <a href="">
                                    <img class="custom-img" src="asset/img/stays/06katra.jpg">
                                </a>                            
                            </div>
                            <div class="col-4">
                                <a href="">
                                    <img class="custom-img" src="asset/img/stays/07madurai.jpg">
                                </a>
                            </div>
                            
                        </div>
                    </div> 
                   
                </div>


                <!-- controls -->
                <a href="#test" class="carousel-control-prev" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#test" class="carousel-control-next" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>

            </div>
        </div> <!-- col ends -->
    </div> <!-- row ends -->
</div> <!-- container ends -->

<div class="accordian bg-img2" id="acc">
<!-- card for showing the hotels in delhi -->
<div class="collapse" id="delhi" data-parent="#acc">
<div class="container bg-light p-4" >
    <!-- new hotel -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/01delhi.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Hotel Ajanta </h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;location</span>
                            <br><br>
                            <h6> 
                                <span>start :&nbsp;</span>&nbsp;<b>6:00AM -12:00AM</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>1:00AM-5:00PM</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2">
                        <div class="card-footer text-center text-bold mt-5">
                        <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </a>    
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div>  -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="delhi" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow hvr-grow" src="data:image/jpeg;base64,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" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Hotel Godwin Delux ,nee</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;location</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>1:00 - 4:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                       <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                       </a>                         </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="delhi" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="data:image/jpeg;base64,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" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Hotel Souththen, new delhi</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                          <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>          
                </div>
        </div>
    <!-- </div> -->
<br>

<br>

<br>



<!-- card for showing the hotels in raipur -->
<div class="collapse" id="raipur" data-parent="#acc">
<div class="container bg-light p-4" >
    <!-- new hotel -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="data:image/jpeg;base64,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" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Indore Mariotte Hotel</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                            <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>           
                </div>
        </div>
    <!-- </div>  -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="raipur" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/0" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="raipur" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/0203.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow ">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                          <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="raipur" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/0101.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow ">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                          <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="raipur" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/0301.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
</div> <!-- container ends -->
</div>
<br>




<!-- card for showing the hotels in digha -->
<div class="collapse" id="digha" data-parent="#acc">
<div class="container bg-light p-4" >
    <!-- new hotel -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/03digha.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div>  -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="digha" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/03digha.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="digha" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/03digha.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                            <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="digha" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/03digha.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="digha" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/03digha.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
</div> <!-- container ends -->
</div>
<br>









<!-- card for showing the hotels in haridwar -->
<div class="collapse" id="haridwar" data-parent="#acc">
<div class="container bg-light p-4" >
    <!-- new hotel -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/04haridwar.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div>  -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="haridwar" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/04haridwar.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                          <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="haridwar" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/04haridwar.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="haridwar" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/04haridwar.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                          <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="haridwar" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/04haridwar.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
</div> <!-- container ends -->
</div>
<br>





<!-- card for showing the hotels in indore -->
<div class="collapse" id="indore" data-parent="#acc">
<div class="container bg-light p-4" >
    <!-- new hotel -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/05indore.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                    </div>               
                </div>
        </div>
    <!-- </div>  -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="indore" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <?php
                            $select="SELECT * FROM `hotel` ";
                            $result=mysqli_query($conn,$select);

                            if($result>0){
                             while($row=mysqli_fetch_assoc($result)){
                                ?>
                             <?php    
                             }
                            }
                            ?>

                            <!-- //<img class="card-img-top hvr-grow" src="asset/img/stays/05indore.jpg" width="200"> -->
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="indore" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/05indore.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                            <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="indore" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/05indore.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                          <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="indore" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/05indore.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                            <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
</div> <!-- container ends -->
</div>
<br>





<!-- card for showing the hotels in katra -->
<div class="collapse" id="katra" data-parent="#acc">
<div class="container bg-light p-4" >
    <!-- new hotel -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/06katra.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                            <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div>  -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="katra" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/06katra.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="katra" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/06katra.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="katra" data-parent="#acc"> -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/06katra.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra Nagar</h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                            <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<br>
<!-- new hotel -->
    <!-- <div class="collapse" id="katra" data-parent="#acc">  -->
        <div class="card">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <!-- <div class="card-header"> -->
                            <img class="card-img-top hvr-grow" src="asset/img/stays/06katra.jpg" width="200">
                        <!-- </div> -->
                    </div>
                    <div class="col-12 col-md-7 hvr-shadow hvr-shadow">
                        <div class="card-body">
                            <h5 class="text-primary">Collection O 44957 Landmark Square New Rajendra </h5>
                            <span><i class="fa fa-map-marker text-danger"></i>&nbsp;locationl</span>
                            <br><br>
                            <h6>
                                <span>start :&nbsp;</span>&nbsp;<b>12:00 - 20:00</b><br>
                                <span>stop :&nbsp;</span>&nbsp;<b>01:00 - 02:00</b>
                            </h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 ">
                        <div class="card-footer text-center text-bold mt-5">
                           <a href="room.php"><input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="book">
                        </div>
                    </div>               
                </div>
        </div>
    <!-- </div> -->
<!-- <br> -->
</div> <!-- container ends -->
</div> 

</div> <!-- accordian ends -->



    <!-- Footer -->
    <?php include('footer.html') ?>




    <!-- modal for stays  -->
    <!-- 1st modal -->
    <div class="modal fade" style="width: 2000px;" id="delhi">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                    <h3 class="m-1 text-center">Goa</h3>
                <div class="modal-body">
                    
                       <!-- <div class="container"> -->
                           <!-- <div class="card">
                               <div class="row">
                                   <div class="col-4">
                                       <div class="card-header">
                                           <img src="asset/img/stays/01delhi.jpg">
                                       </div>
                                   </div>
                                   <div class="col-6">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        </div>
                                   </div>
                                   <div class="col-12 col-md-2">
                                       <div class="card-footer">
                                           <button class="btn btn-danger"></button>
                                       </div>
                                   </div>           
                               </div>
                           </div> -->
                       <!-- </div> -->

                </div>
                
            </div>
        </div>
    </div>
    <!-- 1st modal ends -->



	
</body>
</html>