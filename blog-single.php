 <?php 
session_start();
if( isset($_SESSION['email'])==true){

}else{
  header('location:job-post.php');
}
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JobPortal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">JobPortal</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
            <?php 
            if( isset($_SESSION['email'])==true){ ?>
	          <li class="nav-item cta cta-colored"><a href="job-post.php" class="nav-link"><?php echo $_SESSION['email']; ?></a></li>
            <li class="nav-item cta mr-md-2"><a href="logout.php" class="nav-link">logout</a></li> 
            <?php 
            }else { ?>
            <li class="nav-item cta cta-colored"><a href="job-post.php" class="nav-link">Login</a></li>
            <?php 
            }
            ?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <?php
    include('connection/db.php');
    $id=$_GET['id'];
    $query=mysqli_query($conn,"select * from all_jobs where job_id='$id'");
    while($row=mysqli_fetch_array($query)){
      $title=$row['job_title'];
      $des=$row['des'];
      $country=$row['country'];
      $state=$row['state'];
      $city=$row['city'];
      $id_job=$row['job_id'];

    }
?>

    
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3"><a href="index.php">Jobs <i class="ion-ios-arrow-forward"></i></a></span> <span>Apply Job</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Apply Job</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            <h2 class="mb-3"><td><?php echo $title; ?></td></h2>
            <h5><?php echo $country; ?>,<?php echo $state; ?>,<?php echo $city; ?></h5>
            <p><?php echo $des; ?></p>
           
            <form action="apply_job.php" method="post" id="JobPortal" enctype="multipart/form-data" style="border: 1px solid gray;">
              <div style="padding:2%;">
              <input type="hidden" name="job_seeker" value="<?php echo $_SESSION['email']; ?>" id="job_seeker">
              <input type="hidden" name="id_job" value="<?php echo $id_job ; ?>" id="id_job">
                <div class="row">
                  <div class="col-sm-6">
                    <label for="">Enter Your First Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name....">
                  </div>
                  <div class="col-sm-6">
                    <label for="">Enter Your Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name....">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="">Enter DOB</label>
                    <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of birth....">
                  </div>
                  <div class="col-sm-6">
                    <label for="">Choose Resume</label>
                    <input type="file" name="file" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <label for="">Enter Contact Number</label>
                    <input type="number" class="form-control" name="number" id="number" placeholder="Contact Number....">
                  </div>
                  <div class="col-sm-6">
                    <label for="">Email</label>
                    <input type="text"  class="form-control" disabled="disabled" value="<?php echo $_SESSION['email']; ?>">
                  </div>
                </div>
                
              <br>

                <input type="submit" name="submit" value="Submit" placeholder="Submit" class=" btn btn-primary btn-block">


              </div>
            </form>

          
          

            
            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <?php
   include('include/footer.php');
   ?>