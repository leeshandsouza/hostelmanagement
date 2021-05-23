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
    $sql="select r.roomno,r.vacancy,r.phoneno from room r,isalotted i where r.roomno=i.roomno and i.regno='".$_SESSION['regno']."';";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);
    if($row[1]==0)
    $vac="Room is vacant";
    else $vac="Room is not vacant";
    $sql2="select regno from isalotted where roomno='".$row[0]."' and regno!='".$_SESSION['regno']."';";
    $result2 = mysqli_query($conn,$sql2);
    $row2 = mysqli_fetch_row($result2);
    ?>

    <div class="row mx-4 my-4 ">
    <h2 class="text-center"> NMAM Institute of Technology, Karkala </h2>
<h3 class="text-center">PG Boys Hostel</h3>
<h4 class="text-center">Room details</h4>
        <div class="card col" style="padding-left:0px; padding-right:0px;">
            <div class="row p-1  ">
                <div class="col" style="text-align:center;">
                    <img src="https://images.squarespace-cdn.com/content/v1/52755241e4b0c0a3947f293b/1407831960079-IXLXLQGMQ09J0AYUPM8N/ke17ZwdGBToddI8pDm48kPqQfq0L3n3wpHIsRapTfg8UqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKczo5Zn4xktlpMsMj-QlHXeMfNK6GwvtVkYEWiR8XAPyD3GfLCe_DXOSC_YcAacWL_/2-single-bed-en-suite-room-1.jpg" width="700" height="400" alt="...">
                </div>
                
            </div>
        </div>
    </div>
    <div class="container col-md-6 my-4"> 
<table class="table table-hover table-bordered">
<thead><tr class="table-row">
<th > Room number </th> <th class="text-uppercase" ><?php echo $row[0];?> </th> 
</tr></thead>
<tr><td>Roommate USN:</td><td class="text-danger font-weight-bold">  <?php echo $row2[0];?>  </td></tr>
<tr><td>Room Phone number: </td><td> <?php echo $row[2];?></td></tr>
<tr><td>Room vacany:</td><td> <?php echo $vac;?></td></tr>

</table>
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