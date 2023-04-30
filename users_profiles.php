<?php 
require_once ("require/connection.php");
$query = " SELECT * FROM users ";
$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>

<body>
    <div class="conatiner-fluid">
        <div class="container py-4">
        <h1 class="hd text-white pb-4 text-center">Users Information</h1>
           <div class="row">
               <?php 
           if ($result->num_rows > 0) {
               while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img src="uploads/<?php echo $row['image_name']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['first_name'] . " " . $row['last_name']; ?></h5>
                        <p class="card-text"><?php echo $row['email']; ?></p>
                        <p class="card-text"><?php echo $row['cnic']; ?></p>
                        <p class="card-text"><?php echo $row['gender']; ?></p>
                        <p class="card-text"><?php echo $row['dob']; ?></p>
                    </div>
                </div>
                </div>
            <?php }
        }else{
            echo "<h1 style='color:red;'>";
            echo "Data Not Found!";
            echo "<h1>";
        }
            ?>
           </div>
         
        </div>
    </div>

    <!-- bootstrap js script link -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>