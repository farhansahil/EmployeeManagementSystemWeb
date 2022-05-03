<!DOCTYPE html>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/register.css">

<body>

    <div class="main">


        <section class="signup mt-5">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container container_new">
                <div class="signup-content">
                    <h2 class="text-center">Add Your Details!!</h2>
                    <form action="<?php echo base_url().'index.php/Auth/RegisterController/details'?>"
                        name="registerForm" id="registerForm signupform" class="signupform" method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" value=""
                                    class="form-input form-control <?php echo (form_error('first_name') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="First Name">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('first_name')); ?></p>
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" name="middle_name" id="middle_name" value=""
                                    class="form-input form-control <?php echo (form_error('middle_name') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="Middle Name">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('middle_name')); ?></p>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group">
                                <label for="fname">Last Name</label>
                                <input type="text" name="last_name" id="last_name" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="Last Name">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('last_name')); ?></p>

                            </div>
                            <div class="form-group">
                                <label for="dob">D.O.B</label>
                                <input type="date" name="dob" id="dob" value=""
                                    class="form-input form-control <?php echo (form_error('dob') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="dd/mm/yy">
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
                                <input type="file" name="qualification" id="qualification" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Qualification">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('qualification')); ?></p>

                                </div>


                        </div>

                        <div class="form-row">

                            <div class="form-group">
                                <label for="cast">Cast</label>
                                <input type="text" name="cast" id="cast" value="" 
                                class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="Cast">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('cast')); ?></p>

                                </div>


                        </div>

                        <div class="form-row">

                            <div class="form-group">
                                <label for="subcast">Sub Cast</label>
                                <input type="text" name="subcast" id="subcast" value="" class="form-input form-control"
                                    placeholder="Sub Cast">
                            </div>


                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input type="text" name="designation" id="designation" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Designation">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('desifnation')); ?></p>

                            </div>
                        </div>





                        <div class="form-row">
                            <div class="form-group">
                                <label for="retirement_date">Retirement Date</label>
                                <input type="text" name="retirement_date" id="retirement_date" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Retirement Date">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('retirement_date')); ?></p>

                                </div>
                            <div class="form-group">
                                <label for="experience">Experience</label>
                                <input type="file" name="experience" id="experience" value="" 
                                class="form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="Experience">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('experience')); ?></p>

                                </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="aadhar_no">Aadhar Card Number</label>
                                <input type="text" name="aadhar_no" id="aadhar_no" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Aadhar Card Number">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('aadhar_no')); ?></p>

                                </div>
                            <div class="form-group">
                                <label for="pan_no">Pan Card Number</label>
                                <input type="text" name="pan_no" id="pan_no" value=""
                                 class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="Pan Card Number">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('pan_no')); ?></p>

                                </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="blood_grp">Blood Group</label>
                                <input type="text" name="blood_grp" id="blood_grp" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Blood Group">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('blood_grp')); ?></p>

                                </div>
                            <div class="form-group">
                                <label for="identification_mark">Identification Mark</label>
                                <input type="text" name="identification_mark" id="identification_mark" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Identification Mark">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('identification_mark')); ?></p>

                                </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" name="photo" id="photo" value="" 
                                class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>">
                                <p class="invalid-feedback "><?php echo strip_tags(form_error('photo')); ?></p>

                            </div>
                            <div class="form-group">
                                <label for="contact_no">Contact Number</label>
                                <input type="text" name="contact_no" id="contact_no" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Contact Number">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('contact_no')); ?></p>

                                </div>


                        </div>


                        <div class="form-row">
                            <div class="form-group">
                                <label for="alternate_contact_no">Alternate Contact Number</label>
                                <input type="text" name="alternate_contact_no" id="alternate_contact_no" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Alternate Contact Number">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('alternate_contact_no')); ?></p>

                                </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea 
                                class="form-input form-control textarea <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" name="address" id="address"
                                    placeholder="Address"></textarea>
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('address')); ?></p>

                                </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="city">City Name</label>
                                <input type="text" name="city" id="city" value="" 
                                class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="City Name">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('city')); ?></p>

                                </div>
                            <div class="form-group">
                                <label for="pin_code">Pin Code</label>
                                <input type="text" name="pin_code" id="pin_code" value=""
                                    class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>" placeholder="Pin Code">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('pin_code')); ?></p>

                                </div>


                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" value="" 
                                class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="State">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('state')); ?></p>

                                </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" value="" 
                                class="form-input form-control <?php echo (form_error('lname') !=  "") ? 'is-invalid' : '' ?>"
                                    placeholder="Country">
                                    <p class="invalid-feedback "><?php echo strip_tags(form_error('country')); ?></p>

                                </div>


                        </div>




                        <div class="form-row">
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Submit" />
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