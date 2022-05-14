<?php
        include('user_header.php');
?>

                <div class="main">
                        <!-- MAIN CONTENT -->
                        <div class="main-content">
                                <div class="container-fluid">
                                        <!-- OVERVIEW -->
                                        <div class="panel panel-headline">
                                                <div class="panel-heading">
                                                        <h3 class="panel-title">Weekly Overview</h3>
                                                        <!-- <p class="panel-subtitle">Period: Oct 14, 2016 - Oct 21, 2016</p> -->
                                                </div>
                                                <div class="panel-body">
                                                        <div class="row">
                                                                <div class="col-md-3">
                                                                        <div class="metric">
                                                                                <span class="icon"><i class="fa fa-download"></i></span>
                                                                                <p>
                                                                                        <span class="number"><?php

$mn=$connection->query("
          SELECT count(donor_id) AS donor_id FROM donor");  $new=$mn->fetch_array(); echo $new['donor_id'];  ?>  </span>
                                                                                        <span class="title">Donors</span>
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <div class="metric">
                                                                                <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                                                                <p>
                                                                                        <span class="number">

<?php

$mnr=$connection->query("
          SELECT count(requester_id) AS requester_id FROM requester");  $newr=$mnr->fetch_array(); echo $newr['requester_id'];  ?>
</span>
                                                                                        <span class="title">Requester</span>
                                                                                </p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-md-3">
  <div class="metric">
                                                                                <span class="icon"><i class="fa fa-eye"></i></span>
                                                                                <p>
                                                                                        <span class="number">

<?php

$mnm=$connection->query("
          SELECT count(member_id) AS member_id FROM member");  $newm=$mnm->fetch_array(); echo $newm['member_id'];  ?>
</span>
                                                                                        <span class="title">Members</span>
                                                                                </p>
                                                                        </div>
                                                                </div>

                                                                <!-- <div class="col-md-3">
                                                                        <div class="metric">
                                                                                <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                                                                <p>
                                                                                        <span class="number">35%</span>
                                                                                        <span class="title">Conversions</span>
                                                                                </p>

 </div>
                                                                </div> -->
                                                        </div>
<div>
<p>
<h3>Admin Contact Number- 8711625666</h3></p>
</div>

                                                </div>
                                        </div>
                                        <!-- END OVERVIEW -->



                                </div>
                        </div>
                        <!-- END MAIN CONTENT -->
                </div>
                <!-- END MAIN -->
                <div class="clearfix"></div>
        </div>

<?php
        include('user_footer.php');
?>













