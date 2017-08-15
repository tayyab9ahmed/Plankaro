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
                           <h2>Sign Up</h2>
                           <div class="row">
                             <div class="col-md-8">
                               <i class="glyphicon glyphicon-user" style="font-size: 150px;margin-left: 365px;"></i>
                             </div>
                           </div>
                           <form id="SingupForm" action="">
                               <div class="col-sm-12">

                                   <div class="form-group">
                                        <label for="name1" class="col-sm-5 control-label">First Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="First Name" name="name1" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="name2" class="col-sm-5 control-label">Last Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" placeholder="Last Name" name="name2" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-sm-5 control-label">Email</label>
                                        <div class="col-sm-7">
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-5 control-label">Phone Number</label>
                                        <div class="col-sm-7">
                                            <input type="text" id="phoneNumber" class="form-control" placeholder="03321231231" name="phoneNumber" required>
                                            <span id='message_phone'></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phone" class="col-sm-5 control-label">Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" id="password" class="form-control" placeholder="password" name="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="col-sm-5 control-label">Confirm Password</label>
                                        <div class="col-sm-7">
                                            <input type="password" id="confirm_password" placeholder="password" class="form-control"  name="confirm_password" required>
                                            <span id='message_pass'></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="preference" class="col-sm-5 control-label">Contact Prefences</label>
                                        <div class="col-sm-7">
                                            <select name="preference" class="form-control">
                                                <option value="">Phone or Email</option>
                                                <option value="">Phone</option>
                                                <option value="">Email</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-7">
                                      <button class="btn btn-warning pull-left prev-2" style="width: 150px;margin-left: 268px;">Save</button>
                                    </div>
                                    </div>
                               </div>

                              <!-- <div class="col-md-6 col-sm-12">
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
                             -->
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
