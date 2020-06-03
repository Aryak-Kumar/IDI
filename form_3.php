<?php// session_start();
?>

<div class="d-block"id="register">
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="exampleModalLabel3">Register Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="conn2.php" method="POST">
          <center><input name="name" required type="text" class="form-control" placeholder="Name"></br>
          </center>
<center><input  name="email"  required type='email'  class="form-control" placeholder='E-mail'></center>
<br>
<center><input  name="no" required type="tel" class="form-control" pattern="[0-9]{10}" placeholder="Mobile Number" maxlength="10"></center>
<br>
<center><input  name="add" required type="text" class="form-control" placeholder="Address"></center>
<br> 
<center><input  name="school" required type="text" class="form-control" placeholder="School"></center>
<br>   
<center><select name="course">
  <option value="">--Select the Course--</option>
  <option value="abacus">ABACUS</option>
  <option value="calligraphy">CALLIGRPHY</option>
  <option value="VedicMaths">VEDIC MATHS</option>
  <option value="FingerCalculations">FINGER CALCULATIONS</option>
</select></center> </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type='submit' value="Send">
      </div>
    </div>
  </div>
</div>
</form>
</div>
</div>