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

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/bloodbank se/icofont/icofont.min.css">

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
                        <a href="deleteview.php"><i class="fa fa-user-times"></i> Delete Donor Details</a>
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
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class=".col-lg-12">
                <h1 class="page-header">Admin Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">

                                <!-- in order to count total donor's record -->
								<?php include 'dashboardcount.php'; ?>

                                <!-- <div class="huge">26</div> -->
                                <div>Total Donors</div>
                            </div>
                        </div>
                    </div>

                    <a href="viewdonor.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="icofont-blood icofont-5x"></i>
                                <!-- <i class="fa fa-heartbeat fa-5x"></i> -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <!-- in order to count total donor's record -->
								<?php include 'dashbloodcount.php'; ?>

                                <div>Available Blood</div>
                            </div>
                        </div>
                    </div>
                    <a href="viewblood.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-bullhorn fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
								<?php include 'dashannouncecount.php'; ?>
                                <div class="huge"></div>
                                <div>Announcement</div>
                            </div>
                        </div>
                    </div>
                    <a href="viewannouncement.php">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="icofont-blood-drop icofont-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">Donate</div>
                                <div>Blood</div>
                            </div>
                        </div>
                    </div>
                    <a href="addblood.html">
                        <div class="panel-footer">
                            <span class="pull-left">Donate Blood Now!</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">

            <div class=".col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Donors In Past Few Years

                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div id="morris-area-chart"></div>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->

                <!-- /.panel -->

            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->

        <!-- /.col-lg-4 -->
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

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
    <p>&copy; <?php echo date("Y"); ?>: Developed By <a href="https://github.com/kshitij-agarwal/bloodbanksystemphp" style="color:white; text-decoration:none;" href="#"> Kshitij & Team</a></p>
</footer>

<style>
    footer {
        background-color: #424558;
        bottom: 0;
        left: 0;
        right: 0;
        height: 35px;
        text-align: center;
        color: #CCC;
    }

    footer p {
        padding: 10.5px;
        margin: 0px;
        line-height: 100%;
    }
</style>

<script>
    function myFunction() {
        alert("Notification Sent to all the active donors");
    }
</script>

</html>
