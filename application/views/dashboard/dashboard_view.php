<!doctype HTML>
<html>
<head>
  <title>Resume+ | Dashboard</title>
 
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/nav.css'>
 
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!--<link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/font-awesome.css'>-->
  
  <!--<link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/bootstrap.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script type='javascript' src='<?=base_url();?>assets/js/bootstrap.js'></script>-->
   
  <!--<link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/bootstrap.css'>
  <script src='<?=base_url();?>assets/js/jquery.min.js'></script>
  <script src='<?=base_url();?>assets/js/bootstrap.js'></script>-->
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
</head>
<body>
  
<div class='col-md-3' style='margin-left:-15px;'>
<div class="nav-side-menu">
    <div class="brand">Resume+</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li class='active'>
                  <a href="<?=base_url();?>index.php/dashboard" >
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li>
                  <a href="<?=base_url();?>index.php/jobs"><i class="fa fa-gift fa-lg"></i> Jobs</a>
                </li>

                <li>
                  <a href="<?=base_url();?>index.php/profile"><i class="fa fa-globe fa-lg"></i>Profile</a>
                </li>
                <li>
                  <a href="<?=base_url();?>index.php/auth/logout">
                  <i class="fa fa-users fa-lg"></i> Logout
                  </a>
                </li>
            </ul>
     </div>
</div>
</div>

<div class='col-md-9'>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
	<li data-target="#myCarousel" data-slide-to="5"></li>
	<li data-target="#myCarousel" data-slide-to="6"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style='margin-top:100px;'>
    <div class="item active">
      <img src="<?=base_url();?>assets/img/slider/Info1.png" alt="Chania">
    </div>

    <div class="item">
      <img src="<?=base_url();?>assets/img/slider/Info2.png" alt="Chania">
    </div>

    <div class="item">
      <img src="<?=base_url();?>assets/img/slider/Info3.png" alt="Flower">
    </div>

    <div class="item">
      <img src="<?=base_url();?>assets/img/slider/Info4.png" alt="Flower">
    </div>
	
	 <div class="item">
      <img src="<?=base_url();?>assets/img/slider/Info5.png" alt="Flower">
    </div>
	
	    <div class="item">
      <img src="<?=base_url();?>assets/img/slider/Info6.png" alt="Flower">
    </div>
	
	    <div class="item">
      <img src="<?=base_url();?>assets/img/slider/Info7.png" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</body>
</html>
