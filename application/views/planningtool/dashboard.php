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

    <section>
    <div class="vendor">
        <div class="content">
            <div class="container">
              <div class="alert alert-info">
                  Please <a data-toggle="modal" data-target="#eventdetail"><strong>click here</strong></a> to provide information about your event.
              </div>
              <div id="timecounter" class="col-md-12 clock"></div>

              <h1><span>Plan your event with us</span></h1>
              <div>
                <div class="col-md-12" style="margin-top:30px;">
                  <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#home"><b>Dashboard</b></a></li>
                    <li><a data-toggle="tab" href="#menu1"><b>Budget Calculator</b></a></li>
                    <li><a data-toggle="tab" href="#menu2"><b>Guest List</b></a></li>
                    <li><a data-toggle="tab" href="#menu3"><b>Todo's</b></a></li>
                  </ul>

                  <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                      <h3>Wedding Planning</h3>
                      Planning a wedding involves endless details, deadlines, family drama, and far too often enough stress to make you want to just elope. Use our planning checklist, read our budgeting tips, and look into a wedding planner to help you pull it all together.
                    </div>

                    <div id="menu1" class="tab-pane fade">
                      <h3>Budget Calculator</h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <div id="menu2" class="tab-pane fade">
                      <h3>Guest List</h3>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>

                    <div id="menu3" class="tab-pane fade">
                      <h3>Todo's</h3>
                      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="eventdetail" role="dialog">
                <div class="modal-dialog">

                <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h1 class="modal-title vendor_contact_header" style="margin:0px;"><b>Tell Us About Your Event</b></h4>
                    </div>
                    <div class="modal-body">
                      <div class="main-form">
                         <div class="content" style="padding:0px;">
                          <div class="container" style="width:100%;" >
                            <div class="form-body">
                              <form action="#">
                                  <div class="form-group">
                                      <label for="eventtype" class="col-sm-5 control-label">Event Type</label>
                                      <div class="col-sm-7">
                                          <select name="eventtype" class="form-control" required>
                                              <option value="">Select Event</option>
                                              <option value="">Wedding</option>
                                              <option value="">Corporate Function</option>
                                              <option value="">Birthday</option>
                                              <option value="">Anniversary</option>
                                              <option value="">Holiday Party</option>
                                          </select>
                                      </div>
                                  </div>



                                  <div class="form-group">
                                      <label for="zip" class="col-sm-5 control-label">Event City</label>
                                      <div class="col-sm-7">
                                          <input type="text" class="form-control" placeholder="City" name="city" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="zip" class="col-sm-5 control-label">Event Address</label>
                                      <div class="col-sm-7">
                                          <input type="text" class="form-control" placeholder="Address" name="address" required>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="guestexpect" class="col-sm-5 control-label">Guest Expected</label>
                                      <div class="col-sm-7">
                                          <select name="guesexpected" class="form-control" required>
                                              <option value="">How Many</option>
                                              <option value="">Less Than 10</option>
                                              <option value="">10 - 50</option>
                                              <option value="">50 - 100</option>
                                              <option value="">100 - 200</option>
                                              <option value="">200 - 300</option>
                                              <option value="">300 - 400</option>
                                              <option value="">400 - 500</option>
                                              <option value="">500 or More</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="eventdate" class="col-sm-5 control-label">Event Date</label>
                                      <div class="col-sm-7">
                                          <input type="text" class="form-control datepicker" required name="eventdate" placeholder="MM-DD-YYYY">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="col-sm-7">
                                        <button style="padding:0px" class="form-control" name="Submit">Save</button>
                                    </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>

                </div>
              </div>
            </div>


        </div>
    </div>
  </section>

  <?php include_once('application/views/footer.php'); ?>
</body>
</html>
