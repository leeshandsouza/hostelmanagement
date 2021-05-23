<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--icon-->
    <link href="logo.png" rel="icon" type="image/icon">
    <title>NMAMIT PG Hostel</title>
</head> 

<body>
    <?php
    include 'partials/_login.php';
    ?>
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PG Hostel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#vision">Vision</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactus">Contact Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-outline-success mx-1" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item ">
                <img src="https://images.shiksha.com/mediadata/images/1586342664phplqnq18.jpeg" class="d-block h-70  w-100" width="2400" height="500" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Beautiful view of our campus</h5>
                    <p>Beautiful view of our campus.</p>
                </div>
            </div>
            <div class="carousel-item active">
                <img src="https://www.nmamit.nitte.edu.in/img/facilities/hostels/8.jpg" class="d-block h-70  w-100"width="2400" height="500" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our hostel</h5>
                    <p>best facilities</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.nmamit.nitte.edu.in/img/slider/2.jpg" class="d-block h-70 w-100" width="3000" height="500" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Accredition</h5>
                    <p>A grade college by NAAC</p>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
   
    </div>

        <div class="container bg-light p-2  my-2 border rounded" id="vision">
            <div class="row">
            <div class="col col-md-5 text-light">
                <img src="https://ddo0fzhfvians.cloudfront.net/uploads/icons/png/10013960471530513411-512.png" width="70%" class="image"> 
            </div>
            <div class="col col-md-7 text-dark">
                <h1> VISION</h1><p class="h5">
                Pursuing Excellence, Empowering people, Partnering in Community Development </p>
                <br> <br>    <br>
                 <h1> MISSION</h1> <p class="h5">
                 To develop NMAM Institute of Technology, Nitte, as Center of Excellence by imparting Quality Education 
                 to generate Competent, Skilled and Humane Manpower to face emerging Scientific, Technological, Managerial 
                 and Social Challenges with Credibility, Integrity, Ethics and Social Concern</p>
            </div>
            </div>
        </div>
   
        
    

    <!-- Cards -->
    <div class="container-fluid" style="background-image:url(https://st.depositphotos.com/3008028/3749/i/950/depositphotos_37493071-stock-photo-abstract-grey-background.jpg); background-size:cover;">
    <div class="container my-3   py-2" id="testimonials">
        <div class="row">
            <div class="container col-md-4 col-my-2">
                <div class="card" style="width: 18rem">
                    <img src="https://media-exp1.licdn.com/dms/image/C5103AQFq-udd8lX85A/profile-displayphoto-shrink_800_800/0/1563799693630?e=1614211200&v=beta&t=I-VvKaSSMR8FuWy7VAc7JQJ03DKfHd4mdHZfuc23AKk" height="300px"  class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mr K Venkatesh Bhat</h5>
                        <p class="card-text">I am a student of the college and resident of hostel. It is very good and safe.</p>
                        <a href="https://www.linkedin.com/in/k-venkatesh-bhat-388164190/detail/photo/" class="btn btn-primary">Contact them</a>
                    </div>
                </div>
            </div>

            <div class="container col-md-4 col-my-2">
                <div class="card" style="width: 18rem">
                    <img src="https://etimg.etb2bimg.com/photo/68273035.cms" height="400px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mr Aditya Jha, <small>CEO, Param Inc</small></h5>
                        <p class="card-text">I Have been an alumnus of this amazing place! it's such a good place!</p>
                        <a href="#" class="btn btn-primary">Contact them</a>
                    </div>
                </div>
            </div>

            <div class="container col-md-4 col-my-2">
                <div class="card" style="width: 18rem">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/5b/Rakshit_Shetty.jpg" height="400px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Rakshith Shetty<small> ,Actor</small> </h5>
                        <p class="card-text">I am an alumnus of this place. It is my alma mater.</p>
                        <a href="#" class="btn btn-primary">contact them</a>
                    </div>
                </div>
            </div>
        </div>
    </div></div>

    <div id="contactus" class="bg-dark text-light">

        <div class="row">
        <h1 class="m-4">CONTACT US</h1>
        <div class="col col-md-5 mx-4">
        <h4>REACH US</h4>
        Nitte, Karkala Taluk,<br>
        Udupi - 574110<br>
        Karnataka, India<br>
            +91 – 8258 – 281263 / 281264 / 281248<br>
        / 281461 / 281462 / 281463 / 281349<br>
        +91 - 8258 - 281039<br>
        principal_nmamit@nitte.edu.in<br>
        www.nmamit.nitte.edu.in<br>
        </div>
        <div class="col col-md-5 mx-4">
        <h4>CAMPUS CONTACTS</h4>
        <strong>Dean (Admissions and Alumni Affairs) : </strong>krshetty@nitte.edu.in <br>
        <strong>Chief Warden :</strong> reg_nitte@nitte.edu.in<br>
        <strong>Vice Principal & Dean (Academics) :</strong>  viceprincipal.nmamit@nitte.edu.in<br>
        <strong>PRO :</strong> krishnaraja@nitte.edu.in<br>
        <Strong>Exam : coe.nmamit@nitte.edu.in </Strong><br>
        <strong>Student Welfare Officer : </strong> poojari.shekar@nitte.edu.in<br>
        </div>
        </div>

        <?php
        include 'partials/_footer.php';
        ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>