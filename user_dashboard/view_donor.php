<?php
        include('user_header.php');
?>
<div class="main">
                        <!-- MAIN CONTENT -->
                        <div class="main-content">
                                <div class="container-fluid">
                                        <div class="panel panel-profile">
                                                <div class="clearfix">
                                                        <!-- LEFT COLUMN -->
                                                        <div class="profile-left">
                                                                <!-- PROFILE HEADER -->
                                                                <div class="profile-header">
                                                                        <div class="overlay"></div>
                                                                        <div class="profile-main">
                                                                        <?php
                                                                                $info = $connection->query("SELECT * FROM donor WHERE donor_id='".$_GET['donor_id']."'");
                                                                                $fetch = $info->fetch_array(); ?>

                                                                                <img src="../<?php echo $fetch['image']?>" class="img-circle" alt="Avatar" width="100px" height="100px">
                                                                                <h3 class="name"><?php echo $fetch['name'];?> </h3>
                                                                                <span class="online-status status-available">Available</span>
                                                                        </div>

                                                                        <div class="profile-stat">
                                                                                <div class="row">
                                                                                        <div class="col-md-4 stat-item">
                                                                                                45 <span>Projects</span>
                                                                                        </div>
                                                                                        <div class="col-md-4 stat-item">
                                                                                                15 <span>Awards</span>
                                                                                        </div>
                                                                                        <div class="col-md-4 stat-item">
                                                                                                2174 <span>Points</span>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- END PROFILE HEADER -->
                                                                <!-- PROFILE DETAIL -->
                                                                <div class="profile-detail">
                                                                        <div class="profile-info">
                                                                                <h4 class="heading">Basic Info</h4>
                                                                                <ul class="list-unstyled list-justify">
 <li>Birthdate <span><?php echo $fetch['dob']?></span></li>
                                                                                        <li>Mobile <span><?php echo $fetch['phone']?></span></li>
                                                                                        <li>Email <span><?php echo $fetch['email']?></span></li>
                                                                                        <li>Email <span><?php echo $fetch['gender']?></span></li>
                                                                                </ul>
                                                                        </div>

                                                                        <div class="profile-info">
                                                                                <h4 class="heading">About</h4>
                                                                                <p>Interactively fashion excellent information after distinctive outsourcing.</p>
                                                                        </div>

                                                                </div>
                                                                <!-- END PROFILE DETAIL -->
                                                        </div>
                                                        <!-- END LEFT COLUMN -->
                                                        <!-- RIGHT COLUMN -->
                                                        <div class="profile-right">

                                                                <h4 class="heading"><?php echo $fetch['name'];?>'s Awards</h4>
                                                                <!-- AWARDS -->
                                                                <div class="awards">
 <div class="row">
                                                                                <div class="col-md-3 col-sm-6">
                                                                                        <div class="award-item">
                                                                                                <div class="hexagon">
                                                                                                        <span class="lnr lnr-sun award-icon"></span>
                                                                                                </div>
                                                                                                <span>Most Bright Idea</span>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-sm-6">
                                                                                        <div class="award-item">
                                                                                                <div class="hexagon">
                                                                                                        <span class="lnr lnr-clock award-icon"></span>
                                                                                                </div>
                                                                                                <span>Most On-Time</span>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-sm-6">
                                                                                        <div class="award-item">
                                                                                                <div class="hexagon">
                                                                                                        <span class="lnr lnr-magic-wand award-icon"></span>
                                                                                                </div> <span>Problem Solver</span>
                                                                                        </div>
                                                                                </div>
                                                                                <div class="col-md-3 col-sm-6">
                                                                                        <div class="award-item">
                                                                                                <div class="hexagon">
                                                                                                        <span class="lnr lnr-heart award-icon"></span>
                                                                                                </div>
                                                                                                <span>Most Loved</span>
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="text-center"><a href="#" class="btn btn-default">See all awards</a></div>
                                                                </div>
                                                                <?php ?>
                                                                <!-- END AWARDS -->
                                                                <!-- TABBED CONTENT -->
                                                                <div class="custom-tabs-line tabs-line-bottom left-aligned">
                                                                        <ul class="nav" role="tablist">
                                                                                <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Activity</a></li>
 <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Projects <span class="badge">7</span></a></li>
                                                                        </ul>
                                                                </div>
                                                                <div class="tab-content">
                                                                        <div class="tab-pane fade in active" id="tab-bottom-left1">
                                                                                <ul class="list-unstyled activity-timeline">
                                                                                        <li>
                                                                                                <i class="fa fa-comment activity-icon"></i>
                                                                                                <p>Commented on post <a href="#">Prototyping</a> <span class="timestamp">2 minutes ago</span$
                                                                                        </li>
                                                                                        <li>
                                                                                                <i class="fa fa-cloud-upload activity-icon"></i>
                                                                                                <p>Uploaded new file <a href="#">Proposal.docx</a> to project <a href="#">New Year Campaign<$
                                                                                        </li>
                                                                                        <li>
                                                                                                <i class="fa fa-plus activity-icon"></i>
                                                                                                <p>Added <a href="#">Martin</a> and <a href="#">3 others colleagues</a> to project repositor$
                                                                                        </li>
                                                                                        <li>
                                                                                                <i class="fa fa-check activity-icon"></i>
                                                                                                <p>Finished 80% of all <a href="#">assigned tasks</a> <span class="timestamp">1 day ago</spa$
                                                                                        </li>
 </ul>
                                                                                <div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div>
                                                                        </div>
                                                                        <div class="tab-pane fade" id="tab-bottom-left2">
                                                                                <div class="table-responsive">
                                                                                        <table class="table project-table">
                                                                                                <thead>
                                                                                                        <tr>
                                                                                                                <th>Title</th>
                                                                                                                <th>Progress</th>
                                                                                                                <th>Leader</th>
                                                                                                                <th>Status</th>
                                                                                                        </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                        <tr>
                                                                                                                <td><a href="#">Spot Media</a></td>
                                                                                                                <td>
                                                                                                                        <div class="progress">
                                                                                                                                <div class="progress-bar" role="progressbar" aria-valuenow="$
                                                                                                                                        <span>60% Complete</span>
                                                                                                                                </div>

 </div>
                                                                                                                </td>
                                                                                                                <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> $
                                                                                                                <td><span class="label label-success">ACTIVE</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <td><a href="#">E-Commerce Site</a></td>
                                                                                                                <td>
                                                                                                                        <div class="progress">
                                                                                                                                <div class="progress-bar" role="progressbar" aria-valuenow="$
                                                                                                                                        <span>33% Complete</span>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </td>
                                                                                                                <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> $
                                                                                                                <td><span class="label label-warning">PENDING</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <td><a href="#">Project 123GO</a></td>
                                                                                                                <td>
                                                                                                                        <div class="progress">
                                                                                                                                <div class="progress-bar" role="progressbar" aria-valuenow="$

 <span>68% Complete</span>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </td>
                                                                                                                <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> $
                                                                                                                <td><span class="label label-success">ACTIVE</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <td><a href="#">Wordpress Theme</a></td>
                                                                                                                <td>
                                                                                                                        <div class="progress">
                                                                                                                                <div class="progress-bar" role="progressbar" aria-valuenow="$
                                                                                                                                        <span>75%</span>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </td>
                                                                                                                <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> $
                                                                                                                <td><span class="label label-success">ACTIVE</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <td><a href="#">Project 123GO</a></td>
                                                                                                                <td>
 <div class="progress">
                                                                                                                                <div class="progress-bar progress-bar-success" role="progres$
                                                                                                                                        <span>100%</span>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </td>
                                                                                                                <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle" /$
                                                                                                                <td><span class="label label-default">CLOSED</span></td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <td><a href="#">Redesign Landing Page</a></td>
                                                                                                                <td>
                                                                                                                        <div class="progress">
                                                                                                                                <div class="progress-bar progress-bar-success" role="progres$
                                                                                                                                        <span>100%</span>
                                                                                                                                </div>
                                                                                                                        </div>
                                                                                                                </td>
                                                                                                                <td><img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle" /$
                                                                                                                <td><span class="label label-default">CLOSED</span></td>
                                                                                                        </tr>
                                                                                                </tbody>
                    </table>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- END TABBED CONTENT -->
                                                        </div>
                                                        <!-- END RIGHT COLUMN -->
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- END MAIN CONTENT -->
                </div>
                <!-- END MAIN -->

<?php
        include('user_footer.php');
?>

