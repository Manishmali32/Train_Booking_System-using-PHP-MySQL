<?php include('DBConnection.php');

    // checked whther user login or logout
    if(isset($_SESSION["admin_uname"])){
            header("location: ./Adminlogin.php?logout=1");
    }
    include("adminheader2.html");


    $sql="SELECT * FROM `hotel` ";
    $result=mysqli_query($conn,$sql);

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sql = mysqli_query($conn,"Delete from hotel where id='$id'");
    // echo"ho gya";
    header("location:admin_viewhotel.php");
}
   
    ?>
    
    
   
            </div>
     <div class="container">
                <table class="table table-hover bg-light text-center">
                    <?php 
                

                      if($result->num_rows > 0){ ?>
                    <tr class="table-primary">
                        <th>id</th>
                        <th>checkin.</th>
                        <th>chekout</th>
                        <th>name</th>
                        <th>mobile number </th>

                        
                        <th>Booked by</th>
                        <th>Action</th>
                    </tr>
                     <?php   while($data = $result->fetch_assoc()){
                     ?>
                    <tr>
                      
                        <td class="text-danger text-bold">
                        <td><?php echo $data['check_in']; ?></td>
                        <td><?php echo $data['check_out']; ?></td>
                        <td><?php echo $data['full_name']; ?></td>
                        <td><?php echo $data['phone_no']; ?></td>
                        <td><?php echo $data['booked_by']; ?></td>
                        <td><a href="admin_viewhotel.php?delete=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure delete this user booking hotel');">Delete</a></td>
                        
                        
                    </tr>
                    <?php 
                    } //while ends
                 } // 
                
