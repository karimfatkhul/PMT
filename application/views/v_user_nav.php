<?php $this->load->view('asset'); ?>
<body>
	<div id="main">
		<nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
			<div class="container p-0">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active cl-effect-1 ">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item cl-effect-1">
						<a class="nav-link" href="#">Solusi247</a>
						<li class="nav-item cl-effect-1">
							<a class="nav-link" href="#">Mail</a>
						</li>
					</ul>
					<span class="navbar-text">
						<a class="nav-link text-dark" href="<?php echo base_url('index.php/logout');?>">log out</a>
					</span>
				</div>
		</nav>
		<div class="container" style="margin-top:20px; min-height:900px;">
			<div class="row">
				<div class="col-md-3 ">
					<ul class="box-user pl-0">
						<p class="lead pt-3" style="font-size:1rem">Hello <?php echo $this->session->userdata('nama_user'); ?></p>
					</ul>
				</div>
				<div class="col-md-9 user">
					<ul class=" user nav justify-content-begin ">
						<li class="nav-item p-2">
							<a class="nav-link active" style="color:rgba(0,0,0,.9);" href="#">Recent Activities</a>
						</li>
						<li class="nav-item p-2">
							<a class="nav-link" style="color:rgba(0,0,0,.5);" href="#">Project</a>
						</li>
						<li class="nav-item p-2">
							<a class="nav-link" style="color:rgba(0,0,0,.5);" href="#">Near Deadline</a>
						</li>
						<li class="nav-item p-2">
							<a class="nav-link" style="color:rgba(0,0,0,.5);" href="#">Report</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="box" style="height:900px;">
						<div class="box-header pb-0">
							<p class="lead" style="font-size:1rem">Project Summary</p>
						</div>
						<div class="box-body">
							<table class="table table-condensed">
								<tr>
									<td>1.</td>
									<td>Project Handled</td>
									<td><span class="badge badge-primary">150</span></td>
								</tr>
								<tr>
									<td>2.</td>
									<td>Near Deadline</td>
									<td><span class="badge badge-info">70</span></td>
								</tr>
								<tr>
									<td>3.</td>
									<td>On Progress</td>
									<td><span class="badge badge-success">30</span></td>
								</tr>
								<tr>
									<td>4.</td>
									<td>Done</td>
									<td><span class="badge badge-danger">90</span></td>
								</tr>
							</table>
						</div>
					</div>

				</div>
				<div class="col-md-9">
					<div class="box" style="height:900px;">
						<div class="box-header">
							<p class="box-title">
							</p>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-6  my-4">
									<div class="box" style="box-shadow: 2px 1px 8px 1px rgba(0, 0, 0, 0.1);">
										<div class="box-header">
											<p class="box-title"> Project Title
											</p>
											<span>
												<ul class="list-unstyled d-inline-flex float-right">
													<li style="margin:0px 5px; "><span class="badge badge-primary">End Date</span></li>
												</ul>
											</span>
										</div>
										<div class="box-body pt-0">
											<p class="lead" style="font-size:1rem">Project Description<p>
										</div>
									</div>
								</div>
								<div class="col-md-6  my-4">
									<div class="box" style="box-shadow: 2px 1px 8px 1px rgba(0, 0, 0, 0.1);">
										<div class="box-header">
											<p class="box-title"> Project Title
											</p>
											<span>
												<ul class="list-unstyled d-inline-flex float-right">
													<li style="margin:0px 5px; "><span class="badge badge-primary">End Date</span></li>
												</ul>
											</span>
										</div>
										<div class="box-body  pt-0">
											<p class="lead" style="font-size:1rem">Project Description<p>
										</div>
									</div>
								</div>
								<div class="col-md-6 my-4">
									<div class="box" style="box-shadow: 2px 1px 8px 1px rgba(0, 0, 0, 0.1);">
										<div class="box-header">
											<p class="box-title"> Project Title
											</p>
											<span>
												<ul class="list-unstyled d-inline-flex float-right">
													<li style="margin:0px 5px; "><span class="badge badge-primary">End Date</span></li>
												</ul>
											</span>
										</div>
										<div class="box-body  pt-0">
											<p class="lead" style="font-size:1rem">Project Description<p>
										</div>
									</div>
								</div>
								<div class="col-md-6  my-4">
									<div class="box" style="box-shadow: 2px 1px 8px 1px rgba(0, 0, 0, 0.1);">
										<div class="box-header">
											<p class="box-title"> Project Title
											</p>
											<span>
												<ul class="list-unstyled d-inline-flex float-right">
													<li style="margin:0px 5px; "><span class="badge badge-primary">End Date</span></li>
												</ul>
											</span>
										</div>
										<div class="box-body  pt-0">
											<p class="lead" style="font-size:1rem">Project Description<p>
										</div>
									</div>
								</div>
								<div class="col-md-6  my-4">
									<div class="box" style="box-shadow: 2px 1px 8px 1px rgba(0, 0, 0, 0.1);">
										<div class="box-header">
											<p class="box-title"> Project Title
											</p>
											<span>
												<ul class="list-unstyled d-inline-flex float-right">
													<li style="margin:0px 5px; "><span class="badge badge-primary">End Date</span></li>
												</ul>
											</span>
										</div>
										<div class="box-body  pt-0">
											<p class="lead" style="font-size:1rem">Project Description<p>
										</div>
									</div>
								</div>
								<div class="col-md-6  my-4">
									<div class="box" style="box-shadow: 2px 1px 8px 1px rgba(0, 0, 0, 0.1);">
										<div class="box-header">
											<p class="box-title"> Project Title
											</p>
											<span>
												<ul class="list-unstyled d-inline-flex float-right">
													<li style="margin:0px 5px; "><span class="badge badge-primary">End Date</span></li>
												</ul>
											</span>
										</div>
										<div class="box-body  pt-0">
											<p class="lead" style="font-size:1rem">Project Description<p>
										</div>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
    document.getElementById("nav").style.marginLeft = "200px";
    document.getElementById("burger").style.display = "none";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("nav").style.marginLeft = "auto";
    document.getElementById("burger").style.display = "block";
}
$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
       $('.user.nav.justify-content-begin').addClass('fixed-header');
			 $('.box-user').addClass('fixed-header2');
			  $('.lead.pt-3').addClass('ratakan');
    }
    else {
       $('.user.nav.justify-content-begin').removeClass('fixed-header');
			 $('.box-user').removeClass('fixed-header2');
			 $('.lead.pt-3').removeClass('ratakan');
    }
});
</script>
<?php $this->load->view('foot'); ?>
