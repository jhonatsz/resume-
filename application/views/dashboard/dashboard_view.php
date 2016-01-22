<!doctype HTML>
<html>
<head>
  <title>Resume+ | Dashboard</title>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/bootstrap.min.css'>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/nav.css'>
  <script type='javascript' src='<?=base_url();?>assets/js/bootstrap.min.js'></script>
</head>
<body>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="nav-side-menu">
    <div class="brand">Resume+</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li class='active'>
                  <a href="#" >
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li>
                  <a href="<?=base_url();?>index.php/jobs"><i class="fa fa-gift fa-lg"></i> Jobs List</a>
                </li>

                <li>
                  <a href="<?=base_url();?>index.php/profile"><i class="fa fa-globe fa-lg"></i>Profile</a>
                </li>
                <li>
                  <a href="<?=base_url();?>index.php/settings">
                  <i class="fa fa-users fa-lg"></i> Settings
                  </a>
                </li>
            </ul>
     </div>
</div>
</body>
</html>
