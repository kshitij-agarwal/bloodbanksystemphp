<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
            <a class="navbar-brand" href="index.php">BLOOD DONORS MANAGEMENT SYSTEM</a>
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
                        <a href="userviewblood.php"><i class="fa fa-heartbeat"></i> View Blood Collections </a>

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
                                <form role="form" action="index.php" method="post">
									<?php
										
										if (isset($_POST['name'])) {
											$name = $_POST["name"];
											$gender = $_POST["gender"];
											$dob = $_POST["dob"];
											$weight = $_POST["weight"];
											$bloodgroup = $_POST["bloodgroup"];
											$address = $_POST["address"];
											$contact = $_POST["contact"];
											$bloodqty = $_POST["bloodqty"];
											$collection = $_POST["collection"];
											
											include '../pages/dbconnect.php';
//code after connection is successfull
											$qry = "insert into blood(name,gender,dob,weight,bloodgroup,address,contact,bloodqty,collection) values ('$name','$gender','$dob','$weight','$bloodgroup','$address','$contact','$bloodqty','$collection')";
											$servername = "localhost";
											$uname = "root";
											$pass = "";
											$db = "secyear";
											
											$conn = mysqli_connect($servername, $uname, $pass, $db);
											$result = mysqli_query($conn, $qry); //query executes
											
											if (!$result) {
												echo "ERROR";
											} else {
												echo " <div style='text-align: center'><h1>BLOOD DONATED</h1>";
												echo " <a href='userdashboard.php' div style='text-align: center'><h3>Go Back</h3>";
												
											}
											
										} else {
											echo "<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='userdashboard.php'> DASHBOARD </a></h3>";
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
