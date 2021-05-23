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
    <link href="logo.png" rel="icon" type="image/icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>NMAMIT PG Hostel</title>

    <script>
    $(document).ready(function(){
       $('.toast').toast('show');
      });
    </script> 
  </head>
  <body>
    
  <?php
  include 'partials/_header.php';
  ?>

  <div class="container my-2 p-2">
      <div class="jumbotron">
      
      <p class="display-5 bg-dark rounded text-white p-3">Welcome to NMAMIT PG Boys hostel</p>
      <div class="row"> 
      <div class="col col-md-4"><img src="https://images.squarespace-cdn.com/content/v1/52755241e4b0c0a3947f293b/1407831960079-IXLXLQGMQ09J0AYUPM8N/ke17ZwdGBToddI8pDm48kPqQfq0L3n3wpHIsRapTfg8UqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYxCRW4BPu10St3TBAUQYVKczo5Zn4xktlpMsMj-QlHXeMfNK6GwvtVkYEWiR8XAPyD3GfLCe_DXOSC_YcAacWL_/2-single-bed-en-suite-room-1.jpg" width="400" alt="..."></div>
      
      <div class="col col-md-6 p-2 m-2"> 
      <p class="text-justify" style="text-align:justify">
      NMAMIT has separate hostel blocks for Boys and Girls on sharing basis in order to provide a good environment to the students to continue their studies in a healthy and caring atmosphere. Almost 50% of the students stay at Hostels.

NMAMIT has 7 boys hostel blocks and 4 girls’ hostel blocks in the campus. Each hostel block is managed under the supervision of a Manager and co-workers at the hostel block. Each room in all the hostels has been furnished with cots, tables, chairs, wardrobe and a ceiling fan.

Hostel runs vegetarian and non-vegetarian mess with North Indian and South India food to meet the needs of students from all over the country. Cultural events, self development programs, academic support activities are conducted exclusively to hostel students on regular basis. All the hostel blocks are well connected with 310mbps Campus Wi-Fi network.</br>Other Amenities like 
Health Care,
R.O. Processed Drinking water, 
Cold & Hot water supply,  
Diesel generators to provide backup power supply in all hostel blocks, 
Television Hall, 
Laundry, 
Round the clock security, 
Ambulance Service for emergency and referral services are provided. </br>
Teaching staff regularly visit and stay in the hostel blocks to motivate students to study. There is a strict code of conduct practiced at all Hostel blocks. Students wishing to stay in the Hostel will have to abide by the code of conduct. </br>
</p>
     
      </div>
      <div class="col col-md-4" style="margin-top:-20vh"><img src="https://www.nmamit.nitte.edu.in/img/facilities/hostels/8.jpg" width="400" alt="..."></div>
      </div>
      
      
      </div>
    <div class="container m-2 p-2">

      <table class="rwd-table table table-hover table-bordered table-striped wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">
          <tbody>
            <tr>
              <th>Hostel Block</th>
              <th>Manager</th>
              <th>Hostel Phone No.</th>
              <th>Faculty Warden</th>
              <th>Mobile No.</th>
            </tr>
				    <tr>
              <td data-th="Hostel Block">Main Hostel Block 1</td>
              <td data-th="Manager">Mr.John</td>
              <td data-th="Hostel Phone No.">08258-281233/533/033</td>
              <td data-th="Faculty Warden">Dr. Ajith Hebbale</td>
              <td data-th="Mobile No.">9964843284</td>
            </tr>
				    <tr>
              <td data-th="Hostel Block">Main Hostel Block 2</td>
              <td data-th="Manager">Mr.John</td>
              <td data-th="Hostel Phone No.">08258-281233/533/033</td>
              <td data-th="Faculty Warden">Mr. Sandeep Kharvi</td>
              <td data-th="Mobile No.">8123751293</td>
            </tr>
    				<tr>
              <td data-th="Hostel Block">Main Hostel Block 3</td>
              <td data-th="Manager">Mr.John</td>
              <td data-th="Hostel Phone No.">08258-281233/533/033</td>
              <td data-th="Faculty Warden">Mr. Vishwanath</td>
              <td data-th="Mobile No.">9980523407</td>
            </tr>
				    <tr>
              <td data-th="Hostel Block">Main Hostel Block 4</td>
              <td data-th="Manager">Mr.John</td>
              <td data-th="Hostel Phone No.">08258-281233/533/033</td>
              <td data-th="Faculty Warden">Mr. Durgaprasad</td>
              <td data-th="Mobile No.">9880119052</td>
            </tr>
				    <tr>
              <td data-th="Hostel Block">Main Hostel Block 5</td>
              <td data-th="Manager">Mr.John</td>
              <td data-th="Hostel Phone No.">08258-281233/533/033</td>
              <td data-th="Faculty Warden">Mr. Roshan Fernandes</td>
              <td data-th="Mobile No.">9901723993</td>
            </tr>
				    <tr>
              <td data-th="Hostel Block">PG Hostel Block 1</td>
              <td data-th="Manager">Mr.Manjunath</td>
              <td data-th="Hostel Phone No.">9243604479</td>
              <td data-th="Faculty Warden">Mr. Puneeth RP</td>
              <td data-th="Mobile No.">9036366204</td>
            </tr>
				    <tr>
              <td data-th="Hostel Block">PG Hostel Block 2</td>
              <td data-th="Manager">Mr.Manjunath</td>
              <td data-th="Hostel Phone No.">9243604479</td>
              <td data-th="Faculty Warden">Mr. Krishnaraja Joisa A <br>Mr. Pradeep Karanth</td>
              <td data-th="Mobile No.">7259671555<br>9481143873</td>
            </tr>
				</tbody>
				</table>
        </div>
  </div>


<?php
 include 'partials/_footer.php';
 ?>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>