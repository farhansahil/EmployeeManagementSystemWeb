<!DOCTYPE html>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/register.css">

<body>

    <div class="main">

    <nav class="navbar navbar-expand-md navbar-light fixed-top text-center bg-light border-bottom">
  <div class="container-fluid d-flex align-items-center text-center justify-center">

    <a href="" class="d-flex align-items-center text-center mb-4 mt-4">
      <h5 class="logo-title ms-lg-4 text-center">Employee Management System</h5>
    </a>

  </div>
</nav>

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <h2 class="text-center">Registraion Form</h2>
                    <form action="<?php echo base_url().'index.php/Auth/RegisterController/register'?>" name="registerForm" id="registerForm signupform" class="signupform" method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" value="" class="form-input form-control <?php echo (form_error('first_name') !=  "") ? 'is-invalid' : '' ?>" placeholder="First Name">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('first_name')); ?></p>
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" name="middle_name" id="middle_name" value="" class="form-input form-control <?php echo (form_error('middle_name') !=  "") ? 'is-invalid' : '' ?>" placeholder="Middle Name">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('middle_name')); ?></p>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group">
                                <label for="fname">Last Name</label>
                                <input type="text" name="last_name" id="last_name" value="" class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Last Name">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('last_name')); ?></p>
                        
                            </div>
                            <div class="form-group">
                                <label for="dob">D.O.B</label>
                                <input type="date" name="dob" id="dob" value="" class="form-input form-control <?php echo (form_error('dob') !=  "") ? 'is-invalid' : '' ?>" placeholder="dd/mm/yy">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('dob')); ?></p>
                        
                            </div>

                         
                        </div>
                      
                        <div class="form-row">
                            <div class="form-radio">
                                <label for="gender">Gender</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Male</label>
    
                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Female</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="qualification">Qualification</label>
                                <input type="text" name="qualification" id="qualification" value="" class="form-input form-control" placeholder="Qualification">
                            </div>

                          
                        </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="sevarth_id">Sevarth ID</label>
                                    <input type="text" name="sevarth_id" id="sevarth_id" value="" class="form-input form-control" placeholder="Sevarth ID">
                                </div>
                            

                          
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="cast">Cast</label>
                                <input type="text" name="cast" id="cast" value="" class="form-input form-control" placeholder="Cast">
                            </div>
                            <div class="form-group">
                                <label for="subcast">Sub Cast</label>
                                <input type="text" name="subcast" id="subcast" value="" class="form-input form-control" placeholder="Sub Cast">
                            </div>

                          
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="" class="form-input form-control" placeholder="Email">
                        
                            </div>
                        
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" value="" class="form-input form-control" placeholder="Password">
                        
                            </div>

                          
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="role_id">Role</label>
                                <select class="form-select" name="role_id" id="role_id">
                                <option value="1">EMPLOYEE</option>
                                <option value="2">HOD</option>
                                <option value="3">PRINCIPLE</option>
                                <option value="4">REGISTRAR</option>
                        
                                </select>      </div>
                        
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" id="designation" value="" class="form-input form-control" placeholder="Designation">
                        
                            </div>

                          
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="retirement_date">Retirement Date</label>
                                <input type="text" name="retirement_date" id="retirement_date" value="" class="form-input form-control" placeholder="Retirement Date">
                            </div>
                            <div class="form-group">
                                <label for="experience">Experience</label>
                                <input type="text" name="experience" id="experience" value="" class="form-control" placeholder="Experience">
                            </div>

                          
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="aadhar_no">Aadhar Card Number</label>
                                <input type="text" name="aadhar_no" id="aadhar_no" value="" class="form-input form-control" placeholder="Aadhar Card Number">
                            </div>
                            <div class="form-group">
                                <label for="pan_no">Pan Card Number</label>
                                <input type="text" name="pan_no" id="pan_no" value="" class="form-input form-control" placeholder="Pan Card Number">
                            </div>

                          
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="blood_grp">Blood Group</label>
                                <input type="text" name="blood_grp" id="blood_grp" value="" class="form-input form-control" placeholder="Blood Group">
                            </div>
                            <div class="form-group">
                                <label for="identification_mark">Identification Mark</label>
                                <input type="text" name="identification_mark" id="identification_mark" value="" class="form-input form-control" placeholder="Identification Mark">
                            </div>

                          
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" name="photo" id="photo" value="" class="form-input form-control" >
                            </div>
                            <div class="form-group">
                                <label for="contact_no">Contact Number</label>
                                <input type="text" name="contact_no" id="contact_no" value="" class="form-input form-control" placeholder="Contact Number">
                            </div>

                          
                        </div>

                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="alternate_contact_no">Alternate Contact Number</label>
                                <input type="text" name="alternate_contact_no" id="alternate_contact_no" value="" class="form-input form-control" placeholder="Alternate Contact Number">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                            <textarea class="form-input form-control textarea" name="address" id="address" placeholder="Address"></textarea>
                            </div>

                          
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="city">City Name</label>
                                <input type="text" name="city" id="city" value="" class="form-input form-control" placeholder="City Name">
                            </div>
                            <div class="form-group">
                                <label for="pin_code">Pin Code</label>
                                <input type="text" name="pin_code" id="pin_code" value="" class="form-input form-control" placeholder="Pin Code">
                            </div>

                          
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" value="" class="form-input form-control" placeholder="State">
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" value="" class="form-input form-control" placeholder="Country">
                            </div>

                          
                        </div>

                        <div class="form-row">
                        <div class="form-group">
                                <label for="hint_question">Hint Question (In case you forget the password)</label>
                                <input type="text" name="hint_question" id="hint_question" value="" class="form-input form-control text-uppercase" placeholder="Enter the question">
                            </div>

                            <div class="form-group">
                                <label for="hint_answer">Answer (enter the answer which you can remember)</label>
                                <input type="text" name="hint_answer" id="hint_answer" value="" class="form-input form-control text-uppercase" placeholder="Enter the answer">
                            </div>

                          
                        </div>

                        
                     <div class="form-row">
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
 
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>