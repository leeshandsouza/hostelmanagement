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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
    <title>NMAMIT PG Hostel</title>
  </head>
  <body>
    
  <?php
  include 'partials/_header.php';
  include 'partials/_dbconnect.php';
  $sql="select * from fees where regno='".$_SESSION['regno']."';";
  $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
   
    $pending="No fees are pending to be paid";
    
    ?>

<div class="container col-md-6 my-4">
<img src="https://lh3.googleusercontent.com/proxy/B8UUK7-E80USSOwXw-I3rHhBQNly6vu5dEbB5hK94OTUmLGZ5XKmPj7-s6Mov-L-q_400vDvo3KHjacdUJ71UGCkrUsBs5imgequ-gQX0r_cWTszx7Wat56KO6obNExY9_r6hkjLnBDYLgKepdqJuqb-Fu9_VzlqKupfF9FouCu5akyyHa1nvVnMEi0cA1mlLV9Rww" width="100%">
<h2 class="text-center"> NMAM Institute of Technology, Karkala </h2>
<h3 class="text-center">PG Boys Hostel</h3>
<h4 class="text-center">fee details</h4>
<table class="table table-hover table-bordered">
<thead><tr class="table-row">
<th > Register number </th> <th class="text-uppercase" ><?php echo $_SESSION['regno'];?> </th> 
</tr></thead>
<tr><td>Pending Fee</td><td class="text-danger font-weight-bold">  <?php echo $row[2];?>  </td></tr>
<tr><td>Fee paid: </td><td> <?php echo $row[1];?></td></tr>


</table>
<?php
if($row[2]==0)
echo "<h2>".$pending."</h2>";

?>


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