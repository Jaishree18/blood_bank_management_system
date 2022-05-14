<?php
  include('../connection.php');
  session_start();

  if(!isset($_SESSION['membername']) AND $_SESSION['userid'] == ''){
    header('location:login.php');
  }
?>

<!doctype html>
<html lang="en">

<head>
  <title>Welcome To Admin Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
  <!-- MAIN CSS -->
  <link rel="stylesheet" href="../assets/css/main.css">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <!-- <link rel="stylesheet" href="assets/css/demo.css"> -->
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
  <!-- WRAPPER -->
  <div id="wrapper">
    <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
 <!-- NAVBAR -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="brand">
        <a href="index.html"><img src=""  class="img-responsive logo"></a>
      </div>
      <div class="container-fluid">

        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">




<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['username'];?></span><i class="icon-submenu lnr lnr-chevron-down"></i></a>

              <ul class="dropdown-menu">

                <li><a href="" data-toggle="modal" data-target="#logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
              </ul>
            </li>

          </ul>
</div>
</div>
</nav>
<div id="sidebar-nav" class="sidebar">
      <div class="sidebar-scroll">
        <nav>
          <ul class="nav">

 <li><a href="admin_dashboard.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
            <li><a href="state.php" class=""><i class="lnr lnr-code"></i> <span>State</span></a></li>
            <li><a href="city.php" class=""><i class="lnr lnr-chart-bars"></i> <span>City</span></a></li>
            <li><a href="members.php" class=""><i class="lnr lnr-cog"></i> <span>Members</span></a></li>
            <li><a href="donor.php" class=""><i class="lnr lnr-alarm"></i> <span>Non Active Donors</span></a></li>
            <li>

            <li><a href="active_donors.php" class=""><i class="lnr lnr-alarm"></i> <span>Active Donors</span></a></li>
 <li><a href="availability_of_blood.php" class="active"><i class="lnr lnr-heart"></i> <span>Availability of Blood</span></a></li>

          </ul>
        </nav>
      </div>
    </div>

    <!-- logout modal -->
     <div class="modal fade" id="logout" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p>Want to logout now ?</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <a href="../logout.php"> <button type="button" class="btn btn-danger">Logout</button></a>
        </div>
      </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script type="text/javascript">
        $(document).ready(function() {
    $('#request').DataTable();
} );
</script>
<div class="main">
                        <!-- MAIN CONTENT -->
                        <div class="main-content">
                                <div class="container-fluid">

  <h2>Hello,  <span style="color: blue"> <?php echo $_SESSION['membername']?></span> List of available Blood groups. </h2> <br />

  <table class="table table-bordered" id="request">
    <thead>
      <tr>
        <th>Blood Group</th>
        <th>Blood units</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $members = $connection->query("SELECT blood_group,sum(blood_units_reqd) as blood_units_reqd FROM donor GROUP BY blood_group");
      // var_dump($members->fetch_array());
      while($row = $members->fetch_array()) {
       ?>
        <tr>
        <td><?php echo $row['blood_group'];?></td>
        <td><?php echo $row['blood_units_reqd'];?></td>
        </tr>
<?php }
      ?>
 </tbody>
  </table>
</div>
        </div>
</div>
