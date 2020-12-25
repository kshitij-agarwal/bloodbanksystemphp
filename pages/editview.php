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
                        <a href="adddonor.html"><i class="fa fa-table fa-user-plus"></i> Add Donor</a>
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
                    <h1 class="page-header">Edit Donors Detail</h1>
                </div>
            </div>

            <div class="row">
                <div class=".col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Records of available donors
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
									
									<?php
										
										include "dbconnect.php";
										
										$qry = "select * from donor";
										$servername = "localhost";
										$uname = "root";
										$pass = "";
										$db = "secyear";
										
										$conn = mysqli_connect($servername, $uname, $pass, $db);
										$result = mysqli_query($conn, $qry);
										
										
										echo "
						<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>
							<th>Guardian's Name</th>
							<th>Gender</th>
							<th>D.O.B</th>
							<th>Weight</th>
							<th>Blood Group</th>
							<th>Email</th>
							<th>Address</th>
							<th>Contact</th>
							<th><i class='fa fa-pencil'></i></th>
						</tr>
						</thead>";
										
										while ($row = mysqli_fetch_array($result)) {
											echo "<tbody>
						  <tr>
						  <td>" . $row['name'] . "</td>
						  <td>" . $row['username'] . "</td>
						  <td>" . $row['guardiansname'] . "</td>
						  <td>" . $row['gender'] . "</td>
						  <td>" . $row['dob'] . "</td>
						  <td>" . $row['weight'] . "</td>
						  <td>" . $row['bloodgroup'] . "</td>
						  <td>" . $row['email'] . "</td>
						  <td>" . $row['address'] . "</td>
						  <td>" . $row['contact'] . "</td>
						  <td><a href='editform.php?id=" . $row['id'] . "'><i class='fa fa-edit' style='color:green'></i></a></td>

						</tr>
						</tbody>";
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