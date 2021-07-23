<?php
include('includes/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We Care</title>

    <!-- Title icon -->
    <link rel="icon" href="assets/images&gif/others/logo.jpg">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@700&display=swap" rel="stylesheet">
    <!--Css Stylesheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">
    
    <!--FontAwesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    
    <!--Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    html,body{
    width:100%;
    height:100%;
    padding:0%;
    margin:0%;
    overflow-x:hidden;
}
</style>
</head>
<body>
    <section class="colored-section" id="title">
        
        <!-- Nav Bar -->
          <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#009879;">
          <a class="navbar-brand" href="">WE CARE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="admin_signin.html">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pat_doc_signin.html">Sign in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pat_signup.html">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactus.html">Contact us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutus.html">About us</a>
              </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01"onclick="depart_dropdown();"data-bs-toggle="dropdown" aria-expanded="true">Departments</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01" id="depart" data-bs-popper="none">
            <?php
                 $query = "SELECT depart_name FROM `department`";

                 $query_run= mysqli_query($connect,$query);
                       
                 while($row=mysqli_fetch_array($query_run))
                 {
                  echo'<li><a class="dropdown-item" href="department.php?name='.$row['depart_name'].'"> Dept-'.$row['depart_name'].'</a></li>';
                 }
                ?>
            </ul>
          </li>
            
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">Gallery</a>
              </li>
            </ul>
          </div>
        </nav>
        
        <!-- Title -->
        

        <div class="row">
          <div class="col-lg-6">
            <h1 class="big-heading ml-4">WELCOME TO THE WE CARE HOSPITAL</h1>
            <p class="title-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque urna orci, dapibus vel ornare vel, tempus eget est. Donec in convallis tellus, eget feugiat felis. Vestibulum quis diam varius, porta tellus in, blandit purus. Curabitur in ultricies erat. Proin at egestas ante. Quisque euismod tristique nibh, venenatis eleifend velit ultricies eu. Pellentesque finibus sapien eu justo posuere, ac venenatis lacus rutrum. Morbi egestas iaculis elit, ut tempor quam. </p>
            <p class="title-para">Suspendisse iaculis dolor nunc, sed blandit lectus volutpat non. Maecenas dignissim mi sed fermentum molestie. Ut non magna tortor. Praesent pulvinar sollicitudin tortor non sagittis. Sed vitae malesuada nibh. Mauris laoreet nulla orci, sed tempus augue malesuada sed. Nulla congue fringilla ligula, sit amet vulputate est blandit at. Maecenas ac dolor ante. Vestibulum et congue tortor.</p>
          </div>
          <div class="col-lg-6">
              <img class="title-img"src="assets/images&gif/others/Emergency.jpg" alt="img not found"><br><br>
          </div>
        </div>
        
      
    </section>
    
    <!-- Direction -->
   
    <section  class="colored-section" id="direction-section">
      <div id="direction-carousel" class="carousel slide" data-ride="false">
        <div class="carousel-inner">
          <div class="carousel-item active container-fluid">
              <img class="dir-img" src="assets/images&gif/team/staff1.jpg" alt="">
              <p class="dir-side-heading">Our Doctors</p>
              <p class="dir-para">We Care's team of qualified doctors is always ready to help you.</p>
              <p class="dir-anchor" style="text-align: center;"><a href="docservices.html"><i class="fas fa-long-arrow-alt-right dir-icon"></i> Find Doctors</a></p>
          </div>
          <div class="carousel-item container-fluid">
              <img class="dir-img" src="assets/images&gif/others/locate.jpg" alt="">
              <p class="dir-side-heading">Location & Directions</p>
              <p class="dir-para">Our clinic is situated downtown and is always available for you.</p>
              <p class="dir-anchor" style="text-align: center;"><a href="aboutus.html"><i class="fas fa-long-arrow-alt-right dir-icon"></i> Find Location</a></p>
          </div>
          <div class="carousel-item container-fluid">
              <img class="dir-img" src="assets/images&gif/others/appoint.jpg" alt="">
              <p class="dir-side-heading">Appointments</p>
              <p class="dir-para">We recommend scheduling an appointment in advance.</p>
              <p class="dir-anchor" style="text-align: center;"><a href="pat_doc_signin.html"><i class="fas fa-long-arrow-alt-right dir-icon"></i> Appointment</a></p>
          </div>
        </div>
        <a class="carousel-control-prev" href="#direction-carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon carousel-icon"></span>
        </a>
        <a class="carousel-control-next" href="#direction-carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon carousel-icon"></span>
        </a>
      </div>
  </section>

  

    <!-- About us-->
    <Section class="white-section" id="about-section">
        <div class="row about-sec">
            <div class="col-lg-6">
                <img class="imag"src="assets/images&gif/others/mt-0012-about-img10.jpg" alt="">
            </div> 
            <div class="col-lg-6">
                <b class="about-heading">A Few Words About Us</b>
                <p class="about-para">WE CARE HOSPITAL is a Federally Qualified Health Center providing high-quality healthcare services.
                    <br><br>We take a multifaceted approach to health care that allows us to provide superior care, across multiple disciplines, to treat the whole person. Our services include family medicine, dentistry, behavioral health, and a full-service pharmacy, all under one roof.
                    <br><br>WE CARE HOSPITAL is a world class medical center in India pioneering in the field of infertility and cancer care. This hospital has all the facilities needed for a center of excellence and is well equipped with futuristic equipments and we foster a patient centric philosophy among us. The noble aim of the founders of this hospital is to provide the cutting edge technologies evolving around the world in the field of medical science accessible to the common man at affordable rates. 
                </p>
            </div>
            
              <a href="aboutus.html" class="about-anchor">
              <button class="btn btn-primary">Learn More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
              </a>
        </div>
    </Section>

    <!-- Advantages -->
    <section class="colored-section" id="advantage-section">
        <div class="row">
          <div class="col-lg-12">
            <center>
              <b class="ad-bold">OUR ADVANTAGES</b>
            </center>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <center>
              <i class="fa fa-stethoscope fa-5x ad-icon"></i>
              <p class="ad-heading">Qualified Doctors</p>
              <p class="ad-para">We employ recognized medical specialists from all over the world.</p>
            </center>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <center>
              <i class="far fa-hospital fa-5x ad-icon"></i>
              <p class="ad-heading">Modern Equipment</p>
              <p class="ad-para">Our team uses the newest medical equipment and supplies of top quality.</p>
          </center>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <center>
              <i class="fa fa-ambulance fa-5x ad-icon"></i>
			        <p class="ad-heading">Emergency Help</p>
              <p class="ad-para">Our qualified specialists are always ready to provide any emergency help.</p>
            </center>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <center>
              <i class="fa fa-user fa-5x ad-icon"></i>
              <p class="ad-heading">Individual Approach</p>
              <p class="ad-para">Our unique approach allows us to provide tailored medical services.</p>
            </center>
          </div>
        </div>
    </section>

    <!--Department-->
    <section class="white-section" id="department-section">
        <div class="row">
          <div class="col-lg-3 col-md-6">
                <div class="box">
                  <img  class="depart-img"  src="assets/images&gif/others/1.png" alt="Staff1" ><br><Br>
                  <center>
                    <p class="depart-heading">Neurology</p>
                    <p class="depart-para">Neurology is the branch of medicine concerned with the study and treatment of disorders of the nervous system.</p>
                  </center>
                </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <div class="box">
                <img  class="depart-img" src="assets/images&gif/others/2.png" alt="Staff1" ><br><br>
                <center>
                  <p class="depart-heading">Cardiology</p>
                  <p class="depart-para">Cardiology is a medical specialty and a branch of internal medicine concerned with disorders of the heart.</p>
                </center>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <div class="box">
                <img  class="depart-img" src="assets/images&gif/others/em.png" alt="Staff1" ><br><br>
                <center>
                  <p class="depart-heading">Emergency</p>
                  <p class="depart-para">A ward in a hospital that deals with patients who need emergency treatment.</p>
                </center>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
              <div class="box">
                <img  class="depart-img" src="assets/images&gif/others/7.png" alt="Staff1"><br><br>
                <center>
                  <p class="depart-heading">Orthopedic</p>
                  <p class="depart-para">Orthopedists handle the disorders, injuries, prevention, treatment, and repair of the skeletal system and its related joints and muscles.</p>
                </center>
            </div>
          </div>
        </div>
    </section>

    <!--Doctor-->
    <section class="white-section" id="doctor-section">
        <div class="row">
            <div class="col-lg-3 col-md-6">
              <Center>
                <img  class="doc-img" src="assets/images&gif/team/4.jpg" alt="Staff1"><br><br>
                <h1 class="doc-heading" >Dr.Dean Thomas</h1>
		            <p class="doc-para" >Head of the surgery department</p>
              </Center>
            </div>
            <div class="col-lg-3 col-md-6">
              <Center>
                <img  class="doc-img" src="assets/images&gif/team/3.jpg" alt="Staff1"><br><br>
                <h1 class="doc-heading" >Dr.Jerry McStanton</h1>
		            <p class="doc-para" >Senior surgeon</p>
              </Center>
            </div>
            <div class="col-lg-3 col-md-6">
              <Center>
                  <img  class="doc-img" src="assets/images&gif/team/2.jpg" alt="Staff1"><br><br>
                  <h1 class="doc-heading" >Dr.Lewis Parole</h1>
		              <p class="doc-para" >Senior surgeon</p>
              </Center>
            </div>
            <div class="col-lg-3 col-md-6">
              <Center>
                <img  class="doc-img" src="assets/images&gif/team/1.jpg" alt="Staff1"><br><br>
                <h1 class="doc-heading">Dr. Helen B. Taussig</h1>
		            <p class="doc-para">Senior surgeon</p>
              </Center>
            </div>
                        
              <a href="docservices.html" class="about-anchor">
                <center> <button class="btn btn-primary">View More Details <i class="fa fa-angle-double-right" aria-hidden="true"></i></button></center>
              </a>
      </div>
    </section>

    <!-- Footer section --> 
   <section id="foo-section">   
      <div class="row">
      <div class="col-12 col-md">
        <h1>We care</h1>
        <small class="d-block mb-3 text-muted">© 2020-2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="docservices.html">Find a Doctor</a></li>
          <li><a class="text-muted" href="signup.html">Information for patient</a></li>
          <li><a class="text-muted" href="signin.html">Pay Hospital Bills online</a></li>
          <li><a class="text-muted" href="docservices.html">Services</a></li>
          <li><a class="text-muted" href="#">Quality Care</a></li>
          <li><a class="text-muted" href="#">Events</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Quick Links</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="index.php">Home</a></li>
          <li><a class="text-muted" href="signup.html">Signup</a></li>
          <li><a class="text-muted" href="signin.html">Signin</a></li>
          <li><a class="text-muted" href="contactus.html">contactus</a></li>
          <li><a class="text-muted" href="aboutus.html">Aboutus</a></li>
          <li><a class="text-muted" href="gallery.html">Gallery</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Others</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#title">Go Up</a></li>
          <li><a class="text-muted" href="#about-section">Few words about us</a></li>
          <li><a class="text-muted" href="#advantage-section">Advantanges</a></li>
          <li><a class="text-muted" href="#department-section">Departments</a></li>
          <li><a class="text-muted" href="#doctor-section">Doctors</a></li>
          <li><a class="text-muted" href="#">News &amp; Events</a></li>
        </ul>
      </div>
    </div>
    
    
    <hr style="background-color:#fff">
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <p class="text-muted">Blog |Sitemap |XML Sitemap |Privacy |Refund |Policy |Terms & Condition</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <p class="text-muted">2020 &#169; GlobalHealth. All rights reserved. | Privacy Policy</p>
          </div>
       </div>
      </div>
    </footer>
    
  </section>
  <script src="assets/js/script.js"></script>
</body>
</html>
