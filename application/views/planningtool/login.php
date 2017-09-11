<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wedding Manager</title>
</head>
<body>

    <!--Header Starts
    ==================-->
    <?php include_once('application/views/header.php'); ?>
    <div class="main-form">
      <div class="content">
       <div class="container">
         <div class="form-body">
    <section>
                       <div class="step-three" style="">
                           <h2>Please Login</h2>

                           <form id="SingupForm" action="">
                               <div class="col-sm-6 col-sm-12">
                                 <div class="row">
                                   <div class="col-md-12">
                                     <i class="glyphicon glyphicon-user" style="font-size: 150px;margin-left: 125px;"></i>
                                   </div>
                                 </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-5 control-label">Email</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-sm-5 control-label">Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required="required">
                                        </div>
                                    </div>

                               <div class="form-group">
                                      <button class="btn btn-default" style="width: 100%;">Let me in</button>
                               </div>
                               <div class="form-group">
                                    <span><a href="signup">Create account </a> or forgot password</span>
                               </div>

                               </div>

                              <div class="col-md-6 col-sm-12">
                                   <div class="confirm">
                                       <div class="header">
                                           <h2 style="line-height:1">CONFIRM YOUR <br> REQUEST WITH</h2>
                                       </div>
                                       <div class="body">
                                           <button class="btn btn-default facebook"><span style="padding-right: 30px"><i class="fa fa-facebook" aria-hidden="true"></i></span>FACEBOOK</button>
                                           <button class="btn btn-default twitter"><span style="padding-right: 25px"><i class="fa fa-twitter" aria-hidden="true"></i></span> TWITTER</button>


                                           <p>This is just to confirm your request. We will never post anything without your premission.</p>
                                       </div>
                                   </div>
                               </div>

                               </form>

                       </div>
                   </section>
                 </div>

     </div>
     </div>
 </div>

  <?php include_once('application/views/footer.php'); ?>
</body>
</html>
