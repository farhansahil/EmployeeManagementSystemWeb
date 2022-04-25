<div class="h-100vh">
<nav>
        <!-- <div class="container-fluid d-flex align-items-center justify-content-center mb-0  py-3 shadow">
        <h2>Employee Management System</h2>
    </div> -->
        <div class="container-fluid d-flex border-bottom align-items-center justify-content-center mb-0  py-3 shadow">
            <img src="<?php echo base_url(); ?>public/logo.png" alt="logo" class="img-fluid" class="logo-img" style="width:3rem;height:3rem;border-radius:5px;">
            <h3 class="logo-title mb-0 ms-2">Employee Management System</h3>
        </div>
    </nav>
    <div class="container">
        <?php
            $msg = $this->session->flashdata('msg');
            if($msg != ""){
                echo "<div class='alert alert-success'>'.$msg.'</div>";
            }
        ?>
        <div class="card mt-4">
  <div class="card-header">
    Register Here
  </div>
  <form action="<?php echo base_url().'index.php/Auth/RegisterController/register'?>" name="registerForm" id="registerForm" method="post">
  <div class="card-body register">
    <p class="card-text">Please fill the details!!</p>
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name" value="" class="form-control <?php echo (form_error('first_name') !=  "") ? 'is-invalid' : '' ?>" placeholder="First Name">
        <p class="invalid-feedback"><?php echo strip_tags(form_error('first_name')); ?></p>
    </div>
    <div class="form-group">
        <label for="middle_name">Middle Name</label>
        <input type="text" name="middle_name" id="middle_name" value="" class="form-control <?php echo (form_error('middle_name') !=  "") ? 'is-invalid' : '' ?>" placeholder="Middle Name">
        <p class="invalid-feedback"><?php echo strip_tags(form_error('middle_name')); ?></p>
    </div>
    <div class="form-group">
        <label for="fname">Last Name</label>
        <input type="text" name="last_name" id="last_name" value="" class="form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Last Name">
        <p class="invalid-feedback"><?php echo strip_tags(form_error('last_name')); ?></p>

    </div>
    <div class="form-group">
        <label for="dob">D.O.B</label>
        <input type="date" name="dob" id="dob" value="" class="form-control <?php echo (form_error('dob') !=  "") ? 'is-invalid' : '' ?>" placeholder="DD/MM/YY">
        <p class="invalid-feedback"><?php echo strip_tags(form_error('dob')); ?></p>

    </div>
    <div class="form-group">
        <label for="qualification">Qualification</label>
        <input type="text" name="qualification" id="qualification" value="" class="form-control" placeholder="Qualification">
    </div>
    <div class="form-group">
        <label for="cast">Cast</label>
        <input type="text" name="cast" id="cast" value="" class="form-control" placeholder="Cast">
    </div>
    <div class="form-group">
        <label for="subcast">Sub Cast</label>
        <input type="text" name="subcast" id="subcast" value="" class="form-control" placeholder="Sub Cast">
    </div>
    <div class="form-group">
        <label for="designation">Designation</label>
        <select class="form-select" name="designation" id="designation">
        <option value="1">EMPLOYEE</option>
        <option value="2">HOD</option>
        <option value="3">PRINCIPLE</option>
        <option value="4">REGISTRAR</option>

        </select>      </div>
    <div class="form-group">
        <label for="retirement_date">Retirement Date</label>
        <input type="text" name="retirement_date" id="retirement_date" value="" class="form-control" placeholder="Retirement Date">
    </div>
    <div class="form-group">
        <label for="experience">Experience</label>
        <input type="text" name="experience" id="experience" value="" class="form-control" placeholder="Experience">
    </div>
    <div class="form-group">
        <label for="aadhar_no">Aadhar Card Number</label>
        <input type="text" name="aadhar_no" id="aadhar_no" value="" class="form-control" placeholder="Aadhar Card Number">
    </div>
    <div class="form-group">
        <label for="pan_no">Pan Card Number</label>
        <input type="text" name="pan_no" id="pan_no" value="" class="form-control" placeholder="Pan Card Number">
    </div>
    <div class="form-group">
        <label for="blood_grp">Blood Group</label>
        <input type="text" name="blood_grp" id="blood_grp" value="" class="form-control" placeholder="Blood Group">
    </div>
    <div class="form-group">
        <label for="identification_mark">Identification Mark</label>
        <input type="text" name="identification_mark" id="identification_mark" value="" class="form-control" placeholder="Identification Mark">
    </div>
    <div class="form-group">
        <label for="photo">Photo</label>
        <input type="file" name="photo" id="photo" value="" class="form-control" >
    </div>
    <div class="form-group">
        <label for="contact_no">Contact Number</label>
        <input type="text" name="contact_no" id="contact_no" value="" class="form-control" placeholder="Contact Number">
    </div>
    <div class="form-group">
        <label for="alternate_contact_no">Alternate Contact Number</label>
        <input type="text" name="alternate_contact_no" id="alternate_contact_no" value="" class="form-control" placeholder="Alternate Contact Number">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
    <textarea class="form-control textarea" name="address" id="address" placeholder="Address"></textarea>
    </div>
    <div class="form-group">
        <label for="city">City Name</label>
        <input type="text" name="city" id="city" value="" class="form-control" placeholder="City Name">
    </div>
    <div class="form-group">
        <label for="pin_code">Pin Code</label>
        <input type="text" name="pin_code" id="pin_code" value="" class="form-control" placeholder="Pin Code">
    </div>
    <div class="form-group">
        <label for="state">State</label>
        <input type="text" name="state" id="state" value="" class="form-control" placeholder="State">
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" name="country" id="country" value="" class="form-control" placeholder="Country">
    </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-select" name="gender" id="gender">
        <option value="1">Male</option>
        <option value="2">Female</option>
        <option value="3">Other</option>

        </select>    
    </div>
    <div class="form-group mt-3 text-center">
    <button class="btn btn-primary">REGISTER</button>
    </div>
</div>
</form>
</div>
        </div>
    </div>
</div>

