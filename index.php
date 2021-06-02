<?php

session_start();
include("conn.php");
if(!isset($_SESSION['user'])){
    echo "<script>window.open('login.php','_self')</script>";
}
else{

    $username = $_SESSION['user'];

?>
<html>
<head>
  <title>Welcome Page</title>
  <link rel="stylesheet" href="style.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="margin-top: 50px; background-color:white; border-radius:10px; padding:20px;">
    
    <div class="row"><!--row start -->
    <div class="col-sm-8">
        <h1 style="text-align:center;">Welcome <?php echo $username; ?></h1>
    </div>
    <div class="col-sm-4" style="padding: 8px 50px 0 50px;">
        <a href="logout.php">
            <button class="btn btn-danger btn-block" >Logout</button>
        </a>
    </div>
    </div><!--row end -->
    <hr>

    <br/>

    <div class="row"><!--row start -->
    <div class="col-sm-8" style="padding-left:65px;">
        <select class="dropdown btn-info" id="tableName" style="font-size:20px;">
            <option value="">Select Table from which data has to be fetched</option>
            <option value="hr">HR</option>
            <option value="sales">Sales</option>
            <option value="manager">Manager</option>
            <option value="all">All</option>
        </select>
    </div>
    <div class="col-sm-4" style="padding: 0 50px 0 50px; margin-top: -3px;">
        <button type="submit" class="btn btn-success btn-block" id="display_data">Submit</button>
    </div>
    </div><!--row end -->

    <div>

    <br><br>
    <h2 class="text-center bg-dark text-white">Displaying Records</h2>
    <br>

    <table class="table table-striped text-center table-bordered">
        
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Profession</th>
        </thead>

        <tbody id="response">

        </tbody>

    </table>

    </div>


    </div><!--Container end -->
</body>
</html>

<script>

$(document).ready(function(){
    
        $("#tableName").change(function(){
            var table_name = $(this).val();
            $("#display_data").click(function(){
        $.ajax({
            url : 'fetch.php',
            type : 'post',
            data: {table: table_name},

            success: function(result){
                $('#response').html(result);
            }
        });
    });
    });
});

</script>

<?php } ?>