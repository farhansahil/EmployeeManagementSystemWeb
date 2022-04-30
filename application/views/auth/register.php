<!DOCTYPE html>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/register.css">

<body>

    <div class="main">


        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <h2 class="text-center">Registraion Form</h2>
                    <form action="<?php echo base_url().'index.php/Auth/RegisterController/register'?>" name="mainForm" id="mainForm signupform" class="signupform" method="post">
                        <div class="form-row">
                        <div class="form-group">
                                    <label for="sevarth_id">Sevarth ID</label>
                                    <input type="text" name="sevarth_id" id="sevarth_id" value="" class="form-input form-control" placeholder="Sevarth ID">
                        </div>

                        <div class="form-group">
                                    <label for="org_id">Organization ID</label>
                                    <input type="text" name="org_id" id="org_id" value="" class="form-input form-control" placeholder="Organization ID">
                        </div>

                            
                        </div>

                        <div class="form-row">
                        <div class="form-group">
                                    <label for="dept_id">Department ID</label>
                                    <input type="text" name="dept_id" id="dept_id" value="" class="form-input form-control" placeholder="Department ID">
                        </div>

                        <div class="form-group">
                                <label for="role_id">Role</label>
                                <select class="form-select" name="role_id" id="role_id">
                                <option value="1">EMPLOYEE</option>
                                <option value="2">HOD</option>
                                <option value="3">PRINCIPLE</option>
                                <option value="4">REGISTRAR</option>
                        
                                </select>      </div>

                            
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