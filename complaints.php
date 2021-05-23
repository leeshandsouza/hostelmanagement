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
    <link href="logo.png" rel="icon" type="image/icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>NMAMIT PG Hostel</title>
</head>

<body>

    <?php
    include 'partials/_header.php';
    include 'partials/_dbconnect.php';
    if(isset($_POST['submit'])){
        $sql="insert into complaint(regno,type,name,description) values('".$_SESSION['regno']."','".$_POST['comptype']."','".$_POST['compname']."','".$_POST['compdesc']."');";
        $res=mysqli_query($conn,$sql);
        if($res!=0)
        {
            echo "<script> alert('User details updated successfully');
            window.location.href='complaints.php';
            </script>";
        }
    }
    ?>

    <div class="container col-md-6 my-4">
    <img src="https://wpforms.com/wp-content/uploads/2019/03/create-a-complaint-form.jpg" width="100%">
        <form method="post">
            <h2>Complaint Form</h2>
            <div class="form-group my-3">
                <label for="Select"  class="form-label">Complaint related to</label>
                <select id="Select" name="comptype" class="form-select">
                    <option>Mess</option>
                    <option>Room</option>
                    <option>Person</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="compname" class="form-control" id="floatingInput" placeholder="Complaint">
                <label for="floatingInput">Complaint</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" name="compdesc" id="floatingTextarea" style="height: 120px"></textarea>
                <label for="floatingTextarea">Description</label>
            </div>
            <div class="my-3">
                <input class="btn btn-outline-dark my-3 btn-lg" type="submit" name="submit" value="Submit">
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