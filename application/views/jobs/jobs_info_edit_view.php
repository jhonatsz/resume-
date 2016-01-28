<!doctype HTML>
<html>
<head>
  <title>Resume+ | Jobs</title>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/bootstrap.min.css'>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/nav.css'>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/jobs.css'>
  <script type='javascript' src='<?=base_url();?>assets/js/bootstrap.min.js'></script>
  <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
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
                  <a href="<?=base_url();?>index.php/jobs"><i class="fa fa-gift fa-lg"></i> Jobs</a>
                </li>

                <li>
                  <a href="<?=base_url();?>index.php/profile"><i class="fa fa-globe fa-lg"></i>Profile</a>
                </li>
                <li>
                  <a href="<?=base_url();?>index.php/auth/logout">
                  <i class="fa fa-users fa-lg"></i> Signout
                  </a>
                </li>
            </ul>
     </div>
</div>
</div>
</div>

<?php foreach($job_info as $row ): ?>
<div class="container">
	<div class="row">
      <div class="col-md-9 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="<?=base_url();?>index.php/jobs/update/<?=$jobId;?>" method="post">
          <fieldset>
            <legend class="text-center">Jobs Information | Edit</legend>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Job Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" value='<?=$row['name'];?>' class="form-control">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Job Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="description" placeholder="Please enter your message here..." rows="5"><?=$row['description'];?></textarea>
              </div>
            </div>
			
            <!-- Q body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Qualifications</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="qualifications" placeholder="Please enter your message here..." rows="5"><?=$row['qualifications'];?></textarea>
              </div>
            </div>
			
			            <!-- Q body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Skills</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="skills" placeholder="Please enter your message here..." rows="5"><?=$row['skills'];?></textarea>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
			    <button type="submit" class="btn btn-primary btn-lg" style='float:right;'>Submit</button>
                <a href="<?=base_url();?>index.php/jobs/delete/<?=$jobId;?>" class="btn btn-danger  btn-lg" style='margin-right:10px;margin-left:364px;float:right;margin-bottom:10px;'>Delete</a>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>
<?php endforeach; ?>
</body>
</html>
