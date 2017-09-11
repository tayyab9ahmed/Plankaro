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
              <h1><span>Find The Best Suppliers In Your Area</span></h1>
              <div class="col-md-12 nav-search">
                <form method="post" action="search">
                  <select required="required" name="vendor_type"  class="vendor_search magnifying select-left">
                      <option value="">Select Category</option>
                      <?php if(isset($get_all_vendor_type) && count($get_all_vendor_type) > 0)
                      {
                        foreach ($get_all_vendor_type as $vendor_type)
                        {
                            ?><option value="<?php echo $vendor_type['Vendor_type_id']; ?>"><?php echo $vendor_type['Vendor_type_name']; ?></option>

                        <?php
                        }
                      }?>
                  </select>
                  <select  required="required" name="city" class="vendor_search magnifying select-left" style="margin-left:20px;">
                    <option value="">Select City</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Islamabad">Islamabad</option>
                  </select>
                  <input type="submit" value="Find Vendors" class="btn btn-success" style="font-size:20px; margin-left:150px">
                </form>
              </div>
            </div>

              <div class="container">
              <div class="col-md-12" style="margin-top:40px; margin-bottom:40px; z-index:1;">
                <?php if (isset($listing) && count($listing) > 0)
                {
                  foreach ($listing as $dat)
                  {
                    ?>
                <div class="col-md-6 vendor-box" style="margin-bottom:20px">

                    <a href="detail/<?php echo $dat['Vendor_id']; ?>">
                    <img src="<?php echo base_url() ; ?>images/blog1.jpg" class="img-responsive" alt="">
                    <div class="content">
                        <h3 class="vendor_name" style="font-size: 20px"><?php echo $dat['Vendor_name']; ?></h3>

                        <div class="col-xs-12">
                          <i class="glyphicon glyphicon-map-marker" style="font-size:20px;"></i>
                          <span style="font-size:15px; padding-left:15px; color:#aa6708;"><b><?php echo $dat['Vendor_address'] ; ?></b></span>
                        </div>
                        <hr>
                    </div>
                  </a>
                </div>
              <?php
                  }
                } ?>
                <!--<div class="col-md-4 col-sm-6 vendor-box">
                    <img src="images/blog2.jpg" class="img-responsive" alt="">
                    <div class="content">
                        <div class="date"><p>December 05, 2015</p></div>
                        <h3>De Finibus Bonorum Et Malorum</h3>
                        <p class="blog-content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                        <a href="">Read More</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 vendor-box">
                    <img src="images/blog3.jpg" class="img-responsive" alt="">
                    <div class="content">
                        <div class="date"><p>October 18, 2015</p></div>
                        <h3>Vero Eos Et Accusamus Et Iusto</h3>
                        <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <a href="">Read More</a>
                    </div>
                </div>-->
              </div>

              <!--<div class="col-md-12" style="margin-top:40px;">
                <div class="col-md-4 col-sm-6 vendor-box">
                    <img src="images/blog1.jpg" class="img-responsive" alt="">
                    <div class="content">
                        <div class="date"><p>January 12, 2016</p></div>
                        <h3>Sed Tristique Urna Ut Nibh</h3>
                        <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <a href="">Read More</a>
                    </div>

                </div>

                <div class="col-md-4 col-sm-6 vendor-box">
                    <img src="images/blog2.jpg" class="img-responsive" alt="">
                    <div class="content">
                        <div class="date"><p>December 05, 2015</p></div>
                        <h3>De Finibus Bonorum Et Malorum</h3>
                        <p class="blog-content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                        <a href="">Read More</a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 vendor-box">
                    <img src="images/blog3.jpg" class="img-responsive" alt="">
                    <div class="content">
                        <div class="date"><p>October 18, 2015</p></div>
                        <h3>Vero Eos Et Accusamus Et Iusto</h3>
                        <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <a href="">Read More</a>
                    </div>
                </div>
              </div>-->

            </div>

        </div>
    </div>
  </section>

  <?php include_once('application/views/footer.php'); ?>
</body>
</html>
