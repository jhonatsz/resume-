<!doctype HTML>
<html>
<head>
  <title>Resume+ | Jobs</title>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/bootstrap.min.css'>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/nav.css'>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/jobs.css'>
  <script type='javascript' src='<?=base_url();?>assets/js/bootstrap.min.js'></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script type='javascript' src='<?=base_url();?>assets/js/bootstrap.min.js'></script>

</head>
<body>
<!-- NAV -->
<div class='col-md-3' style='margin-left:-15px;'>
<div class="nav-side-menu">
    <div class="brand">Resume+</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="<?=base_url();?>index.php/dashboard">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>

                <li class='active'>
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Jobs</a>
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
</div>
</div>
<!-- END OF NAV -->
    <div class='col-md-9'>
      <div class="col-md-10 col-md-offset-2" style='margin-bottom:20px;margin-left:0px;'>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." id="searchTerm" name="searchTerm" value='' required>
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="action"><span class="glyphicon glyphicon-search"></span> Search</button>
                </span>
            </div><!-- /input-group -->
      </div>

      <?php if($type == 'hr'){?>
      <div class="col-md-2 col-md-offset-2" style='margin-bottom:20px;margin-left:0px;'>
            <div class="input-group">
                <button class="btn btn-default" type="submit" name="action" onclick='alert('YEA');'><span class="glyphicon glyphicon-plus"></span>Add Job</button>
                </span>
            </div><!-- /input-group -->
      </div>
      <?php } ?>
      <?php foreach ($jobs_list as $row) : ?>
        <div class="col-sm-4 col-md-4">
            <div class="post">
                <div class="post-img-content" style='height:150px;'>
                    <img src="http://placehold.it/460x250/B42828/B42828&text=jQuery" class="img-responsive" />
                    <span class="post-title"><b><?=$row['name'];?></b><br />
                        </span>
                </div>
                <div class="content" style="padding-top:0px;">
                    <div class="author">
                        By <b>HR Dept</b> |
                        <time datetime="2014-01-20"><?=$row['date_created'];?></time>
                    </div>
                    <div>"
                        <a href="<?=base_url();?>index.php/jobs/info/<?=$row['id'];?>" class="btn btn-danger btn-sm"> Job Information</a>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div>

 <div class='col-sm-12 col-md-12' style='margin-left:-14px;'>
  <div class="clearfix"></div>
  <ul class="pagination pull-right">
    <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
  </ul>

              </div>

          </div>
   </div>
  </div>


</div>
</div>


</body>
</html>
