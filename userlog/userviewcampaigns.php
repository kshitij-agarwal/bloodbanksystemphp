<html>

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

        <ul class="nav navbar-top-links navbar-right">


            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <!-- <li class="divider"></li> -->
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a href="userdashboard.php"><i class="fa fa-dashboard fa-fw"></i> User's Dashboard</a>
                    </li>
                    <li>
                        <a href="userviewblood.php"><i class="fa fa-heartbeat"></i> View Blood Collections </a>

                        <!-- /.nav-second-level -->
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
        <div class="container-fluid">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">Campaign Details</h1>
                </div>
            </div>

            <div class="row">
                <div class=".col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Records of available campaign
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php
										
										include "../pages/dbconnect.php";
										
										$qry = "select * from campaigndb";
										$servername = "localhost";
										$uname = "root";
										$pass = "";
										$db = "secyear";
										
										$conn = mysqli_connect($servername, $uname, $pass, $db);
										$result = mysqli_query($conn, $qry);
										
										
										echo "
                                            <thead>
                                                <tr>
                                                    <th>Campaign Name</th>
                                                    <th>Organizer Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Date of campaign</th>
                                                    <th>Description</th>
                                                </tr>
                                            </thead>";
										
										while ($row = mysqli_fetch_array($result))
                                        {
											echo "
                                                <tbody>
                                                    <tr>
                                                        <td>" . $row['cname'] . "</td>
                                                        <td>" . $row['oname'] . "</td>
                                                        <td>" . $row['phn'] . "</td>
                                                        <td>" . $row['cdate'] . "</td>
                                                        <td>" . $row['descp'] . "</td>
                                                    </tr>
                                                </tbody>
                                            ";
										}
									
									?>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
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