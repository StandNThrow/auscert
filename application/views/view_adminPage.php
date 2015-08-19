<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Admin Page</h1>
			</div>
		</div>
		<div class="row">
			<a href="<?php echo site_url('addCourse') ?>" class="btn btn-lg btn-primary pull-right">Create new course</a>
			<div class="ibox-content">
				<span class="text-muted small pull-right" data-toggle="tooltip" title="No idea what is this for.">Last modification: <i class="fa fa-clock-o"></i>&emsp;2:10 pm - 12.06.2014</span>
				<h2>Report</h2>

				<div class="input-group">
					<input type="text" placeholder="Search client" class="input form-control">
					<span class="input-group-btn">
						<button type="button" class="btn btn btn-primary">
							<i class="fa fa-search"></i>&emsp;Search</button>
						</span>
					</div>
					<div class="clients-list">
						<p class="pull-right small text-muted" data-toggle="tooltip" title="I have no idea what is this for.">1406 Elements</p>
						<ul class="nav nav-tabs">
							<li class="active">
								<a data-toggle="tab" href="#tab-members"><i class="fa fa-user"></i>&emsp;Members</a>
							</li>
							<li>
								<a data-toggle="tab" href="#tab-courses"><i class="fa fa-briefcase"></i>&emsp;Courses</a>
							</li>
						</ul>
						<div class="tab-content">
							<div id="tab-members" class="tab-pane active">
								<div class="table-responsive">
									<table class="table table-striped table-hover">
										<tbody>
											<?php foreach ($users as $user) { ?>
											<tr>
												<td class="client-avatar">
													<img alt="image" src="<?php echo base_url('assets/img/user-placeholder.jpg'); ?>">&emsp;<a data-toggle="tab" href="#<?php echo $user->username; ?>" class="client-link"><?php echo $user->username; ?></a>
												</td>
												<td>
													<span data-toggle="tooltip" title="Any suggestion what would you prefer for this? Right now I am using 'userType' from the database."><?php echo $user->userType; ?></span>
												</td>
												<td>
													<i class="fa fa-envelope"></i>&emsp;<a href="mailto:<?php echo $user->email; ?>"><?php echo $user->email; ?></a>
												</td>
												<td>
													<i class="fa fa-phone"></i>&emsp;<a href="tel:<?php echo $user->contact; ?>"><?php echo $user->contact; ?></a>
												</td>
												<td class="client-status">
													<span class="label label-success" data-toggle="tooltip" title="I have no idea what is this.">Complete All Task</span>
												</td>
											</tr>

														<!-- <tr>
														<td class="client-avatar"><img alt="image" src="<?php echo base_url('assets/img/user-placeholder.jpg'); ?>"> </td>
														<td><a data-toggle="tab" href="#contact-3" class="client-link">DECO2</a></td>
														<td>Staff</td>
														<td class="contact-type"><i class="fa fa-phone"> </i></td>
														<td> +432 955 908</td>
														<td class="client-status"><span class="label label-primary">Complete 1 Task</span></td>
														</tr>

														<tr>
														<td class="client-avatar"><img alt="image" src="<?php echo base_url('assets/img/user-placeholder.jpg'); ?>"></a> </td>
														<td><a data-toggle="tab" href="#contact-4" class="client-link">DECO3</a></td>
														<td>Member</td>
														<td class="contact-type"><i class="fa fa-phone"> </i></td>
														<td> +422 600 213</td>
														<td class="client-status"><span class="label label-warning">Not Complete</span></td>
													</tr> -->
													<?php 
												}
												?>
											</tbody>
										</table>
									</div>
								</div>

								<div id="tab-courses" class="tab-pane">
									<div class="table-responsive">
										<table class="table table-striped table-hover">
											<tbody>
												<?php foreach ($courses as $course) {?>
												<tr>
													<td><a href="<?php echo site_url('learning?lid='.$course->courseID) ?>" class="client-link"><?php echo $course->courseName; ?></a></td>
													<!-- <td>Last edit: <?php echo date("d/m/Y"); ?></td> -->
													<td>Last edit: <?php echo empty($course->last_edited) ? "None" : $course->last_edited; ?></td>

													<td class="project-actions">
														<a href="<?php echo site_url('edits') ?>" class="btn btn-sm btn-success"><i class="fa fa-pencil"></i>&emsp;Edit</a>
														<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>&emsp;Remove</a>
													</td>
												</tr>
												<?php 
											} 
											?>
											<!-- <tr>
												<td><a data-toggle="tab" href="#company-2" class="client-link">Choosing Password</a></td>
												<td>Added :15/06/2015</td>

												<td class="project-actions">
													<a href="<?php echo site_url('edits') ?>" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
													<a href="#" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Remove </a>
												</td>
											</tr> -->
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script>
$("#menu-toggle").click(function(e) {
	e.preventDefault();
	$("#wrapper").toggleClass("toggled");
});

$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</body>
</html>