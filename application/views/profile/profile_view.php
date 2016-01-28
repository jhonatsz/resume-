<!doctype HTML>
<html>
<head>
  <title>Resume+ | Profile</title>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/bootstrap.min.css'>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/nav.css'>
  <link rel='stylesheet' type='text/css' href='<?=base_url();?>assets/css/profile.css'>
  <script type='javascript' src='<?=base_url();?>assets/js/bootstrap.min.js'></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

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

                <li>
                  <a href="<?=base_url();?>index.php/jobs"><i class="fa fa-gift fa-lg"></i> Jobs</a>
                </li>

                <li class='active'>
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Profile</a>
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
</div>

<div class='col-md-9'>
  <div class="container">
      <div class="row"><br/><br/>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >

          <?php foreach($user_info as $row ): ?>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?=$row['fullname']; ?> <?=$row['lastname']; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Date of Birth</td>
                        <td><?=$row['birthday']?></td>
                      </tr>

                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td><?=$row['gender']?></td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td><?=$row['address']?></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com"><?=$row['email']?></a></td>
                      </tr>
                        <td>Contact Number</td>
                        <td><?=$row['contact_no']?>
                        </td>

                      </tr>

                    </tbody>
                  </table>

                  <a href="<?=base_url()?>index.php/profile/edit/<?=$user_id;?>" class="btn btn-danger" style='margin-left:364px;'>Edit Profile</a>
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
                              $qualifications = explode(',',$row['qualification']);
                              foreach($qualifications as $q):
                              $i=0;
                            ?>
                            <li><?=$q?></li>

                          <?php $i++; endforeach; ?>
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
                               foreach($skills as $s):
                               $i=0;
                             ?>
                             <li><?=$s; ?></li>

                           <?php $i++; endforeach; ?>
                           </ul>
                       </div>

                   </div>

                   <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-default">
                        Achievements
                        </a>
                        <!-- -->
                        <div class='row'>
                            <ul>
                              <?php
                                $achievements = explode(',',$row['achievements']);
                                foreach($achievements as $a):
                                $i=0;
                              ?>
                              <li><?=$a?></li>

                            <?php $i++; endforeach; ?>
                            </ul>
                        </div>
                    </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </div>
</div>
</body>
</html>
