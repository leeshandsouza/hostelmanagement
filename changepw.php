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
    <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    <title>NMAMIT PG Hostel</title>
  </head>
  <body>
    
  <?php
  include 'partials/_header.php';
  include 'partials/_dbconnect.php';
  if(isset($_POST['submit']))
  {
    $sql="select password from resident where regno='".$_SESSION['regno']."';";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    if($row[0]==$_POST['oldpw'])
    { 
      if($_POST['pw']==$_POST['newpw'])
      { 
      $sqlupd="update resident set password='".$_POST['pw']."' where regno='".$_SESSION['regno']."';";
      mysqli_query($conn,$sqlupd);
      echo "<script> alert('password updated successfully!');
      window.location.href='changepw.php';
      </script>";
    }
    else {echo "<script> alert('both new passwords do not match, reverify!');
      window.location.href='changepw.php';
      </script>";}
    }
    else 
    { echo "<script> alert('Old password does not match! Try again');
      window.location.href='changepw.php';
      </script>";}
  }
  ?>

<div class="container col-md-6 my-4">
        <h2>Personal Details</h2>
        <form action="" method="post">
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="opass" placeholder="Password" name="oldpw">
                <label for="floatingInput">Password</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="npass" placeholder="Password" name="pw" >
                <label for="floatingInput">New Password</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="cnpass" placeholder="Password" name="newpw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                <label for="floatingInput">Confirm Password</label>
            </div>
            <div class="my-3">
                <input class="btn btn-outline-dark my-3 btn-lg" type="submit" value="Submit" name="submit" >
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