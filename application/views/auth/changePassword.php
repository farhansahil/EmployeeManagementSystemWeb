<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class="form-gap"></div>
<div class="container" style="margin-top: 70px">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Change Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                  <form action="<?php echo base_url().'index.php/Auth/RegisterController/changePassword'?>" name="forgotForm" id="forgotForm" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-key color-blue"></i></span>
                          <input id="password" name="password" placeholder="New Password" class="form-control"  type="password">
                          </div>
                          <div class="input-group pt-3">

                          <span class="input-group-addon"><i class="fa fa-key color-blue"></i></span>
                          <input id="new_password" name="new_password" placeholder="Confirm New Password" class="form-control"  type="password">
                        </div>  
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>