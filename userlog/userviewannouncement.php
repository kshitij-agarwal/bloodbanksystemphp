<html>

<head>
<style>
#donor {
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 80%;
margin-top:100px;
margin-left:80px;
}

#donor td, #customers th {
border: 1px solid #ddd;
padding: 8px;
text-align:center;
}

#donor tr:nth-child(even){background-color: #f2f2f2;}

#donor tr:hover {background-color: #ddd;}

#donor th {
padding-top: 12px;
padding-bottom: 12px;
text-align: center;
background-color: #e7e7e7;
color: black;
}
</style>

<title>BDMS</title>

<!-- Bootstrap Core CSS -->
<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>


<body>
<div id="wrapper">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="userdashboard.php">BLOOD DONORS MANAGEMENT SYSTEM</a>
    </div>
    <!-- /.navbar-header -->

    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                            <a href="userdashboard.php"><i class="fa fa-dashboard fa-fw"></i> User's Dashboard</a>
                        </li>
                        <li>
                            <a href="userviewblood.php"><i class="fa fa-heartbeat"></i>  View Blood Collections </a>
                      
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="userviewdonor.php"><i class="fa fa-edit fa-eye"></i> View Donor Details</a>
                        </li>
                        
                        <li>
                            <a href="userviewannouncement.php"><i class="fa fa-bullhorn"></i> View Announcements </a>
                     
                        </li>

                        <li>
                            <a href="userviewcampaigns.php"><i class="fa fa-flag"></i> View Campaigns </a>
                           
                        </li>

            </ul>
        </div>
        </div>
            <!-- /.navbar-static-side -->
        </nav>


<div id="page-wrapper">
<div class="row">
<div class="col-lg-12">
                    <h1 class="page-header"><center>---ANNOUNCEMENTS---</center></h1>
                </div>
                
<?php

include "../pages/dbconnect.php";

$qry="select * from announce";
$result=mysqli_query($conn,$qry);


echo"<table border='1' id='donor'>
<tr>
    <th>Title</th>
    <th>Blood Needed</th>
    <th>Date&Time</th>
    <th>Organizer</th>
    <th>Requirements</th>
</tr>";

while($row=mysqli_fetch_array($result)){
  echo"<tr>
  <td>".$row['announcement']."</td>
  <td>".$row['bloodneed']."</td>
  <td>".$row['dat']."</td>
  <td>".$row['organizer']."</td>
  <td>".$row['requirements']."</td>

</tr>";
}

?>
</div>
</div>
</div>

  <!-- jQuery -->
  <script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>