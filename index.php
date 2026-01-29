<?php 
    session_start();
    include('Details.php');
    include('DBConnection.php'); 
    // Use four-digit year format
    $currentDate = date("Y-m-d");

    if (isset($_SESSION['update'])) {
         unset($_SESSION['update']);
    }
    
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo "<script> alert('You are logged in'); </script>";
    } 
    else if (isset($_GET['logout']) && $_GET['logout'] == 1) {
        echo "<script> alert('You are logged out'); </script>";
    }

    if (isset($_SESSION["uname"])) {
        $uname = $_SESSION["uname"];
        include("header2.php");
    } else {
        include("header.html");
    }
?>

<!doctype html>
<html lang="en">
<head>
    <title>IR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="icon/png" href="asset/img/logo/rail_icon.png">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <style>
     .autocomplete-items {
    position: absolute;
    border: 1px solid #d4d4d4;
    border-bottom: none;
    border-top: none;
    z-index: 99;
    top: 100%;
    left: 0;
    right: 0;
    background-color: #fff;
}
.autocomplete-items div {
    padding: 10px;
    cursor: pointer;
    border-bottom: 1px solid #d4d4d4;
}
.autocomplete-items div:hover {
    background-color: #e9e9e9;
}
        #bg-custom
        { background-color:
            rgba(2,2,2,0.8); 
        }

        #m-cust{ margin-right: 250px; margin-top: 60px; }
        .bg-black{ background-color:black; }
        .bg-img{ background-image: url('asset/img/7.jpg'); background-size: 100%; max-width: 1300px; min-height: 700px; }
        @media(max-width: 400px){ .bg-img{ background-image: url('asset/img/5.jpg'); background-size: auto; background-repeat: no-repeat; } }
        .bg-img2{ background-image:url('asset/img/5.jpg'); background-size: 100%; }
        .pnr{ background-color: white; color: black; padding-top: 10px; box-shadow: 2px 2px 18px 10px #222; border-radius: 2px; }
        .fs-1{ font-size: 42px; font-family: Tempus Sans ITC; margin-top: 50px; }
        .fs-2{ font-size: 18px; font-family: Yu Gothic Light; font-weight: lighter; margin-bottom: 50px; }
        .main-name{ font-size: 50px; font-family: Arial Rounded MT Bold; margin-top: 0px; background-color: rgba(2,2,2,0.2); border-radius: 5px; width:560px; padding-left: 50px; }
    </style>
</head>
<body>
    <div class="row bg-img text-light">
        <div class="col-12 col-sm-12 col-md-4 offset-1">
            <div class="row pnr m-5 text-center">
                <div class="col-12 mt-3">
                    <span><img src="asset/img/logo/rail_icon.png"></span><br>
                    <span class="fs-1">BOOK</span>
                    <span class="fs-2">YOUR TICKET</span>
                </div>
                <div class="col-12 mt-4">
                    <form action="./train_list.php" method="post">
                        <div class="input-group">   
                        <input type="text" id="src" name="src" class="form-control" placeholder="From*" list="cityList" required>
                         <datalist id="cityList">
                         <option value="Ahmedabad">
                          <option value="Bangalore">
                        <option value="Chennai">
                          <option value="Delhi">
                       <option value="Hyderabad">
                         <option value="Kolkata">
                           <option value="Mumbai">
                         <option value="Pune">
                         <option value="Surat">
                         <option value="Secunderabad Junction">
                        <option value="Siliguri Junction">
                        <option value="Saharanpur">
                      <option value="Solapur">
                        <option value="Sambalpur">
                        <option value="Mumbai Central">
    <option value="Madurai Junction">
    <option value="Mysuru Junction">
    <option value="Mangalore Central">
    <option value="Mathura Junction">
                             </datalist>

                        <div id="srcSuggestions" class="suggestions"></div>
                        </div>
                        <br>
                       
                        <input type="text" id="src" name="dest" class="form-control" placeholder="To*" list="cityList" required>
                         <datalist id="cityList">
                         <option value="Ahmedabad">
                          <option value="Bangalore">
                        <option value="Chennai">
                          <option value="Delhi">
                       <option value="Hyderabad">
                         <option value="Kolkata">
                           <option value="Mumbai">
                         <option value="Pune">
                         <option value="Surat">
                         <option value="Secunderabad Junction">
                        <option value="Siliguri Junction">
                        <option value="Saharanpur">
                      <option value="Solapur">
                        <option value="Sambalpur">
                        <option value="Mumbai Central">
    <option value="Madurai Junction">
    <option value="Mysuru Junction">
    <option value="Mangalore Central">
    <option value="Mathura Junction">
                             </datalist>
                        <div id="destSuggestions" class="suggestions"></div>
                       
                        <br>
                        <div class="input-group">
                            <input type="date" id="date" name="date" min="<?php echo $currentDate; ?>" required onchange="findDay()">
                            <span class="input-group-text text-dark">
                                <img src="asset/img/logo/cal.png" width="20" height="20">
                            </span>
                        </div>
                        <p id="dayResult" class="text-dark mt-2"></p>
                        <br>
                        <div class="input-group">
                            <select name="class" class="custom-select hvr-shadow">
                                <option class="" value="ALL">All Classes</option>
                                <option class="" value="AC">AC</option>
                                <option class="" value="SL">Sleeper(SL)</option>
                            </select>
                        </div>
                        <br>
                        <div class="input-group">
                            <input class="btn text-light bg-blue btn-block hvr-shadow" type="submit" value="Find Trains">
                        </div><br>  
                    </form>
                </div>
            </div>                    
        </div>
        <div class="sm-hide col-sm-6 offset-0">
            <div class="text-left main-name">
                <span>INDIAN RAILWAYS</span>
            </div>
        </div>
    </div>

    <div class="jumbotron bg-secondary"></div>
    <div class="jumbotron bg-secondary"></div>
    <div class="jumbotron bg-secondary"></div>
    <?php include('footer.html'); ?>

    <script>

        function findDay() {
            let dateValue = document.getElementById("date").value;
            if (dateValue) {
                let day = new Date(dateValue).toLocaleDateString('en-US', { weekday: 'long' });
                document.getElementById("dayResult").innerText = "Selected Date is a " + day;
            } else {
                document.getElementById("dayResult").innerText = "";
            }
        }
        // Sample list of cities for autocomplete suggestions
const cities = [
    "Ahmedabad", "Bangalore", "Chennai", "Delhi", "Hyderabad", "Kolkata", "Mumbai", "Pune"
];

// Function to filter and display autocomplete suggestions
function autocomplete(inputId) {
    const inputElement = document.getElementById(inputId);
    const suggestionBoxId = inputId + "Suggestions";
    const suggestionBox = document.getElementById(suggestionBoxId);

    inputElement.addEventListener("input", function() {
        const query = this.value.toLowerCase();
        suggestionBox.innerHTML = "";
        if (!query) {
            suggestionBox.style.display = "none";
            return;
        }
        const filteredCities = cities.filter(city => city.toLowerCase().includes(query));
        filteredCities.forEach(city => {
            const suggestionItem = document.createElement("div");
            suggestionItem.textContent = city;
            suggestionItem.classList.add("suggestion-item");
            suggestionItem.onclick = function() {
                inputElement.value = city;
                suggestionBox.innerHTML = "";
                suggestionBox.style.display = "none";
            };
            suggestionBox.appendChild(suggestionItem);
        });
        suggestionBox.style.display = filteredCities.length > 0 ? "block" : "none";
    });

    // Hide suggestions when clicking outside
    document.addEventListener("click", function(e) {
        if (e.target !== inputElement) {
            suggestionBox.style.display = "none";
        }
    });
}

// Initialize autocomplete for both input fields
document.addEventListener("DOMContentLoaded", function() {
    autocomplete("src");
    autocomplete("dest");

});


    </script>
</body>
</html><input type="text" id="src" name="src" class="form-control" placeholder="From*" list="cityList" required>
<datalist id="cityList">
    <option value="Ahmedabad">
    <option value="Bangalore">
    <option value="Chennai">
    <option value="Delhi">
    <option value="Hyderabad">
    <option value="Kolkata">
    <option value="Mumbai">
    <option value="Pune">
</datalist>