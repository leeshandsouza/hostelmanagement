<?php 
session_start();
if(!isset($_SESSION['regno'])){
 $_SESSION['error_msg'] = "you have not logged in";
 session_write_close();
 header("Location: partials/errorPage.php");}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!--icon-->
    <link href="logo.png" rel="icon" type="image/icon">
    <title>NMAMIT PG Hostel</title>
</head>

<body>

    <?php
    include 'partials/_header.php'; 
    include 'partials/_dbconnect.php';
    $sql="select * from resident where regno='".$_SESSION['regno']."'; ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    $sql2="select * from guardian where regno='".$_SESSION['regno']."'; ";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_row($result2);
    
    ?>

    <?php 
    if(isset($_POST['submit1']))
    {
        $sql1="update resident set fname='".$_POST['fname']."',lname='".$_POST['lname']."',address='".$_POST['address']."',emailid='".$_POST['emailid']."', phoneno={$_POST['phoneno']} where regno='".$_SESSION['regno']."';";
        mysqli_query($conn,$sql1);
        echo "<script> alert('User details updated successfully');
        window.location.href='myprofile.php';
        </script>";
    }
    ?>
   
    <div class="container col-md-6 my-4">
        <h2>Personal Details</h2>
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname" value="<?php echo $row[1];?> ">
                        <label for="floatingInput">First Name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" value="<?php echo $row[2];?>">
                        <label for="floatingInput">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="lname" placeholder="Last Name"  value="<?php echo strtoupper($_SESSION['regno']); ?>" disabled>
                <label for="floatingInput">Register number </label>
            </div>
           
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Address" id="address" style="height: 120px" name="address"><?php echo $row[6];?></textarea>
                <label for="floatingTextarea">Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="emailid" placeholder="Email id" value="<?php echo $row[8];?>" name="emailid">
                <label for="floatingInput">E-mail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="phoneno" placeholder="Phone number" value="<?php echo $row[7];?>" name="phoneno" pattern="[0-9]{10}" title="Ten Letter phone number">
                <label for="floatingInput">Phone Number</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload profile image</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="my-3">
                <input class="btn btn-outline-dark my-3 btn-lg" type="submit" value="Submit" name="submit1">
            </div>
        </form>
    </div>

    <hr class="featurette-divider">

    <?php
    if(isset($_POST['submitg']))
    {
        $sqlg="update guardian set fname='".$_POST['gfname']."',lname='".$_POST['glname']."',address='".$_POST['gaddress']."',emailid='".$_POST['gemailid']."', phonenum={$_POST['gphoneno']} where regno='".$_SESSION['regno']."';";
        mysqli_query($conn,$sqlg);
       echo "<script> alert('Guardian details updated successfully');
        window.location.href='myprofile.php';
        </script>";
    }
    ?>


    <div class="container col-md-6 my-4">
        <h2 class="my-3">Other Details</h2>
        <h4 class="my-3">Guardian Info</h4>
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="fname" placeholder="First Name" name="gfname" value="<?php echo $row2[1];?> ">
                        <label for="floatingInput">First Name</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="glname" placeholder="Last Name" name="glname" value="<?php echo $row2[2];?> ">
                        <label for="floatingInput">Last Name</label>
                    </div>
                </div>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Address" id="gaddress" style="height: 120px" name="gaddress"><?php echo $row2[3];?></textarea>
                <label for="floatingTextarea">Address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="gemailid" placeholder="Email id" value="<?php echo $row2[4];?>" name="gemailid">
                <label for="floatingInput">E-mail</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="gphoneno" placeholder="Phone number" value="<?php echo $row2[5];?>" name="gphoneno" pattern="[0-9]{10}" title="Ten Letter phone number">
                <label for="floatingInput">Phone Number</label>
            </div>
            <div class="my-3">
                <input class="btn btn-outline-dark my-3 btn-lg" type="submit" name="submitg" value="Submit">
            </div>
        </form>
    </div>

    <?php 
    include 'partials/_footer.php';
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>