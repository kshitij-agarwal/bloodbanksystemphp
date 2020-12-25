<!DOCTYPE html>
<html lang="en">

<head>

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
            <a class="navbar-brand" href="index.html">BBMS</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">


            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <!-- <li class="divider"></li> -->
                    <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>

            <!-- /.dropdown -->
        </ul>

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
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-heartbeat"></i> Blood Collection Details <span
                                    class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addblood.html">Add Blood</a>
                            </li>
                            <li>
                                <a href="viewblood.php">View Blood</a>
                            </li>
                            <li>
                                <a href="editblood.php">Edit Blood</a>
                            </li>
                            <li>
                                <a href="deleteblood.php">Remove Blood</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="adddonor.php"><i class="fa fa-table fa-user-plus"></i> Add Donor</a>
                    </li>
                    <li>
                        <a href="viewdonor.php"><i class="fa fa-edit fa-eye"></i> View Donor Details</a>
                    </li>
                    <li>
                        <a href="editview.php"><i class="fa fa-edit fa-fw"></i> Edit Donor Details</a>
                    </li>
                    <li>
                        <a href="deleteview.php"><i class="fa fa-user-times"></i> Remove Donor Details</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-bullhorn"></i> Announcements <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="makeannouncement.html">Make Announcement</a>
                            </li>
                            <li>
                                <a href="viewannouncement.php">View Announcement</a>
                            </li>
                            <li>
                                <a href="editannounceform.php">Edit Announcement</a>
                            </li>
                            <li>
                                <a href="deleteannouncement.php">Remove Announcement</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href=""><i class="fa fa-flag"></i> Campaigns <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="newcampaign.html">New Campaign</a>
                            </li>
                            <li>
                                <a href="viewcampaign.php">View Campaign</a>
                            </li>
                            <li>
                                <a href="updatecampaign.php">Update Campaign</a>
                            </li>
                            <li>
                                <a href="deletedcampaign.php">Delete Campaign</a>
                            </li>
                        </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">BBMS</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        MESSAGE BOX
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form role="form" action="index.html" method="post">
									
									<?php
										include 'dbconnect.php';
										$name = $_POST["name"];
										$gender = $_POST["gender"];
										$dob = $_POST["dob"];
										$weight = $_POST["weight"];
										$bloodgroup = $_POST["bloodgroup"];
										$address = $_POST["address"];
										$contact = $_POST["contact"];
										$bloodqty = $_POST["bloodqty"];
										$collection = $_POST["collection"];
										$id = $_POST['id'];
										//update query
										$qry = "update blood set name='$name', gender='$gender', dob='$dob', weight='$weight', bloodgroup='$bloodgroup', address='$address', contact='$contact', bloodqty='$bloodqty', collection='$collection' where id='$id'";
										$servername = "localhost";
										$uname = "root";
										$pass = "";
										$db = "secyear";
										
										$conn = mysqli_connect($servername, $uname, $pass, $db);
										$result = mysqli_query($conn, $qry); //query executes
										if (!$result) {
											echo "ERROR" . mysqli_error();
										} else {
											echo "SUCCESSFULLY UPDATED";
											// header ("Location:editblood.php");
										}
									?>

                                </form>
                            </div>

                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

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
