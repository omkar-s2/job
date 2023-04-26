<?php
include('include/header.php');
?>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span>GLA UNIVERSITY,MATHURA,UTTAR PRADESH, INDIA</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+91 9082638766</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">anurag.singh2_cs20@gla.ac.in, deepali.sharma@gla.ac.in</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">www.gla.ac.in</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="contact_submit.php" method="post"  class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              
             
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Hope you find job relevant to you!!!</h2>
              <p>Thank you for choosing our platform to further your career aspirations. We are committed to providing you with the best possible resources and support to help you achieve your goals.</p>
              
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
include('include/footer.php');
?>