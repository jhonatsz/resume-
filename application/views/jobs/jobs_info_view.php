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
<div class='col-md-9'>
<!-- Job Info -->

<?php foreach($job_info as $row ): ?>
<div class='col-md-12'>
  <div class="container">
      <div class="row">
        <div class="col-md-10" >

          <div class="panel panel-info">
            <div class="panel-heading" style='background-color:#8C0001;'>
              <h3 class="panel-title" style='color:white;font-weight:bold;'><b>Job Title: </b><?=$row['name']?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="Job Pic" src="<?=base_url()?>assets/img/seal-logo.png" class="img-square img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td><b>Description</b></td>
                        <td><?=$row['description'];?></td>
                      </tr>
					  <tr>
                        <td><b>Status</b></td>
                        <td><?=ucfirst($row['status']);?></td>
                      </tr>
                    </tbody>
                  </table>

				  <a href="#" class="btn btn-primary" style='margin-left:364px;float:right;margin-bottom:10px;'>Total Applicants : <?=count($applicants);?></a>
				 </br>
				 <?php if($type == 'applicant') { ?>

         <?php if(count($applicants) == $row['units']) {?>
          <a href="#" class="btn btn-danger" style='margin-left:364px;float:right;margin-bottom:10px;'>Max Applicant Applied</a>
         <?php } ?>

         <!-- ZERO -->
         <?php if($check_if_exist == 1 && count($applicants) < $row['units']) {?>
				   <a href="#" class="btn btn-success" style='margin-left:364px;float:right;margin-bottom:10px;'>Already Applied</a>
         <?php } ?>

         <!-- ONE -->
         <?php if($check_if_exist == 0 && count($applicants) < $row['units'] ) {?>
        <form method='post' action="<?=base_url();?>index.php/jobs/apply_job/<?=$jobId;?>/<?=$appId;?>">
         <button onclick="return confirm('Are you sure you want to apply?');" class="btn btn-default" type="submit" style='margin-left:364px;float:right' name="action"><span class="glyphicon glyphicon-plus"></span> Apply Job</button>
         <!--<a href="#" class="btn btn-primary" style='margin-left:364px;float:right'>Appy Job</a>-->
        </form>
         <?php } ?>
				 <?php } ?>
				  <?php if($type == 'hr') {?>
                  <a href="<?=base_url();?>index.php/jobs/info/<?=$jobId;?>/edit" class="btn btn-danger" style='margin-left:364px;float:right'>Edit Job</a>
				  <?php } ?>
                  <!-- <a href="#" class="btn btn-primary">Team Sales Performance</a> -->
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                      <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-default">
                      Qualifications
                      </a>

                      <div class='row'>
                          <ul>
						    <?php
							$qualifications = explode(',',$row['qualifications']);
							for($i=0;$i<count($qualifications);$i++){
							?>
                            <li><?=$qualifications[$i];?></li>
							<?php } ?>
                          </ul>
                      </div>
                  </div>

                  <div class="panel-footer">
                       <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-default">
                       Skills
                       </a>

                       <div class='row'>
                           <ul>
							<?php
								$skills = explode(',',$row['skills']);
								for($i=0;$i<count($skills);$i++){
								?>
								<li><?=$skills[$i];?></li>
							<?php } ?>
                           </ul>
                       </div>

                   </div>
          </div>
        </div>
      </div>
    </div>
</div>
<?php endforeach; ?>
<!-- END -->

<?php if($type == 'hr') { ?>
<!-- END OF NAV -->
    <div class='col-md-12'>
      <div class="col-md-10 col-md-offset-2" style='margin-bottom:20px;margin-left:0px;'>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." id="searchTerm" name="searchTerm" value='' required>
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit" name="action"><span class="glyphicon glyphicon-search"></span> Search</button>
                </span>
            </div><!-- /input-group -->
      </div>


      <!--  -->
      <!-- <div class="col-md-2 col-md-offset-2" style='margin-bottom:20px;margin-left:0px;'>
            <div class="input-group">
                <form method='post' action="<?=base_url();?>index.php/jobs/apply_job/<?=$jobId;?>/<?=$appId;?>">
                 <button class="btn btn-default" type="submit" name="action"><span class="glyphicon glyphicon-plus"></span>Apply Job</button>
                </form>
                </span>
            </div>
      </div> -->
      <!-- </div> -->

          <div class="col-md-12">
          <h4>Applicant List</h4>
          <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                     <thead>

                     <th><input type="checkbox" id="checkall" /></th>
                     <th>Rankings</th>
                     <th>First Name</th>
                      <th>Last Name</th>
                       <th>Email</th>
                       <th>Contact</th>
                       <?php if($type == 'hr') {?>
                         <th colspan=3>Action</th>
                       <?php } ?>
                     </thead>
      <tbody>

      <?php foreach($applicants as $row) : //print_r($applicants)?>
	
      <tr>
      <td><input type="checkbox" class="checkthis" /></td>
      <td>
      <?php
        $jT = count(explode(',',$row['JQ'])) + count(explode(',',$row['JS']));
        $qualification = explode(',',$row['UQ']);
		array_push($qualification,$row['gender']);
		//print_r($qualification);
        $skills = explode(',',$row['US']);
        $aT = 0;

        foreach($qualification as $uq){
            $i=0;
			if(!empty($uq)) {
				$result = $this->Job_model->match_maker($jobId,'Q',$uq)->result_array();
				$i++;

				if(count($result) > 0){
				  $aT++;
				}
			}
        }

        foreach($skills as $us){
          $i=0;
		  if(!empty($us)) {
			  $result = $this->Job_model->match_maker($jobId,'S',$us)->result_array();
			  $i++;
			  //echo (count($result));
			  if(count($result) > 0){
				$aT++;
			  }
		  }

        }

        $percentage_rank = $aT / $jT * 100 .' %';

        if($percentage_rank >= 70){
          echo "<b><span style='color:green;'>";
        }
        if($percentage_rank >= 40 && $percentage_rank <= 69){
          echo "<b><span style='color:#d35400;'>";
        }
        if($percentage_rank <= 39){
          echo "<b><span style='color:red;'>";
        }

        echo round($percentage_rank,1).'%';
        echo '</span></b>';

       ?>
      </td>
      <td><?=$row['fullname'];?></td>
      <td><?=$row['lastname'];?></td>
      <!-- <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td> -->
      <td><?=$row['email'];?></td>
      <td><?=$row['contact_no'];?></td>

      <?php if($type == 'hr') {?>
      <td>
        <p data-placement="top" data-toggle="tooltip" title="View PDF"><a onclick="return confirm('Are you sure you want to view resume?');" target='_tab' href='<?=base_url();?>index.php/jobs/view/<?=$jobId;?>/<?=$row['id'];?>'> <button class="btn btn-primary btn-xs" data-title="Download PDF" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-eye-open"></span></button></a></p>
      </td>
	  <td><p data-placement="top" data-toggle="tooltip" title="Approve"><a onclick="return confirm('Are you sure you want to approve this applicant?');" href='<?=base_url();?>index.php/jobs/notification/<?=$jobId;?>/<?=$row['id'];?>'> <button class="btn btn-primary btn-xs" data-title="Approve" data-toggle="modal" data-target="#delete" ><span class=" glyphicon glyphicon-ok"></span></button></a></p></td>

      <td><p data-placement="top" data-toggle="tooltip" title="Download PDF"><a onclick="return confirm('Are you sure you want to download resume?');"href='<?=base_url();?>index.php/jobs/download/<?=$jobId;?>/<?=$row['id'];?>'> <button class="btn btn-primary btn-xs" data-title="View PDF" data-toggle="modal" data-target="#delete" ><span class=" glyphicon glyphicon-download-alt"></span></button></a></p></td>

      <?php } ?>
      </tr>
      <?php endforeach; ?>
      </tbody>

  </table>
    </div>


 <!-- <div class='col-sm-12 col-md-12' style='margin-left:-14px;'>
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
  </div> -->


</div>
</div>
  <?php } ?>
</div>
</body>
</html>
