<?php// session_start();
//include('head.php');
?>
<footer class="text-center rvp-foot-bg" id="contactUs">
      <br id="contactUs">
      <img class="rvp-contact" src="Contact-Us.png" style="margin-top: 0px;" alt="contact us">
        <div id="rvp-tag" class="text-justify container rvp-footer " style="margin-top: 0px;">
	  <p class="text-light"><b><?php  //echo $_SESSION['SOS'];$_SESSION['SOS']="";?></b></p>
        <form class="rvp-form" action='contact.php' method='POST'>
          
          <input name="p_name" required type="text" class="form-control" placeholder="Enter Name"></br>
          
          <input name="mobile" required type="tel" class="form-control" pattern="[0-9]{10}" placeholder="Enter Mobile Number" ></br>
          
          <input name="problem" required type="text" class="form-control" placeholder="Email address"></br>
          
          <textarea name="msg" required type="text" style="" class="form-control" placeholder=" Type Your Message Here..."></textarea>
          <div class="container-fluid text-center">
            </br><input type='submit' class="rvp-submit" value="Send Message">
          </div>
        </form>
        <div class="container-fluid row">
          <div class="col-md-5"><iframe class="moto-widget-map-frame" style="border: 0px none; width: 400px; height: 300px; border-radius: 50px" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14237.104234675626!2d80.9989733!3d26.862969!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff5a57701393309b!2sVision%20India%20Services%20Private%20Limited%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1579459577670!5m2!1sen!2sin" width="50" height="50">&lt;br /&gt;
          </iframe></div>
          <div class="col-md-2"></div>
          <div class="col-md-5"><br><br>
          <h4 class="rvp-email">Email Us:- <a href="mailto:info@idiindiaedu.com">info@idiindiaedu.com</a> </br> Call Us: <a href="tel:7398743383">7398743383</a> </br></br></br></h4></div>

          <p>&nbsp;&nbsp;&nbsp;&copy; Copyright IDI <?php echo date("Y");?></p>
		      
        </div>
      </div>
    </footer>