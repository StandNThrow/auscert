<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Cyber Security online training system for a business context." />
	<meta name="author" content="Tartiner Studios" />
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" />

	<title>AusCert | Dashboard</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/sb-admin.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/sb-admin-rtl.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/quiz.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/jquery-ui.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/email.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url('assets/css/course.css'); ?>" rel="stylesheet" />

	<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/ckeditor/ckeditor.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/quiz.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/dash.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/course.js'); ?>"></script>

</head>

<body>
	<?php date_default_timezone_set("Australia/Brisbane"); ?>
	<div id="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<img src="<?php echo base_url('assets/img/uq_logo.png'); ?>" class="uq-logo">
			</div>
			<ul class="nav navbar-right top-nav pull-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&emsp;<?php echo $username;?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#"><i class="fa fa-fw fa-user"></i>&emsp;Profile</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-envelope"></i>&emsp;Inbox</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-fw fa-gear"></i>&emsp;Settings</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="<?php echo site_url('home/logout') ?>"><i class="fa fa-fw fa-power-off"></i>&emsp;Log Out</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
		<div id="sidebar-wrapper">
			<ul class="nav navbar-nav side-nav">
				<li class="side-user hidden-xs">
					<div class="photo">
						<img src="<?php echo base_url('assets/img/uq_logo.png'); ?>" class="uq-logo" alt="UQ Logo">

						<!-- Original User Login Ver. -->
						<img class="img-circle" src="<?php echo base_url('assets/img/user-placeholder.jpg'); ?>" alt="User Placeholder Image" /> 
						<p class="welcome">Logged in as</p>
						<p class="name"><?php echo $username;?></p>
							<!-- <a href="#" class="name" data-toggle="dropdown"><?php echo $username;?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#"><i class="fa fa-fw fa-user"></i>&emsp;Profile</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-fw fa-envelope"></i>&emsp;Inbox</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-fw fa-gear"></i>&emsp;Settings</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo site_url('home/logout') ?>"><i class="fa fa-fw fa-power-off"></i>&emsp;Log Out</a>
								</li>
							</ul> -->
						</div>
					</li>

					<li class="<?php if ($menu=="home") { echo "active"; } ?>">
						<a class="side-nav-font" href="<?php echo site_url('home') ?>"><i class="fa fa-fw fa-home"></i>&emsp;Home</a>
					</li>
<!-- 					<li class="<?php if ($menu=="mygrade") { echo "active"; } ?>">
						<a class="side-nav-font" href="<?php echo site_url('home/mygrade') ?>"><i class="fa fa-fw fa-check-square"></i>&emsp;My Grade</a>
					</li> -->
					<li class="<?php if ($menu=="course") { echo "active"; } ?>">
						<a class="side-nav-font" href="<?php echo site_url('course') ?>"><i class="fa fa-fw fa-briefcase"></i>&emsp;Course </a>
					</li>
					<?php if ($usertype=="admin") { ?>
					<li class="<?php if ($menu=="admin") { echo "active"; } ?>">
						<a class="side-nav-font" href="<?php echo site_url('home/admin')?>"><i class="fa fa-fw fa-folder-open"></i>&emsp;Admin Page </a>	
					</li>
					<?php 
				} 
				?>
				<li>
					<a class="side-nav-font" href="<?php echo site_url('home/logout') ?>"><i class="fa fa-fw fa-power-off"></i>&emsp;Log Out</a>
				</li>
			</ul>
		</div>