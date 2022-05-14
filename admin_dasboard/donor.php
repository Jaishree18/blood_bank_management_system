<?php
  include('../connection.php');
  session_start();

  if(!isset($_SESSION['username']) AND $_SESSION['member_id'] == ''){
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
        <a href="index.html"></a>
      </div>
      <div class="container-fluid">


        <div id="navbar-menu">
          <ul class="nav navbar-nav navbar-right">


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/img/user.png" class="img-circle" alt="Avatar"> <span><?php echo $_SESSION['username'];?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>

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
            <li><a href="donor.php" class="active"><i class="lnr lnr-alarm"></i> <span>Non Active Donors</span></a></li>
            <li>

            <li><a href="active_donors.php" class=""><i class="lnr lnr-alarm"></i> <span>Active Donors</span></a></li>
<li><a href="availability_of_blood.php" class=""><i class="lnr lnr-heart"></i> <span>Availability of Blood</span></a></li>

          </ul>
        </nav>
      </div>
    </div>

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
    $('#donors').DataTable();
} );
</script>
<div class="main">
                        <!-- MAIN CONTENT -->
                        <div class="main-content">
                                <div class="container-fluid">

  <h2>Hello,  <span style="color: blue"> <?php echo $_SESSION['username']?></span> Manage Donors Here. </h2> <br />
  <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adddonor">Add new</button></p> <br />
  <table class="table table-bordered" id="donors">
    <thead>
      <tr>
        <th>Name</th>

        <th>Gender</th>
        <th>Phone</th>
        <th>By </th>
<th>Blood Group</th>
<th>Units</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $members= $connection->query("SELECT * FROM donor");
      while($row = $members->fetch_array()) {
       ?>
 <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['username_fk'];?></td>


<td><?php echo $row['blood_group'];?></td>
        <td><?php echo $row['blood_units_reqd'];?></td>




                        <td><button type="button" data-toggle="modal" data-target="#deletdonor<?php echo $row['donor_id']?>" class="btn btn-danger">Delete</button>
                <!-- <button type="button" data-toggle="modal" data-target="#editdonor<?php echo $row['donor_id'];?>" class="btn btn-warning">Edit</button> -->


          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#active<?php echo $row['donor_id']?>" <?php if($row['status'] == '1') { echo 'disabled'; }?>><?php
          if($row['status'] == '1') { echo 'Activated'; } else {  echo 'Active'; }
           ?></button></td>

        </tr>
         <!-- delete city modal -->
        <div class="modal fade" id="deletdonor<?php echo $row['donor_id']?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p>Want to delete ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <a href="delete_donor.php?donor_id=<?php echo $row['donor_id'];?>"> <button type="button" class="btn btn-danger">Delete</button></a>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="active<?php echo $row['donor_id']?>" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Are you sure ?</h4>
        </div>
        <div class="modal-body">
          <p>Want to activated this record? ?</p>
          <form action="edit_status.php?status_id=<?php echo $row['donor_id']?>" method="post">
            <input type="hidden" name="status" value="1"></input>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-success">Activate</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<?php }
      ?>
    </tbody>
  </table>
</div>
        </div>
</div>

<!-- add state modal -->
<div class="modal fade" id="adddonor" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Donor Details</h4>
        </div>
        <div class="modal-body">
        <form action="add_donor.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"></input>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="fathername" id="fathername" placeholder="Enter father name"></input>
          </div>

          <div class="form-group">
            <select class="form-control" name="gender" id="gender" >
              <option value="male">Male</option>
              <option value="female">Female</option>
               <option value="other">Other</option>
            </select>
</div>
 <div class="form-group">
            <input type="text" class="form-control" name="datepicker" id="datepicker" placeholder="Enter dob"></input>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="weight" id="weight" placeholder="Enter weight"></input>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"></input>
          </div>
          <div class="form-group">
            <select class="form-control" name="blood" id="blood" >
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="O+">O+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="B-">B-</option>
            <option value="O-">O-</option>
            <option value="AB-">AB-</option>



            </select>
          </div>

 <div class="form-group">
            <input type="text" class="form-control" name="blood_unit" id="blood_unit" placeholder="Enter units of blood"></input>
          </div>





           <div class="form-group">
            <select class="form-control" name="state" id="state" >
            <?php
            $state = $connection->query("SELECT * FROM state");
 while($row = $state->fetch_array()){ ?>
             <option value="<?php echo $row['state_name'];?>"><?php echo $row['state_name'];?></option>

            <?php }
            ?>

            </select>
          </div>

          <div class="form-group">
            <select class="form-control" name="city" id="city" >
            <?php
            $state = $connection->query("SELECT * FROM city");
            while($row = $state->fetch_array()){ ?>
             <option value="<?php echo $row['city_name'];?>"><?php echo $row['city_name'];?></option>

            <?php }
            ?>

            </select>
</div>
 <div class="form-group">
            <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter pincode"></input>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone"></input>
          </div>
          <div class="form-group">
            <textarea type="text" class="form-control" name="address" id="address" placeholder="Enter Address"></textarea>
          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="addmember">Add</button>
        </div>
        </form>
      </div>

    </div>
  </div>
<?php
        include('../footer.php');
?>

