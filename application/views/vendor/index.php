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
                <form>
                  <select name="category" class="vendor_search magnifying">
                      <option value="">Select Category</option>
                      <option value="">Bakeries</option>
                      <option value="">Beauty Saloon and Spa</option>
                      <option value="">Banquet Facilites</option>
                      <option value="">Florist</option>
                      <option value="">Catering</option>
                      <option value="">Decoration</option>
                  </select>
                  <select name="city" class="vendor_search magnifying" style="margin-left:20px;">
                    <option value="0">Select City</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Islamabad">Islamabad</option>
                  </select>
                  <button class="btn">Find Vendors</button>
                </form>
              </div>
            </div>
            <div class="container">
              <div class="col-md-12" style="margin-top:40px; z-index:1;">
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
              </div>

              <div class="col-md-12" style="margin-top:40px;">
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
              </div>

            </div>
        </div>
    </div>
  </section>

  <?php include_once('application/views/footer.php'); ?>
</body>
</html>
