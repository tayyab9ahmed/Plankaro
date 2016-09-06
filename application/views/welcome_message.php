<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wedding Manager</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/hamburgers.css">
    <link rel="stylesheet" href="css/creativelink/demo.css">
    <link rel="stylesheet" href="css/creativelink/component.css">
    <link rel="stylesheet" href="css/creativelink/normalize.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <!--Header Starts
    ==================-->
    <header>
        
        <!--Navbar Starts
        ==================-->
        <nav class="navbar navbar-default">
            <a class="pull-left"><img src="images/logo.png" alt="logo"></a>
            <div class="container">
                <ul class="nav navbar-nav navbar-right header-menu hidden-xs">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Article & Advice</a></li>
                    <li><a href="#">Wedding Cost</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="admin/account">Login</a></li>
                </ul>
                <!---<div class="hamburger hamburger--emphatic-r is-active col-md-1 col-md-offset-1">
                    <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                    </div>
                </div>-->

            </div>
        </nav>
        
        <!--Header Image
        =================-->
        <div class="header-image">
            <div class="bg-color">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h1><span>WE CREATE</span> <br>YOU CELEBRATE</h1>
                            </div>
                            <div class="col-md-6">
                                <div class="header-form">
                                    <form action="">
                                        <select name="category" class="form-control">
                                            <option value="">--Select Category--</option>
                                            <option value="">Bakeries</option>
                                            <option value="">Beauty Saloon and Spa</option>
                                            <option value="">Banquet Facilites</option>
                                            <option value="">Florist</option>
                                            <option value="">Catering</option>
                                            <option value="">Decoration</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="5 Digit Zip Code" name="zipcode">
                                        <button class="btn btn-default">Find Vendors</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    
    <!--Services
    ==============-->
    <section>
        <div class="services">
           <div class="container">
               <h2>It’s Simple. You Have An Event To Plan And <br><span> We Have The Solution</span></h2>
                <div class="owl-carousel" id="service-slider">
                   
                    <div class="item">
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/bangles.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/food.png" alt="">
                                <div class="content">
                                    <h1>Wedding</h1>
                                </div>
                            </a>
                        </div>
                        
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/decorators.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/flags.png" alt="">
                                <div class="content">
                                    <h1>Decorations</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/Dj.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/dj.png" alt="">
                                <div class="content">
                                    <h1>DJ</h1>
                                </div>
                            </a>
                        </div>
                        
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/bridal_saloon.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/salon.png" alt="">
                                <div class="content">
                                    <h1>Bridal Salon</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                        
                    
                    <div class="item">
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/bakery.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/bakery.png" alt="">
                                <div class="content">
                                    <h1>Bakery</h1>
                                </div>
                            </a>
                        </div>
                        
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/catering.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/catering.png" alt="">
                                <div class="content">
                                    <h1>Catering</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                        
                        
                    
                    <div class="item">
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/Invitation.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/note.png" alt="">
                                <div class="content">
                                    <h1>Invitation</h1>
                                </div>
                            </a>
                        </div>
                        
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/limousine.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/tool.png" alt="">
                                <div class="content">
                                    <h1>Limousine</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/photographer.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/camera.png" alt="">
                                <div class="content">
                                    <h1>Photography</h1>
                                </div>
                            </a>
                        </div>
                        
                        <div class="row" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),url(images/florist.jpg);background-size: cover;">
                            <a href="#">
                                <img src="images/florist.png" alt="">
                                <div class="content">
                                    <h1>Florist</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                </div>
           </div>
        </div>
    </section>   

    <!--WedingCost-->
    <section>
        <div class="weddingcost">
            <div class="content" style="">
                <div class="container">
                    <h1><span>Wedding Cost Savings</span><br>
                    How much others couples in your area spent on wedding </h1> 
                    <button class="btn btn-default">Wedding Cost</button>
                </div>    
            </div>
        </div>
    </section>

    <!--Latest News
    =====================-->
    
    <section>
        <div class="blog">
            <div class="container">
                <h1>LATEST NEWS</h1>
                <h4>Whether planning an intimate gathering or a wedding for hundreds, <br> learn the details on how to make your event successful.</h4>
                
                <div class="col-md-4 col-sm-6">
                    <img src="images/blog1.jpg" class="img-responsive" alt="">
                    <div class="content">
                        <div class="date"><p>January 12, 2016</p></div>
                        <h3>Sed Tristique Urna Ut Nibh</h3>
                        <p class="blog-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <a href="">Read More</a>
                    </div>
                    
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <img src="images/blog2.jpg" class="img-responsive" alt="">
                    <div class="content">
                        <div class="date"><p>December 05, 2015</p></div>
                        <h3>De Finibus Bonorum Et Malorum</h3>
                        <p class="blog-content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                        <a href="">Read More</a>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-4 hidden-sm">
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
    </section>
    
    
    <!--Footer
    =============-->
    
    <footer>
        <div class="content">
            <div class="container">
                
                <div class="subscribe">
                    <div class="col-md-6">
                        <h1>SUBSCRIBE NOW</h1>
                        <h3>To get our latest offers</h3>
                    </div>

                    <div class="col-md-5 pull-right">
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <div class="brand"><h2><a href="">BRAND</a></h2></div>
                    <ul class="nav navbar-nav">
                        <li><a href="">Home</a></li>
                        <li><a href="">Article & Advice</a></li>
                        <li><a href="">Wedding Cost</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Login</a></li>
                    </ul>
                    <div class="social">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    </div>   
                </div>
                
            </div>
        </div>
    </footer>
    
    <div class="copyright">CopyRights</div>
    
    
    <!--Footer
    =============-->
    
    
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/linkhover.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoint.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>