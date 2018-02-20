<header>
  <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/font-awesome.min.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/animate.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/hamburgers.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/creativelink/demo.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/creativelink/component.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/creativelink/normalize.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/switchable.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/datepicker.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/style.css');?>">

  <link rel="stylesheet" href="<?php echo base_url('/css/owl.carousel.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/owl.theme.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('/css/flipclock.css');?>">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>

  <script src="<?php echo base_url('js/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('js/linkhover.js');?>"></script>
  <script src="<?php echo base_url('js/owl.carousel.min.js');?>"></script>
  <script src="<?php echo base_url('js/waypoint.min.js');?>"></script>
  <script src="<?php echo base_url('js/jquery.counterup.min.js');?>"></script>
  <script src="<?php echo base_url('js/script.js');?>"></script>
  <script src="<?php echo base_url('js/bootstrapvalidator.js');?>"></script>
  <script src="<?php echo base_url('js/flipclock.min.js');?>"></script>
  <script src="<?php echo base_url('js/flipclock.js');?>"></script>
  <script src="<?php echo base_url('js/switchable.min.js');?>"></script>


    <!--Navbar Starts
    ==================-->
    <nav class="navbar navbar-default">
       <div class="logo12">
       <a href="<?php echo base_url()?>" class="pull-left" style="margin: 0px auto;"><img style="height:100px;" src="<?php echo base_url('/images/logo.png');?>" alt="logo">

       </a>
        </div>
        <div class="container"><?php $User_id = $this->session->userdata('User_id');?>
            <ul class="nav navbar-nav navbar-right header-menu hidden-xs">
                <li><a href="<?php echo base_url()?>"><b><span style="color:#E7873B">Home</span></b></a></li>
                <li><a href="#"><b><span style="color:#E7873B">Suppliers</span></b></a></li>
                <li><a href="<?php echo base_url()?>WeddingCost"><b><span style="color:#E7873B">Cost</span></b></a></li>
                <li><a href="#"><b><span style="color:#E7873B">News</span></b></a></li>
                <li><?php if(isset($User_id) && count($User_id)>0)
                      {?>
                    <a href="<?php echo base_url()?>Welcome/logout"><b><span style="color:#E7873B">LogOut</span></b></a>
                    <?php
                      }
                    else
                    {?>
                    <a href="<?php echo base_url()?>Welcome/login"><b><span style="color:#E7873B">Login</span></b></a>
                  <?php }?>
                </li>
            </ul>

        </div>
    </nav>
    <?php if(isset($User_id) && count($User_id)>0)
          {?>
    <div>
      <nav class="bellow-navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li style="margin-left: 80px;"><a class="subheader" href="#"><i class="glyphicon glyphicon-th-large"></i><b><span >Dashboard</span></b></a></li>
                <li style="margin-left: 80px;"><a class="subheader" href="<?php echo base_url()?>WeddingCost"><i class="glyphicon glyphicon-floppy-saved"></i><b><span >Quote Request</span></b></a></li>
                <li style="margin-left: 80px;"><a class="subheader" href="#"><i class="	glyphicon glyphicon-edit"></i><b><span >Gigs</span></b></a></li>
                <li style="margin-left: 80px;"><a class="subheader" href="<?php echo base_url()?>planningtool/login"><i class="glyphicon glyphicon-user"></i><b><span >Profile</span></b></a></li>
            </ul>

        </div>
      </nav>
    </div>
  <?php }?>

</header>
